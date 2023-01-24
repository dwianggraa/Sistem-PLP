<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data_user =  User::latest();
        if (request('search')) {
            $data_user->where('nama', 'like', '%' . request('search') . '%');
        }

        return view('admin.data_user')->with([

            'data_user' => $data_user->paginate(10)

        ]);
    }

    public function createdatauser()
    {
        return view('admin.createdatauser');
    }

    public function store(Request $request)
    {
        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'level' => $request->level,
        ]);
        return redirect('/datauser');
    }

    public function destroy($id)
    {
        $data_user = User::find($id);
        $data_user->delete();
        return back();
    }


    public function edit($id){
        $data_user = User::findorfail($id);
       
        return view('admin.editdatauser', compact('data_user'));
        
    }

    public function update(Request $request, $id)
    {
        $data_user = User::findorfail($id);
        $data_user->update($request->all());
        // dd( $data_user);
        return redirect('/datauser');
    }
}
