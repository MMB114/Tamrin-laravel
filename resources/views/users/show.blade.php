@extends('layouts.app')

@section('title','نمایش کاربر')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <div class="card-header bg-white">
                    <h5 class="mb-0">اطلاعات کاربر</h5>
                </div>
                <div class="card-body">
                    <p><strong>شناسه:</strong> {{ $user->id }}</p>
                    <p><strong>نام:</strong> {{ $user->name }}</p>
                    <p><strong>ایمیل:</strong> {{ $user->email }}</p>
                    <p><strong>تلفن:</strong> {{ $user->phone ?? '—' }}</p>

                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-outline-warning">ویرایش</a>
                    <a href="{{ route('users.index') }}" class="btn btn-outline-secondary">بازگشت</a>
                </div>
            </div>
        </div>
    </div>
@endsection
