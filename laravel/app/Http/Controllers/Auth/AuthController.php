<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


class AuthController extends Controller
{
    public function Authorization(Request $request){
        $_SESSION['id'] = Null;
        $userLogin = $request->input('login');
        $userPassword = $request->input('password');
        if(isset($userLogin) && isset($userPassword)){
            $login = DB::table('users')->select('users.name')->where('users.name', '=', $userLogin)->get();
            if($login){
                $userPassword = md5($userPassword);
                $user = DB::table('users')->select('users.id', 'users.password')->where('users.name', '=', $userLogin)->get();
                foreach($user as $el){
                    $password = $el->password;
                    $id = $el->id;
                }
                if($userPassword == $password){
                    $_SESSION['id'] = $id;
                    return $_SESSION['id'];
                }else{
                    return 'Пароль введен не верно';
                }
            }else{
                return "Данный логин в системе отсутствует";
            }
        }
        return 'Поля должны быть заполнены';
    }
    public function logout(){
        $_SESSION['id'] = NULL;
    }
}
