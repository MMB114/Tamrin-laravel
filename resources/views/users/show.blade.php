@extends('layout')

@section('content')
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold mb-6">جزئیات کاربر</h1>
        <div class="space-y-4 text-lg">
            <p><strong>آیدی:</strong> {{ $user['id'] }}</p>
            <p><strong>نام:</strong> {{ $user['name'] }}</p>
            <p><strong>ایمیل:</strong> {{ $user['email'] }}</p>
            <p><strong>موبایل:</strong> {{ $user['phone'] }}</p>
        </div>
        <div class="mt-8">
            <a href="{{ route('users.index') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg">بازگشت به لیست</a>
        </div>
    </div>
@endsection
