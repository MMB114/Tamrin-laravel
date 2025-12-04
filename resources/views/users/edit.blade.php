@extends('layouts.app')

@section('title','ویرایش کاربر')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">ویرایش کاربر</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">نام</label>
                            <input type="text" name="name" value="{{ old('name', $user->name) }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">ایمیل</label>
                            <input type="email" name="email" value="{{ old('email', $user->email) }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">تلفن</label>
                            <input type="text" name="phone" value="{{ old('phone', $user->phone) }}" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">رمز جدید (در صورت تغییر)</label>
                            <input type="password" name="password" class="form-control" placeholder="اگر نمی‌خواهید تغییر دهد خالی بگذارید">
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('users.index') }}" class="btn btn-outline-secondary">بازگشت</a>
                            <button class="btn btn-warning" type="submit">بروزرسانی</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
