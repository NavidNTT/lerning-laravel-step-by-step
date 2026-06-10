@extends('layouts.main')

@section('title', 'لیست پیام‌ها')

@section('content')
    <h2>لیست پیام‌های تماس با ما</h2>

    {{-- لینک برگشت به فرم تماس --}}
    <p>
        <a href="{{ route('contact.show') }}">ارسال پیام جدید</a>
    </p>
@if(session('success'))
    <div style="color: green;">
        {{ session('success') }}
    </div>
@endif
    @if($contacts->count() > 0)
        <table border="1" cellpadding="8" cellspacing="0" style="border-collapse: collapse; width:100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>موضوع</th>
                    <th>تاریخ ایجاد</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ $contact->created_at }}</td>
                        <td>
                            <a href="{{ route('contacts.show', $contact->id) }}">جزئیات هر فرد </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <td>


    </form>
</td>

        {{-- لینک‌های صفحه‌بندی (فقط اگر paginate استفاده کرده‌ای) --}}
        <div style="margin-top: 15px;">
            {{ $contacts->links() }}
        </div>
    @else
        <p>هنوز هیچ پیامی ثبت نشده است.</p>
    @endif
@endsection
