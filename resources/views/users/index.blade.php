@extends('layout')

@section('content')
    <div class="bg-white rounded-lg shadow-lg p-6">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">لیست کاربران</h1>
            <a href="{{ route('users.create') }}" class="bg-blue-600 text-white px-5 py-3 rounded-lg hover:bg-blue-700 transition">
                افزودن کاربر جدید
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full table-auto border-collapse">
                <thead>
                <tr class="bg-gray-800 text-white">
                    <th class="px-4 py-3 text-right">آیدی</th>
                    <th class="px-4 py-3 text-right">نام</th>
                    <th class="px-4 py-3 text-right">ایمیل</th>
                    <th class="px-4 py-3 text-right">موبایل</th>
                    <th class="px-4 py-3 text-right">عملیات</th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $user)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="px-4 py-3">{{ $user['id'] }}</td>
                        <td class="px-4 py-3 font-medium">{{ $user['name'] }}</td>
                        <td class="px-4 py-3">{{ $user['email'] }}</td>
                        <td class="px-4 py-3">{{ $user['phone'] }}</td>
                        <td class="px-4 py-3 flex gap-2">
                            <a href="{{ route('users.show', $user['id']) }}" class="bg-gray-600 text-white px-3 py-1 rounded text-sm">نمایش</a>
                            <a href="{{ route('users.edit', $user['id']) }}" class="bg-yellow-600 text-white px-3 py-1 rounded text-sm">ویرایش</a>
                            <form action="{{ route('users.destroy', $user['id']) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('مطمئنی؟')" class="bg-red-600 text-white px-3 py-1 rounded text-sm">حذف</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="5" class="text-center py-8 text-gray-500">هیچ کاربری وجود ندارد</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
