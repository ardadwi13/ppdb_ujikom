@extends('layout.v_template')

@section('title','Pendaftar')

@section('content')
@if(session('pesan'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fas fa-check"></i> Success</h5>
    {{(session('pesan'))}}
</div>
@endif

<a href="/daftar/print" class="btn btn-primary" target="_blank">print</a>
</br>
</br>

<table class="table table-bordered">
        <thead>
        <tr>
        <th>NO</th>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Alamat lengkap</th>
        <th>Agama</th>
        <th>Asal SMP</th>
        <th>Jurusan</th>
        <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $no=1; ?>
        @foreach($daftar as $data)
        <tr>
    <td>{{$no++}}</td>
    <td>{{$data->namalengkap}}</td>
    <td>{{$data->jk}}</td>
    <td>{{$data->alamatlengkap}}</td>
    <td>{{$data->agama}}</td>
    <td>{{$data->asalsmp}}</td>
    <td>{{$data->jurusan}}</td>
    <td>
    <a href="/daftar/print/{{$data->nodaftar}}" class="btn btn-success" target="_blank"><i class="fas fa-print"></i></a>
    <a href="/daftar/edit/{{$data->nodaftar}}" class="btn btn-warning" ><i class="fas fa-pen"></i></a>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$data->nodaftar}}">
    <i class="fas fa-trash"></i>
    </button>
    </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @foreach($daftar as $data)
    <div class="modal fade" id="delete{{$data->nodaftar}}">
        <div class="modal-dialog modal-sm">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">{{$data->namalengkap}}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Untuk Menghapus?</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
            <a href="/daftar/delete/{{$data->nodaftar}}" class="btn btn-outline-light">Yes</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

    @endforeach

@endsection