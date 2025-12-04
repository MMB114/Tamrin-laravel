<!-- create.blade.php -->
@extends('layout')

@section('content')
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-2xl font-bold mb-6">افزودن کاربر جدید</h1>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">نام</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-2">ایمیل</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="mb-6">
                <label class="block text-gray-700 mb-2">موبایل</label>
                <input type="text" name="phone" placeholder="09123456789" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:border-blue-500" required>
            </div>
            <div class="flex gap-4">
                <button type="submit" class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700">ذخیره</button>
                <a href="{{ route('users.index') }}" class="bg-gray-600 text-white px-6 py-3 rounded-lg hover:bg-gray-700">انصراف</a>
            </div>
        </form>
    </div>
@endsection
