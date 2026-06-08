<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
        public function showForm(){
        return view('contact');
    }



    public function send(Request $request){
        $rules = [
            'name'    => ['required', 'min:3',],
            'email'   => ['required', 'email'],
            'subject' => ['required', 'min:3'],
            'message' => ['required', 'min:5'],
        ];

        $messages = [
            'name.required'    => 'لطفاً نام خود را وارد کنید.',
            'name.min'         => 'نام باید حداقل ۳ کاراکتر باشد.',

            'email.required'   => 'ایمیل الزامی است.',
            'email.email'      => 'فرمت ایمیل صحیح نیست.',

            'subject.required' => 'موضوع پیام را وارد کنید.',
            'subject.min'      => 'موضوع باید حداقل ۳ کاراکتر باشد.',

            'message.required' => 'متن پیام را وارد کنید.',
            'message.min'      => 'پیام باید حداقل ۵ کاراکتر باشد.',
        ];

        $validated = $request->validate($rules, $messages);

        $meta = [
        'ip'         => $request->ip(),
        'user_agent' => $request->header('User-Agent'),
        'method'     => $request->method(),
    ];

    return view('contact_result',[
        'data'=> $validated,
        'meta' => $meta
    ]);

    }

}
