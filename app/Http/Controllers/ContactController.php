<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use PhpParser\Node\Stmt\Return_;

class ContactController extends Controller
{
        public function showForm(){
        return view('contact');
    }


    public function index(){

    $contacts = contact::orderBy('created_at', 'desc')->paginate(5);

    return view('contacts.index',[
    'contacts' => $contacts
    ]);

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

        $contact = contact::create($validated); 

        $meta = [
        'ip'         => $request->ip(),
        'user_agent' => $request->header('User-Agent'),
        'method'     => $request->method(),
    ];

    return view('contact_result',[
        'data'=> $contact,
        'meta' => $meta
    ]);

    }

    public function show(contact $contact){
    return view('contacts.show',[
    'contact' => $contact
    ]);
    }


public function destroy(Contact $contact)
{
    $contact->delete();

    return redirect()
        ->route('contacts.index')
        ->with('success', 'پیام با موفقیت حذف شد.');
}

public function edit(contact $contact){
    return view('contacts.edit',[
    'contact' => $contact
    ]);
}
public function update(Request $request, Contact $contact)
{
    $rules = [
        'name'    => ['required', 'min:3',],
        'email'   => ['required', 'email'],
        'subject' => ['required', 'min:3'],
        'message' => ['required', 'min:5'],
    ];

    $messages = [
        'name.required'    => 'لطفاً نام را وارد کنید.',
        'name.min'         => 'نام باید حداقل ۳ کاراکتر باشد.',

        'email.required'   => 'ایمیل الزامی است.',
        'email.email'      => 'فرمت ایمیل صحیح نیست.',

        'subject.required' => 'موضوع را وارد کنید.',
        'subject.min'      => 'موضوع باید حداقل ۳ کاراکتر باشد.',

        'message.required' => 'متن پیام را وارد کنید.',
        'message.min'      => 'پیام باید حداقل ۵ کاراکتر باشد.',
    ];

    $validated = $request->validate($rules, $messages);

    // روش ۱: fill + save
    $contact->fill($validated);
    $contact->save();

    // روش ۲ (کوتاه‌تر): $contact->update($validated);

    return redirect()
        ->route('contacts.show', $contact->id)
        ->with('success', 'پیام با موفقیت ویرایش شد.');
}

}
