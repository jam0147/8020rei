<?php

namespace App\Http\Controllers;
use App\User;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
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
            'email'     => 'email|required|unique:users|max:191',
            'name'      => 'required|max:50|alpha',
            'lastname'      => 'required|max:50|alpha',
            'password'  => 'required|max:191',
        ]);

        DB::transaction(function () use($request) {

            $user = User::create([
                'name'     => $request->name,
                'lastname' => $request->lastname,
                'email'    => $request->email,
                'password' => bcrypt($request->password)
            ]);

            $user->roles()->sync($request->roles);

        }, 5);

        return redirect()->route('users.index')->with('status', 'User saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();

        return view('users.edit', compact('user', 'roles'));
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
        $request->validate([
            'email'     => 'email|required|unique:users,email,'.$id.'|max:191',
            'name'      => 'required|max:50|alpha',
            'lastname'      => 'required|max:50|alpha',
        ]);

        $user = User::findOrFail($id);

        $user->name = $request->name;
        $user->lastname = $request->lastname;
        $user->email = $request->email;

        $user->save();

        $user->roles()->sync($request->roles);

        return redirect()->route('users.index')->with('status', 'User updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::destroy($id);
        return redirect()->route('users.index')->with('status', 'User deleted!');
    }
}
