<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfileController extends Controller
{
    public function show(){
       $name = "navid";
       $email = "navidkhazaiepour";

       return view('profile',[
        'name' => $name,
        'email' => $email
       ]);
    }

    public function info(){
        return response()->json([
        'name' => 'navid',
        'email' => 'navid@gmail.com',
        'builder' => 'me',
        ]);
    }


    public function showById($id){
        $name = 'کاربر شماره'. $id;
        $email = "user{$id}@gmail.com";

        $skills = [
        'php',
        'laravel',
        'git',
        'mysql',
        'mvc',
        'html css'
        ];

        return view('profile',[
        'name' => $name,
        'email' => $email,
        'skills' => $skills,
        ]);
    }
}
