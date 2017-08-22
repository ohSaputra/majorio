<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConnectController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // check user in database
        $user = User::where('email', $request->email)->first();

        if ($user)
            return view('page_login_password', $user);
        else 
            return view('page_registration');
    }

    public function show()
    {
        return view('page_login_email');
    }
}
