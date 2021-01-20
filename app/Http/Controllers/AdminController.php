<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Pengajuan;

class AdminController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Pengajuan::selectRaw('count(created_at) AS total_today')->whereDate('created_at', date('Y-m-d'))->first();
        $total = Pengajuan::selectRaw('count(created_at) AS total')->first();
        return view('admin.home', compact('today', 'total'));
        //return $today;
    }

    public function profile()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required'
        ]);
        
        $user = User::find(Auth::id());
        $user->update($request->all());

        return redirect()->route('profile')->with('message-success', 'Profile berhasil diperbarui');
    }

    public function changePassword()
    {
        return view('admin.change-password');
    }

    public function storePassword(Request $request)
    {
        $this->validate($request, [
            'password_old' => 'required',
            'password' => 'required',
            'confirm' => 'required|same:password' 
        ]);
        $user = User::find(Auth::id());
        $user->makeVisible(['password']);
        if (Hash::check($request->password_old, $user->password)) {
            $user->update([
                'password' => Hash::make($request->password)
            ]);
        } else {
            return redirect()->route('changepassword')->with('message-warning', 'Password lama tidak sesuai!!');
        }

        return redirect()->route('changepassword')->with('message-success', 'Password berhasil diubah!!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /*  public function create()
    {
        //
    } */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /* public function store(Request $request)
    {
        //
    } */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function show($id)
    {
        //
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function edit($id)
    {
        //
    } */

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function update(Request $request, $id)
    {
        //
    } */

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /* public function destroy($id)
    {
        //
    } */
}
