<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'kecamatan' => DB::table('tbl_kecamatan')->count(),
            'jenjang' => DB::table('tbl_jenjang')->count(),
            'sekolah' => DB::table('tbl_sekolah')->count(),
            'user' => DB::table('users')->count(),
        ];
        return view('v_home', $data);
    }
}
