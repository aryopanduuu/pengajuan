<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\Pendaftar;
use Illuminate\Contracts\Session\Session;

class PengajuanController extends Controller
{
    public function index(Request $request)
    {
        $email = $request->session()->get('email');

        $user = pengajuan::where('email',"=",$email)->get(); 
        return view('/users/cekTahap2', [
            'cek2' => $user
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $email = $request->session()->get('email');

        $user =  DB::table('users')->where('email','=' ,$email)->get();
        
        return view('/users/pendaftaran', ['user'=>$user[0]]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $status = Pendaftar::where('STATUS_PENDAFTAR','=','Accept1')->first(); 
        
        if(!$status){
            redirect('/users/cekTahap1');
        }else{
            $pengajuan = new Pengajuan;
            $pengajuan->EMAIL = $request->session()->get('email');
            $pengajuan->SURAT_PENGANTAR = $request->surat;
        $pengajuan->PROPOSAL = $request->proposal;
        $pengajuan->STATUS_PENGAJUAN = $request->input('STATUS_PENGAJUAN','Waiting');
        
        // $pengajuan->save();
        
        // return response()->json([
        //     'data' => $pengajuan,
        //     'message' => 'Tambah data berhasil!!'
        // ]);

        if ($pengajuan->save()) {
            echo "
            <script>
            alert('Data berhasil ditambahkan');
            document.location.href='/users/cekTahap2'
            </script>
            ";
        } else {
            echo "
            <script>
            alert('Data gagal ditambahkan');
            document.location.href='/users'
            </script>
            ";
        }
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $pengajuan = Pengajuan::find($request->id);
        $pengajuan = new Pengajuan;
        $pengajuan->SURAT_PENGANTAR = $request->SURAT_PENGANTAR;
        $pengajuan->PROPOSAL = $request->PROPOSAL;
        $pengajuan->STATUS_PENGAJUAN = $request->STATUS_PENGAJUAN;

        $pengajuan->save();

        // return response()->json([
        //     'data' => $pengajuan,
        //     'message' => 'Ubah data berhasil!!'
        // ]);
        return redirect('/pengajuan')->with('status', 'Pengajuan berhasil di update!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $pengajuan = Pengajuan::find($request->id);
        $pengajuan->delete();

        return response()->json([
            'message' => 'Data berhasil di hapus coyyy!!!'
        ]);
    }

    public function approved(Request $request)
    {
        return view('', [
            'report' => Pengajuan::where('status', '1')->orderBy('tgl', 'desc')->get(),
            'title' => 'Approved Report',
            'counter' => 1
        ]);
    }

    public function approve($id)
    {
        DB::table('pengajuan')
            ->where('id', $id)
            ->update(['status' => '1']);

        return redirect('/')->with('approved', 'Laporan Disetujui');
    }

    public function decline($id)
    {
        DB::table('pengajuan')
            ->where('id', $id)
            ->update(['status' => '2']);

        return redirect('/')->with('declined', 'Laporan Ditolak');
    }

    public function unapprove($id)
    {
        DB::table('pengajuan')
            ->where('id', $id)
            ->update(['status' => '0']);

        return redirect('/')->with('unapprove', 'Laporan Batal Disetujui');
    }
}
