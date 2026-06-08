@extends('layouts.main')

@section('title', 'اطلاعات سیستم')

@section('content')
    <h2>اطلاعات سیستم / تنظیمات</h2>

    @if(isset($info))
        <ul>
            <li><strong>APP_NAME:</strong> {{ $info['app_name'] }}</li>
            <li><strong>APP_ENV:</strong> {{ $info['app_env'] }}</li>
            <li><strong>APP_DEBUG:</strong> {{ $info['app_debug'] ? 'true' : 'false' }}</li>
            <li><strong>APP_URL:</strong> {{ $info['app_url'] }}</li>
            <li><strong>PHP Version:</strong> {{ $info['php_version'] }}</li>
            <li><strong>Locale:</strong> {{ $info['laravel_locale'] }}</li>
            <li><strong>Timezone:</strong> {{ $info['timezone'] }}</li>
        </ul>
    @else
        <p>اطلاعاتی برای نمایش وجود ندارد.</p>
    @endif
@endsection
