@extends('layouts.main')

@section('title', 'پروفایل کاربر')

@section('content')
    <h2>پروفایل کاربر</h2>
    <p>سلام {{ $name }} عزیز!</p>
    <p>ایمیل شما: {{ $email }}</p>

        @if(!empty($skills))
        <h3>مهارت‌ها:</h3>
        <ul>
            @foreach($skills as $skill)
                <li>{{ $skill }}</li>
            @endforeach
        </ul>
    @else
        <p>هیچ مهارتی ثبت نشده است.</p>
    @endif
@endsection
