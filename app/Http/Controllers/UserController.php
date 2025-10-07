<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        $toalUsers = $users->count();
        return view('pages.admin.user.index', compact('users'));
    }
    public function create(){
        return view('pages.admin.user.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'nullable',
            'address' => 'nullable',
            'password' => 'required|min:6',
        ]);
        $data = $request->all();
        $user = User::create($request->all());
        return redirect()->route('admin.user.index')->with('success', 'User created successfully');
    }
    public function edit($id){
        $users = User::findOrFail($id);
        return view('pages.admin.user.edit', compact('users'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'phone' => 'nullable',
            'address' => 'nullable',
            'password' => 'nullable|min:6',
        ]);
        $user = User::findOrFail($id);
        $user->update($request->all());
        return redirect()->route('admin.user.index')->with('success', 'User updated successfully');
    }
    public function destroy($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.user.index')->with('success', 'User deleted successfully');
    }
    public function show($id){
        $users = User::findOrFail($id);
        return view('pages.admin.user.show', compact('users'));
    }
}
