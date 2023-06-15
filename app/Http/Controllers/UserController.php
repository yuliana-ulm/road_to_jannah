<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data['user'] = User::all();
        return view('DataUser.daftar-user', $data);
    }

    public function edit(string $id)
    {
        $data['user'] = User::findorfail($id);

        return view('DataUser.Edit-user', $data);
    }

    public function update(Request $request, string $id)
    {
        if (!$request->password) {
            $query = User::where('id', $id)->update([
                'name' => $request->nama,
                'email' => $request->email,
                'is_admin' => $request->role
            ]);
        } else {
            if ($request->password == $request->conf_password) {
                $query = User::where('id', $id)->update([
                    'name' => $request->nama,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'is_admin' => $request->role
                ]);
            } else {
                return back();
            }
        }

        if ($query) {
            return redirect()->route('data-user');
        }
    }

    public function destroy(string $id)
    {
        $query = User::where('id', $id)->delete();

        if ($query) {
            return redirect()->route('data-user');
        }
    }
}
