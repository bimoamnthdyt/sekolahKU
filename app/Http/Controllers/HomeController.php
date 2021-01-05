<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekolah;
class HomeController extends Controller
{
    public function index()
    {
        $sekolah = Sekolah::all();
        return view('index', ['sekolah' => $sekolah]);
    }
}
