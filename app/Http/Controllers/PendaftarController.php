<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use Illuminate\Contracts\Session\Session;

class PendaftarController extends Controller
{

    public function index(Request $request)
    {
        //
        // $pendaftar = Pendaftar::paginate(10);

        $email = $request->session()->get('email');

        $user = pendaftar::where('email', "=", $email)->get();
        return view('/users/cekTahap1', [
            'cek1' => $user
        ]);


        // $pendaftar = pendaftar::all();
        // return view('/users/...', [
        //     'data' => $pendaftar
        // ]);

        // return response()->json([
        //     'data' => $pendaftar
        // ]);
    }

    public function show(Request $request)
    {

        $email = $request->session()->get('email');

        $user =  DB::table('users')->where('email', '=', $email)->get();

        return view('/users/pendaftaran', ['users' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $role = $request->session()->get('role');
        if ($role != 'registered') {
            redirect('/view/users');
        } else {

            // DB::table('pendaftar')
            //     ->where(session()->get('email'))
            //     ->create(['STATUS_PENDAFTAR'=>request('STATUS_PENGAJUAN','WAITING')]);
            $pendaftar = new Pendaftar;

            // $pendaftar->ID_PENDAFTAR = $request->id_pendaftar;
            $pendaftar->NAME = $request->name;
            $pendaftar->EMAIL = $request->session()->get('email');
            $pendaftar->ASINS = $request->asins;
            $pendaftar->JURUSAN = $request->jurusan;
            $pendaftar->NO_TLP = $request->no_tlp;
            $pendaftar->JENIS = $request->jenis;
            $pendaftar->KELIND = $request->kelind;
            $pendaftar->PERIODE = $request->periode;
            $pendaftar->STARTDATE = $request->startdate;
            $pendaftar->ENDDATE = $request->enddate;
            $pendaftar->PIL = $request->pil;
            $pendaftar->RENCANA = $request->rencana;
            $pendaftar->FILE = $request->file;
            $pendaftar->STATUS = $request->input('status', 'Waiting');


            // var_dump($pendaftar);
            if ($pendaftar->save()) {
                echo "
                <script>
                alert('Data berhasil ditambahkan');
                document.location.href='/users/cekTahap1'
                </script>
                ";
            } else {
                echo "
                <script>
                alert('Data gagal ditambahkan');
                document.location.href='/users'
                </script>
                ";
            };
            // DB::table('pendaftar')
            //      ->where('email')
            //      ->update(['STATUS_PENDAFTAR' => "waiting"]);
        }
    }


    // return response()->json([
    //     'data' => $pendaftar,
    //     'message' => 'Tambah data berhasil!!'
    // ]);
    //}

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
        $pendaftar = Pendaftar::find($request->id);
        $pendaftar->NAME = $request->name;
        $pendaftar->EMAIL = $request->session()->get('email');
        $pendaftar->ASINS = $request->asins;
        $pendaftar->JURUSAN = $request->jurusan;
        $pendaftar->NO_TLP = $request->tlp;
        $pendaftar->JENIS = $request->jenis;
        $pendaftar->KELIND = $request->kelind;
        $pendaftar->PERIODE = $request->periode;
        $pendaftar->STARTDATE = $request->startdate;
        $pendaftar->ENDDATE = $request->enddate;
        $pendaftar->PIL = $request->pil;
        $pendaftar->RENCANA = $request->rencana;
        $pendaftar->FILE = $request->file;
        $pendaftar->STATUS = $request->status;
        $pendaftar->PASSWORD = $request->PASSWORD;

        $pendaftar->save();

        return response()->json([
            'data' => $pendaftar,
            'message' => 'Ubah data berhasil!!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //
        $pendaftar = Pendaftar::find($request->id);
        $pendaftar->delete();

        return response()->json([
            'message' => 'Data berhasil di hapus !'
        ]);
    }
}
