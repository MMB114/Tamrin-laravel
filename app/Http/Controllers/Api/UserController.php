<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $users = [];

    public function __construct()
    {

        $this->users = collect([
            ['id' => 1, 'name' => 'محمد صفایی', 'email' => 'mohammad@example.com', 'phone' => '08421234567'],
            ['id' => 2, 'name' => 'سارا حسینی', 'email' => 'sara@example.com', 'phone' => '093244567'],
            ['id' => 3, 'name' => 'حسین کازار', 'email' => 'hisin@example.com', 'phone' => '0784484567'],
        ]);
    }


    public function index()
    {
        $users = $this->users;
        return view('users.index', compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|regex:/^09[0-9]{9}$/',
        ]);

        $newUser = [
            'id' => $this->users->max('id') + 1,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        $this->users->push(($newUser));

        return redirect()->route('users')->with('success', 'کاربر با موفقیت اضافه شد!');
    }


    public function show($id)
    {
        $user = $this->users->firstWhere('id', $id);
        if (!$user) abort(404);

        return view('users.show', compact('user'));
    }


    public function edit($id)
    {
        $user = $this->users->firstWhere('id', $id);
        if (!$user) abort(404);

        return view('users.edit', compact('user'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string|regex:/^09[0-9]{9}$/',
        ]);

        $this->users = $this->users->map(function ($user) use ($request, $id) {
            if ($user['id'] == $id) {
                $user['name'] = $request->name;
                $user['email'] = $request->email;
                $user['phone'] = $request->phone;
            }
            return $user;
        });

        return redirect()->route('users.index')->with('success', 'کاربر با موفقیت ویرایش شد!');
    }

    public function destroy($id)
    {
        $this->users = $this->users->where('id', '!=', $id);

        return redirect()->route('users.index')->with('success', 'کاربر با موفقیت حذف شد!');
    }
}
