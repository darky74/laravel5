<?php
namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function postSignUp(Request $request)
    {
           $email = $request['email'];
           $first_name = $request['first_name'];
           $last_name = $request['last_name'];
           $login = $request['login'];
           $country = $request['country'];
           $password = bcrypt($request['password']);

           $user = new User();
           $user->email = $email;
           $user->first_name = $first_name;
           $user->last_name = $last_name;
           $user->pseudo = $login;
           $user->country = $country;
           $user->password = $password;

           $user->save();

           return redirect()->back();
    }

    public function postSignIn(Request $request)
    {

    }



}