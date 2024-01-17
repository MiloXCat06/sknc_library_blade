<?php

namespace App\Http\Controllers\Anggota;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    public function dashboard()
    {
        if(Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif(Auth::user()->role === 'pustakawan') {
            return redirect()->route('pustakawan.dashboard');
        }

        return view('anggota.dashboard');
    }
}
