@extends('layout.v_templatedaftar')

<body class="hold-transition sidebar-mini">

<center><h1>Selamat Datang Di PPDB SMK Semangat 45 </h1></center>
<center><h2>Silakan Daftar</h2></center>
<section class="content">

      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title"> Form Pendaftaran SMK Semangat 45 !!!</h3>
          </div>
          <form action="/daftar/insert" method="POST" enctype="multipart/form-data">
          @csrf
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama : </label><br>
                 <input type="text" name="namalengkap" class="form-control" placeholder="nama" value="{{old('namalengkap')}}" style="width:100%">
                 <div class="text-danger">
                        @error('namalengkap')
                            {{$message}}
                        @enderror
                     </div>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Alamat</label>
                <input type="text" name="alamatlengkap" class="form-control" placeholder="alamat" value="{{old('alamatlengkap')}}" style="width:100%">
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
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" name="jk" class="form-control" placeholder="jenis kelamin" value="{{old('jk')}}" style="width: 100%;">
                    <option selected="selected"></option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control select2" name="agama" class="form-control" placeholder="agama" value="{{old('agama')}}" style="width: 100%;">
                  <div class="text-danger">
                        @error('agama')
                            {{$message}}
                        @enderror
                     </div>
                     <option selected="selected"></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Katolik">Katolik</option>
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
               <input type="text" name="asalsmp" class="form-control" placeholder="Asal Sekoalh" value="{{old('asalsmp')}}" style="width:100%">
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
                  <select class="form-control select2" name="jurusan" class="form-control" placeholder="jurusan" required value="{{old('jurusan')}}"style="width: 100%;">
                  <option selected="selected"></option>
                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                    <option value="TBG">Tata Boga</option>
                    <option value="TBS">Tata Busana</option>
                    <option value="MMD">Multimedia</option>
                  </select>
                </div>

                
                <!-- /.form-group -->
              </div>
           <button class="btn btn-primary">Simpan</button>
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