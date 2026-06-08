<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SystemInfoController extends Controller
{
    public function index(){
        $info = [
            'app_name' => config('app.name'),
            'app_env' => config('app.env'),
            'app_debug' => config('app.debug'),
            'app_url' => config('app.url'),


            'php_version'    => phpversion(),
            'laravel_locale' => config('app.locale'),
            'timezone'       => config('app.timezone'),

        ];

          return view('system_info', [
            'info' => $info,
        ]);
    } 
}
