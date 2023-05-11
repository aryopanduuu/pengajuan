<?php

namespace App\Http\Controllers;


use App\Models\Pengajuan;
use App\Models\Pendaftar;
use App\Models\Logbook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**

     * Display a listing of the gatel.

     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { {
            // $allDataAkun = Auth::all();
            $allDataVerified1 = pendaftar::all()->count();
            $allDataVerified2 = Pengajuan::count();

            return view('/admin/indexadmin', compact('allDataVerified1', 'allDataVerified2'));
        }
    }

    public function getreadpendaftar()
    {
        // $pendaftar = Pendaftar::paginate(10);
        $rekapdata1 = pendaftar::all();
        return view('admin/rekapdata1', [
            'rekap1' => $rekapdata1
        ]);

        // return response()->json([
        //     'data' => $pendaftar
        // ]);
    }

    public function getreadpengajuan()
    {
        // $pendaftar = Pendaftar::paginate(10);
        $rekapdata2 = pengajuan::all();
        return view('admin/rekapdata2', [
            'rekap2' => $rekapdata2
        ]);
    }

    public function getReadAccept1()
    {
        $accept = DB::table('pendaftar')
            ->where('pendaftar.status', '=', '1')->get();

        //mengirim data ke view pengajuan
        return view('admin/accept1', [
            'accept1' => $accept
        ]);
    }

    public function getReadAccept2()
    {
        $accept = DB::table('pengajuan')
            ->where('pengajuan.status', '=', '1')->get();

        //mengirim data ke view pengajuan
        return view('admin/accept2', [
            'accept2' => $accept
        ]);
    }

    public function getReadlogbook()
    {
        // $logbook = logbook::paginate(10);
        $logbook = logbook::all();
        return view('admin/logbook', [
            'logbook' => $logbook
        ]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
