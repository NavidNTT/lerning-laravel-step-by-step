@extends('layouts.main')

@section('title', 'نتیجه ارسال فرم')

@section('content')
    @if(isset($data))
        <p><strong>نام:</strong> {{ $data['name'] ?? '' }}</p>
        <p><strong>ایمیل:</strong> {{ $data['email'] ?? '' }}</p>
        <p><strong>موضوع:</strong> {{ $data['subject'] ?? '' }}</p>
        <p><strong>پیام:</strong> {{ $data['message'] ?? '' }}</p>
    @else
        <p style="color:red">داده‌ای برای نمایش وجود ندارد.</p>
    @endif

    @if(isset($meta))
        <hr>
        <h3>اطلاعات درخواست (فقط برای تمرین):</h3>
        <p><strong>IP:</strong> {{ $meta['ip'] ?? '' }}</p>
        <p><strong>Method:</strong> {{ $meta['method'] ?? '' }}</p>
        <p><strong>User Agent:</strong> {{ $meta['user_agent'] ?? '' }}</p>
    @endif
@endsection