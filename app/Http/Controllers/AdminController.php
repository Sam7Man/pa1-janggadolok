<?php

namespace App\Http\Controllers;

use App\Post;
use App\View;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
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
        if(Auth::user()->role == 'user'){
            return redirect('home');
        }
        $data = DB::table('users')->count();
        $pesanan = DB::table('booking_user')->count();
        return view('admin.admin', ['data' => $data, 'pesanan' => $pesanan]);
    }

    public function data(){
        $data = DB::table('booking_user')
                ->join('booking', 'booking_user.id_paket', '=', 'booking.id')
                ->join('users', 'booking_user.id_user', '=', 'users.id')
                ->select('*')
                ->get();
        return view('admin.data', compact('data'));
    }

}
