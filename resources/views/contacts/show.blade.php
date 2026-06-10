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
@if(session('success'))
    <div style="color: green; margin-bottom: 10px;">
        {{ session('success') }}
    </div>
@endif

    
    <p>
        <td>
    <a href="{{ route('contacts.edit', $contact->id) }}">ویرایش</a>

    <form action="{{ route('contacts.destroy', $contact->id) }}"
          method="POST"
          style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit"
                onclick="return confirm('آیا از حذف این پیام مطمئن هستید؟')">
            حذف
        </button>
    </form>
</td>
    </p>
@endsection
