<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    public function index(){
        return view('authorization.login');
    }
    public function Authorization(Request $request){
        $_SESSION['id'] = Null;
        $userLogin = $request->input('login');
        $userPassword = $request->input('password');
        if(isset($userLogin) && isset($userPassword)){
            $user = DB::table('users')->select('password', 'id')->where('name', '=', $userLogin)->first();
            if($user){
                $userPassword = md5($userPassword);
                if($user->password == $userPassword){
                    session(['id_user'=>$user->id]);
                    return redirect('/');
                }else{
                    return 'Не верно введен пароль';
                }
            }else{
                return "Данный логин в системе отсутствует";
            }
        }
    }
    public function logout(){
        session()->forget('id_user');
        return redirect('/');
    }
}
