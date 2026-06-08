@extends('layouts.main')

@section('title', 'خانه')

@section('content')
    <h2>خانه</h2>
    <p>به تمرین لاراول خوش آمدید.</p>

    <p>
        <a href="{{ route('profile.show', ['id' => 1]) }}">
            مشاهده پروفایل کاربر ۱
        </a>
    </p>

    <p>
        <a href="{{ route('profile.show', ['id' => 2]) }}">
            مشاهده پروفایل کاربر ۲
        </a>
    </p>
@endsection
