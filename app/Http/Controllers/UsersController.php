<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\User;
use App\UserRoles;
use Session;

class UsersController extends Controller
{
    public function getjson()
    {
        $user = User::all();
        $response = [
            'success' => true,
            'data' => $user,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    public function index(Request $request)
    {
        $user = User::all();
        $roles = UserRoles::all();
        $cari = $request->cari;

        if ($cari) {
            $user = User::where('name', 'LIKE', "%$cari%")->orWhere('username', 'LIKE', "%$cari%")->orWhere('email', 'LIKE', "%$cari%")->get();
        }    
        return view('backend.user.index', compact('user', 'roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:users',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role_id = $request->roles;
        $user->password = bcrypt($request->password);
        $user->save();

        toastr()->success('Data berhasil ditambah!', "$user->name");

        return redirect()->route('user.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($request->id);

        $user->name = $request->name;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        toastr()->warning('Data berhasil diubah!', "$user->name");

        return redirect()->route('user.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $user = User::findOrFail($request->id);
        $old = $user->name;
        $user->delete();
        
        toastr()->error('Data berhasil dihapus!', "$old");
        
        return redirect()->route('user.index');
    }
}
