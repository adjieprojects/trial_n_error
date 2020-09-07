<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $role = Role::create(['name' => 'writer']);
        // $permission  = Permission::create(['name' => 'edit articles']);

        // $role->givePermissionTo($permission);
        // $permission->assignRole($role);

        // $role = Role::create(['name' => 'super-admin']);
        $user = Auth::user();

        // $user->assignRole('super-admin');

        // $user->givePermissionTo('edit articles');

        // dd($user->hasPermissionTo('edit articles'));

        return view('home');
    }
}
