
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi Siswa</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('adminlte')}}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte')}}/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="{{asset('adminlte')}}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('adminlte')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <style type="text/css">
    .select2-container .select2-selection--single{
      height: auto !important;
    }
    .select2-container--default .select2-selection--single{
      border: 1px solid #ced4da !important;
    }
    .select2-container .select2-selection--single .select2-selection__rendered{
      padding-left: 0 !important;
    }
  </style>
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>Cari</b> Magang</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register Siswa Baru</p>

      <form action="{{url('/registersiswa')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
         <!--  <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div> -->
        </div>
        <div class="input-group mb-3">
          <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap">
        </div>
        <div class="input-group mb-3">
          <input type="text" name="sekolah" class="form-control" placeholder="Asal Sekolah">
        </div>
        <div class="input-group mb-3">
          <select class="form-control select2" name="jurusan" style="width: 100%; color: #ced4da;">
                    <option selected disabled>Jurusan</option>
                    <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                    <option value="Teknik Komputer & Jaringan">Teknik Komputer & Jaringan</option>
                    <option value="Animasi">Animasi</option>
                    <option value="Multimedia">Multimedia</option>
          </select>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="alamat" class="form-control" placeholder="Alamat">
        </div>

       <div class="input-group mb-3">
          <select class="form-control select2" name="jenis_kelamin" style="width: 100%; color: #ced4da;">
                    <option selected disabled>Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
          </select>
        </div> 
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="{{url('/')}}" class="text-center">login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{asset('adminlte')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte')}}/dist/js/adminlte.min.js"></script>
<script src="{{asset('adminlte')}}/plugins/select2/js/select2.full.min.js"></script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

  })
</script>
</body>
</html>
