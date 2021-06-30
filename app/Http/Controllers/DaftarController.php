<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DaftarModel;

class DaftarController extends Controller
{
    public function __construct(){
        $this->DaftarModel = new DaftarModel();
    }
    public function index(){
        $data=[
            'daftar' => $this->DaftarModel->AllData(),
        ];
        return view('menudaftar',$data);
    }

    public function insert(){
        Request()->validate([
            'namalengkap'=> 'required',
            'jk'=> 'required',
            'alamatlengkap'=>'required',
            'agama'=>'required',
            'asalsmp'=>'required',
            'jurusan'=>'required',
            
            
        ]
        );
        $data = [
            'namalengkap' => Request()->namalengkap,
            'jk' => Request()->jk,
            'alamatlengkap'=> Request()->alamatlengkap,
            'agama'=> Request()->agama,
            'asalsmp'=> Request()->asalsmp,
            'jurusan'=> Request()->jurusan,
            
        ];

    $this->DaftarModel->AddData($data);
    return redirect()->route('daftar')->with('pesan','Data Berhasil Disimpan');
    }

    public function edit($nodaftar){
        if (!$this->DaftarModel->DetailData($nodaftar)) {
            abort(404);
        }
        $data = [
            'daftar' => $this->DaftarModel->DetailData($nodaftar),
        ];
        return view('editdaftar',$data);
    }

    public function update($nodaftar){
        Request()->validate([
            'namalengkap'=> 'required',
            'jk'=> 'required',
            'alamatlengkap'=>'required',
            'agama'=>'required',
            'asalsmp'=>'required',
            'jurusan'=>'required',
            
            
        ]
        );
        $data = [
            'namalengkap' => Request()->namalengkap,
            'jk' => Request()->jk,
            'alamatlengkap'=> Request()->alamatlengkap,
            'agama'=> Request()->agama,
            'asalsmp'=> Request()->asalsmp,
            'jurusan'=> Request()->jurusan,
            
        ];

    $this->DaftarModel->EditData($nodaftar,$data);
    return redirect()->route('daftar')->with('pesan','Data Berhasil Disimpan');
    
    }

    public function delete($nodaftar){
        $daftar = $this->DaftarModel->DetailData($nodaftar);
        $this->DaftarModel->DeleteData($nodaftar);
        return redirect()->route('daftar')->with('pesan','Data Berhasil Dihapus');
    }

    public function print(){
        $data=[
            'daftar' => $this->DaftarModel->AllData(),
        ];

        return view('daftarprint',$data);
    }

    public function detail($nodaftar){
        if (!$this->DaftarModel->DetailData($nodaftar)) {
            abort(404);
        }
        $data = [
            'daftar' => $this->DaftarModel->DetailData($nodaftar),
        ];
        return view('printpendaftar',$data);
    }


}
