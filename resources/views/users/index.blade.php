@extends('layouts.app')

@section('title','لیست کاربران')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">لیست کاربران</h2>
        <a href="{{ route('users.create') }}" class="btn btn-success">+ کاربر جدید</a>
    </div>

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table align-middle">
                    <thead>
                    <tr class="text-muted">
                        <th>#</th>
                        <th>نام</th>
                        <th>ایمیل</th>
                        <th>تلفن</th>
                        <th class="text-end">عملیات</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone ?? '—' }}</td>
                            <td class="text-end">
                                <a class="btn btn-sm btn-outline-primary" href="{{ route('users.show', $user->id) }}">نمایش</a>
                                <a class="btn btn-sm btn-outline-warning" href="{{ route('users.edit', $user->id) }}">ویرایش</a>
                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('آیا مطمئنید می‌خواهید حذف کنید؟')">حذف</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center text-muted">هیچ کاربری یافت نشد.</td></tr>
                    @endforelse
                    </tbody>
                </table>
            </div>

            <div class="mt-3">
                {{ $users->links() }} <!-- pagination (با استایل بوت‌استرپ اگر لاراول pagination config داشته باشه) -->
            </div>
        </div>
    </div>
@endsection
