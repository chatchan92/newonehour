<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Auth;  // 引用自带的 Auth
use App\User;  // 引用 User 模型
use Mail;

class UserController extends Controller
{

    public function handleRegister(Request $request) {

        $this->validate($request,[  // 验证
            'name' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $data = array(  // 获取用户信息
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => bcrypt($request->input("password")),
        );

        $newUser = User::create($data);
        if($newUser){ // 注册成功，跳转
            Auth::login($newUser);
            return redirect('/send');
        }



    }
        public function sendMail() {

            $name = Auth::user()->name;
            $password = Auth::user()->password;
            $email = Auth::user()->email;
            $now = time();

            $token = bcrypt($name.$password.$email.$now);  // 生成唯一的激活码

            $flag = Mail::send('emails.active',['name'=> $name, 'token' => $token,],function($message) {
                $to = Auth::user()->email;
                $message ->to($to)->subject('请激活您的账号');
            });

            if($flag){  // 发送成功，保存 token
                User::where('id',Auth::user()->id)->update(array(
                    'token'=>$token));
                echo "邮件已发送";
                return redirect('focus');
            } else {
                echo '发送邮件失败！';
            }
        }

        public function activeAccount(Request $request) {
            $verify = $request->input("verify");
            $resault = User::where("token",$verify)->update(["active"=>1]);
            if($resault){
                echo  "激活成功";
                return redirect('login');
            } else {
                echo "激活失败";
            }
        }
        public function authenticate()
        {
            $email = Auth::user()->email;
            $password = Auth::user()->password;
            if (Auth::attempt(['email' => $email, 'password' => $password, 'active' => 1])) {
                return view("dashboard.player");
            }else{
                return redirect('login');
            }
        }
}