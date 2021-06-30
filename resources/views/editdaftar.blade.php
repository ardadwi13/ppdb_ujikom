@extends('layout.v_template')

@section('title','Pendaftar')

@section('content')
<form action="/daftar/update/{{$daftar->nodaftar}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama : </label><br>
                 <input type="text" name="namalengkap" class="form-control" placeholder="nama" value="{{$daftar->namalengkap}}" style="width:100%">
                 <div class="text-danger">
                        @error('namalengkap')
                            {{$message}}
                        @enderror
                     </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Alamat</label>
                <input type="text" name="alamatlengkap" class="form-control" placeholder="alamat" value="{{$daftar->alamatlengkap}}" style="width:100%">
                <div class="text-danger">
                        @error('alamatlengkap')
                            {{$message}}
                        @enderror
                     </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="jk" class="form-control" placeholder="jenis kelamin" value="{{$daftar->jk}}" style="width: 100%;">
                  <option value="L" @if($daftar->jk== 'L') selected='selected' @endif>Laki-Laki</option>
                  <option value="P" @if($daftar->jk== 'P') selected='selected' @endif>Perempuan</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control select2" name="agama" class="form-control" placeholder="agama" value="{{$daftar->agama}}" style="width: 100%;">
                  <div class="text-danger">
                        @error('agama')
                            {{$message}}
                        @enderror
                     </div>
                    <option value="Islam"@if($daftar->agama== 'Islam') selected='selected' @endif>Islam</option>
                    <option value="Kristen" @if($daftar->agama== 'Kristen') selected='selected' @endif>Kristen</option>
                    <option value="Hindu" @if($daftar->agama== 'Hindu') selected='selected' @endif>Hindu</option>
                    <option value="Budha" @if($daftar->agama== 'Budha') selected='selected' @endif>Budha</option>
                    <option value="Katolik" @if($daftar->agama== 'Katolik') selected='selected' @endif>Katolik</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Asal Sekolah</label>
               <input type="text" name="asalsmp" class="form-control" placeholder="Asal smp" value="{{$daftar->asalsmp}}" style="width:100%">
               <div class="text-danger">
                        @error('asalsmp')
                            {{$message}}
                        @enderror
                     </div>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6">
                <div class="form-group">
                  <label>Jurusan</label>
                  <select class="form-control select2" name="jurusan" class="form-control" placeholder="jurusan" required value="{{$daftar->jurusan}}"style="width: 100%;">
                    <option value="RPL" @if($daftar->jurusan== 'RPL') selected='selected' @endif>Rekayasa Perangkat Lunak</option>
                    <option value="TBG" @if($daftar->jurusan== 'TBG') selected='selected' @endif>Tata Boga</option>
                    <option value="TBS" @if($daftar->jurusan== 'TBS') selected='selected' @endif>Tata Busana</option>
                    <option value="MMD" @if($daftar->jurusan== 'MMD') selected='selected' @endif>Multimedia</option>
                  </select>
                </div>

                
                <!-- /.form-group -->
              </div>
           <button class="btn btn-primary">Simpan</button>
           &nbsp;
           <a href="/menu" class="btn btn-success">Kembali</a>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
         
        </div>
        </section>
        </form>
        </div>
        <!-- /.card -->
  </div>
  <br>
  <br><br>
@endsection