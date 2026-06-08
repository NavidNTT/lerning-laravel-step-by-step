@extends('layouts.main')

@section('title', 'فرم تماس')

@section('content')
    <h2>فرم تماس</h2>

    <form action="{{ route('contact.send') }}" method="POST">
        @csrf

<label>نام:</label><br>
<input type="text" name="name" value="{{ old('name') }}"><br>
@error('name')
    <span style="color:red">{{ $message }}</span><br>
@enderror
<br>

<label>ایمیل:</label><br>
<input type="email" name="email" value="{{ old('email') }}"><br>
@error('email')
    <span style="color:red">{{ $message }}</span><br>
@enderror
<br>

<label>موضوع:</label><br>
<input type="text" name="subject" value="{{ old('subject') }}"><br>
@error('subject')
    <span style="color:red">{{ $message }}</span><br>
@enderror
<br>

<label>پیام شما:</label><br>
<textarea name="message">{{ old('message') }}</textarea><br>
@error('message')
    <span style="color:red">{{ $message }}</span><br>
@enderror
<br>

        <button type="submit">ارسال</button>
    </form>

    @if ($errors->any())
        <div style="color:red;margin-top:20px">
            <strong>خطاهای زیر را بررسی کنید:</strong>
            <ul>
                @foreach ($errors->all() as $e)
                    <li>{{ $e }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

