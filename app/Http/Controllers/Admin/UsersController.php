<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Session;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'           => 'required|max:191',
            'email'          => 'required|max:191|email|unique:users',
            'password'       => 'required|max:191|confirmed|min:6',
        ]);

        $user = new User;

        $user->name      = $request->name;
        $user->email     = $request->email;
        $user->password  = $request->password;

        if($user->save())
        {
            $alert_toast = 
            [
                'title' => 'Operation Successful : ',
                'text'  => 'User Successfully Added.',
                'type'  => 'success',
            ];
            
        }
        else
        {
            $alert_toast = 
            [
                'title' => 'Operation Failed : ',
                'text'  => 'A Problem Occurred While Adding a User.',
                'type'  => 'danger',
            ];
        }

        Session::flash('alert_toast', $alert_toast);
        return redirect()->route('admin.users.index');
    }

    public function edit($id)
    {
        
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'           => 'required|max:191',
            'email'          => 'required|max:191|email|unique:users,email,' . $id,
            'password'       => 'nullable|max:191|confirmed|min:6',
        ]);

        $user = User::findOrFail($id);

        $user->name      = $request->name;
        $user->email     = $request->email;

        if(!empty($request->password))
        {
            $user->password  = bcrypt($request->password);
        }

        if($user->save())
        {
            $alert_toast = 
            [
                'title' => 'Operation Successful : ',
                'text'  => 'User Successfully Updated.',
                'type'  => 'success',
            ];
        }
        else
        {
            $alert_toast = 
            [
                'title' => 'Operation Failed : ',
                'text'  => 'A Problem Update The User.',
                'type'  => 'danger',
            ];
        }

        Session::flash('alert_toast', $alert_toast);
        return redirect()->route('admin.users.index');
    }

    public function delete(Request $request)
    {
        $user = User::findOrFail($request->id);
        if($user->delete())
        {
            $alert_toast = 
            [
                'title' =>  'Operation Successful : ',
                'text'  =>  'User Successfully Deleted.',
                'type'  =>  'success',
            ];
        }
        else
        {
            $alert_toast = 
            [
                'title' => 'Operation Failed : ',
                'text'  => 'A Problem Deleting The User.',
                'type'  => 'danger',
            ];
        }

        Session::flash('alert_toast', $alert_toast);
        return redirect()->route('admin.users.index');
    }

 
}
