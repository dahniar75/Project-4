<?php 

namespace App\Http\Controllers;

class Authcontroller extends Controller

{

   function showLogin(){
   	return view('login');

   }

  function loginProcess(){
      dd(request()->all());


   }

   function logout(){
   	return view('logout');


   }

   function registration(){

   }

   function forgotpassword(){

   }

}