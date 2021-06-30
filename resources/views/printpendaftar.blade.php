<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PPDB|Print</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{ asset('template/')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/')}}/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('template/')}}/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/')}}/dist/css/AdminLTE.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print()">
<center><h1>DATA SISWA BARU SMK SEMANGAT 45</h1></center>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Alamat lengkap</th>
        <th>Agama</th>
        <th>Asal SMP</th>
        <th>Jurusan</th>
        </tr>
    </thead>

   
    <tbody>

    <tr>
    <td>{{$daftar->namalengkap}}</td>
    <td>{{$daftar->jk}}</td>
    <td>{{$daftar->alamatlengkap}}</td>
    <td>{{$daftar->agama}}</td>
    <td>{{$daftar->asalsmp}}</td>
    <td>{{$daftar->jurusan}}</td>
    </tr>
    </tbody>

</table>
    

</body>
</html>