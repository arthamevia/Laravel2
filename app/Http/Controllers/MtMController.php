<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;
// use App\Models\Hadiah;

class MtMController extends Controller
{
    public function index()
    {
        $anggota = Anggota::get();
        // $hadiah = Hadiah::get();
        return view('anggota', ['anggota' => $anggota]);
    }
}
