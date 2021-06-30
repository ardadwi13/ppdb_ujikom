<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DaftarModel extends Model
{
    public function AllData(){
        return DB::table('tbl_siswa')->get();
    }

    public function AddData($data){
        DB::table('tbl_siswa')->insert($data);
    }

    public function DetailData($nodaftar){
        return DB::table('tbl_siswa')->where('nodaftar',$nodaftar)->first();
    }

    public function EditData($nodaftar,$data){
        DB::table('tbl_siswa')->where('nodaftar',$nodaftar)->update($data);
    }

    public function DeleteData($nodaftar){
        DB::table('tbl_siswa')->where('nodaftar',$nodaftar)->delete();
    }

   
     
}
