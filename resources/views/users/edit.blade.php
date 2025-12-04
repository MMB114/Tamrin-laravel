@extends('layout')

@section('content')
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8">
        <h1 class="text-3xl font-bold mb-8 text-gray-800">ویرایش کاربر</h1>

        <form action="{{ route('users.update', $user['id']) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="name" class="block text-gray-700 font-medium mb-2">نام کامل</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name', $user['name']) }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition @error('name') border-red-500 @enderror"
                    required
                >
                @error('name')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block text-gray-700 font-medium mb-2">ایمیل</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email', $user['email']) }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition @error('email') border-red-500 @enderror"
                    required
                >
                @error('email')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-8">
                <label for="phone" class="block text-gray-700 font-medium mb-2">شماره موبایل</label>
                <input
                    type="text"
                    name="phone"
                    id="phone"
                    value="{{ old('phone', $user['phone']) }}"
                    placeholder="09123456789"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 transition @error('phone') border-red-500 @enderror"
                    required
                >
                @error('phone')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex gap-4">
                <button
                    type="submit"
                    class="bg-green-600 text-white px-8 py-3 rounded-lg hover:bg-green-700 transition font-medium text-lg"
                >
                    بروزرسانی کاربر
                </button>

                <a
                    href="{{ route('users.index') }}"
                    class="bg-gray-600 text-white px-8 py-3 rounded-lg hover:bg-gray-700 transition font-medium text-lg"
                >
                    انصراف
                </a>
            </div>
        </form>
    </div>
@endsection
