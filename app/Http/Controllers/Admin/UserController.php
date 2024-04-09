<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class UserController extends Controller
{
    public function searchUser(Request $request)
    {

        $users = User::where('email', 'like' ,'%'.$request->search.'%')->orWhere('name', 'like' ,'%'.$request->search.'%')->get();

        return view('admin.manageUsers.search', compact('users'));

    }
    public function usersProfile($u)
    {

        $user = User::find($u);
        return view('admin.manageUsers.usersProfile', compact('user'));
    }

    public function users()
    {
        $users= User::latest()->paginate(10);
        return view('admin.manageUsers.index', compact('users'));
    }

    public function myProfile()
    {
        // $user = Auth::user();
        return view('admin.manageUsers.myProfile');

    }
    public function editProfile(Request $request, $u)
    {

        $request->validate([
            'name'=>'string',
            'email'=>['email', 'max:255'],
        ]);

        $user = User::find($u);

        if ($request->has('image')) {

        $ext = $request->image->getClientOriginalExtension();
        $rand = \Str::random(2);
        $imageName = \Str::slug($request->name).$rand.'.'.$ext;
        $request->image->move(public_path('/assets/userImages'), $imageName);

        $user->image = $imageName;

        }

        $user->name = $request->name;
        $user->email= $request->email;
        $user->save();

        FacadesAlert::success('Success', 'Profile Edited Successfully');
        return back();
    }

    public function giveRole(Request $request, $u)
    {
        $user= User::find($u);

        $user->role =$request->role;
        $user->save();
        FacadesAlert::success('Success','Role given');
        return back();
    }

    public function deleteUser($u)
    {

        $user = User::find($u);
        $user->delete();
        FacadesAlert::success('Success', 'User deleted Successfully.');
        return back();

    }
}
