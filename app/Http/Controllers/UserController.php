<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function index(){
        // fungsi index ini mewakili index dan create sekaligus
        $users = User::all();

        return view('admin.user-table', compact('users'));
    }

    public function create()
    {
        return view('admin.user-create');
    }

    public function store(Request $request){
        $this->validate($request, [
            'passwd_confirm'   => 'same:passwd',
            'email'            => 'unique:users'
        ]);

        $user = new User();
        $user->name     = $request['name'];
        $user->email    = $request['email'];
        $user->role     = $request['role'];
        $user->password = bcrypt($request['passwd']);
        $user->save();

        return redirect(route('users.index'))->with('message', 'Pengguna Berhasil ditambahkan');
    }

    public function show($id){
        //
    }

    public function edit($id){
        //
    }

    public function update(Request $request, $id){
        //
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        return redirect(route('users.index'));
    }
}
