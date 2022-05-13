<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller{

    public function registration(Request $request){
        $login = $request->input('login');
        $password = $request->input('password');
        $email = $request->input('email');
        if(isset($login) && isset($password) && isset($email)){
            $password = md5($password);
            $user = New User;
            $user->name = $login;
            $user->password = $password;
            $user->email = $email;
            $user->save();
            return redirect('/');
        }elseif($login == ''){
            return 'Поле "Логин" должно быть заполнено!';
        }elseif($password == ''){
            return 'Поле "Пароль" должно быть заполнено!';
        }elseif($email == ''){
            return 'Поле "Почта" должно быть заполнено!';
        }
        return 'Хз че происходит';
    }
}