@extends('layouts.main')

@section('title', 'ویرایش پیام')

@section('content')
    <h2>ویرایش پیام</h2>

    <p>
        <a href="{{ route('contacts.index') }}">بازگشت به لیست پیام‌ها</a> |
        <a href="{{ route('contacts.show', $contact->id) }}">مشاهده جزئیات</a>
    </p>

    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('contacts.update', $contact->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div style="margin-bottom: 10px;">
            <label for="name">نام:</label><br>
            <input type="text" id="name" name="name"
                   value="{{ old('name', $contact->name) }}">
        </div>

        <div style="margin-bottom: 10px;">
            <label for="email">ایمیل:</label><br>
            <input type="email" id="email" name="email"
                   value="{{ old('email', $contact->email) }}">
        </div>

        <div style="margin-bottom: 10px;">
            <label for="subject">موضوع:</label><br>
            <input type="text" id="subject" name="subject"
                   value="{{ old('subject', $contact->subject) }}">
        </div>

        <div style="margin-bottom: 10px;">
            <label for="message">متن پیام:</label><br>
            <textarea id="message" name="message" rows="5">{{ old('message', $contact->message) }}</textarea>
        </div>

        <button type="submit">ذخیره تغییرات</button>
    </form>
@endsection
