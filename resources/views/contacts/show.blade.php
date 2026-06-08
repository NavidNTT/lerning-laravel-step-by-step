@extends('layouts.main')

@section('title', 'جزئیات پیام')

@section('content')
    <h2>جزئیات پیام</h2>

    <p>
        <a href="{{ route('contacts.index') }}">بازگشت به لیست پیام‌ها</a>
    </p>

    <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse;">
        <tr>
            <th>ID</th>
            <td>{{ $contact->id }}</td>
        </tr>
        <tr>
            <th>نام</th>
            <td>{{ $contact->name }}</td>
        </tr>
        <tr>
            <th>ایمیل</th>
            <td>{{ $contact->email }}</td>
        </tr>
        <tr>
            <th>موضوع</th>
            <td>{{ $contact->subject }}</td>
        </tr>
        <tr>
            <th>متن پیام</th>
            <td>{{ $contact->message }}</td>
        </tr>
        <tr>
            <th>تاریخ ایجاد</th>
            <td>{{ $contact->created_at }}</td>
        </tr>
        <tr>
            <th>آخرین ویرایش</th>
            <td>{{ $contact->updated_at }}</td>
        </tr>
    </table>

    <br>

    {{-- این دکمه‌ها فعلاً فقط ظاهری هستند، بعداً در درس بعدی وصلشان می‌کنیم --}}
    <p>
        <button type="button" disabled>ویرایش (به‌زودی)</button>
        <button type="button" disabled>حذف (به‌زودی)</button>
    </p>
@endsection
