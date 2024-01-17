<?php

namespace App\Http\Controllers\Pustakawan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PustakawanController extends Controller
{
    public function index()
    {
        return view('pustakawan.dashboard');
    }
}
