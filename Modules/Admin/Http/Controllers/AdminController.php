<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use DB;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $user       = DB::table('users')->count();
        $admin    = DB::table('admins')->count();
        return view('admin::index', [
            'totalUser'=>$user, 
            'admin'=>$admin
        ]);
    }

}
