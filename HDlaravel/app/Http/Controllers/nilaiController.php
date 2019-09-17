<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\basisdatab;

class nilaiController extends Controller
{
    public function index()
    {
        $hasil = basisdatab::all();
        return view('nilaimhs', ['liat'=>$hasil]);
    }
}
