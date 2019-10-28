<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\basisdatab;

class NilaiController extends Controller
{
        public function __construct()
        {
                $this->middleware('auth');
                $this->middleware('role:admin');
        }

        public function index()
        {
                $hasil = basisdatab::paginate(5);

                //$hasil = DB::table('basisdatabs')->get();

                $top5 = DB::table('basisdatabs')
                        ->select(DB::raw('nrp, nama, floor(avg(tugas1+tugas2+tugas3)/3) rata'))
                        ->groupBy('nrp')
                        ->orderBy('rata', 'desc')
                        ->limit(5)
                        ->get();
                return view('nilaimhs')->with('hasil', $hasil)->with('top5', $top5);
        }

        public function search(Request $request)
        {
                $q = $request->get('q');
                $hasil = basisdatab::where('nama', 'LIKE', '%' . $q . '%')->orderBy('nama')->paginate(5);
                return view('nilaimhs', ['hasil' => $hasil], ['q' => $q]);
        }
}
