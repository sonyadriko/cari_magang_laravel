@extends('adminlte.template')
  
@section('title')
Lowongan Create Data
@endsection

@section('master/lowongan_bos')
active
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
       <div class="card">
           <div class="card-header">
               <h4>
                   Add new Data
               </h4>
           </div>
           <div class="card-body">
               <form action="{{url('/perusahaan/lowongan_perusahaan/create')}}" method="post" id="myForm">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                   <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Judul <span style="color:red">*</span></label>
                        <input name="judul" type="text" class="form-control" placeholder="Enter Judul Lowongan" value="{{ old('judul') }}" oninput="this.value = this.value.toLowerCase()">
                        <div class="text-danger">
                            @error('judul')
                                {{$message}}
                            @enderror
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jurusan <span style="color:red">*</span></label>
                        <input name="jurusan" type="text" class="form-control" placeholder="Enter Jurusan" value="{{ old('jurusan') }}">
                        <div class="text-danger">
                            @error('jurusan')
                                {{$message}}
                            @enderror
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                  <!-- <div class="row"> -->
                    
                  
                    <div class="col-sm-12">
                      <!-- text input -->
                        <label>Alamat <span style="color:red">*</span></label>
                       <input name="alamat" type="text" class="form-control" placeholder="Enter Alamat Kantor" value="{{ old('alamat') }}">
                        <div class="text-danger">
                            @error('alamat')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                        <label>Kota <span style="color:red">*</span></label>
                       <input name="kota" type="text" class="form-control" placeholder="Enter Kota" value="{{ old('kota') }}">
                        <div class="text-danger">
                            @error('kota')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                        <label>Kuota <span style="color:red">*</span></label>
                       <input name="kuota" type="text" class="form-control" placeholder="Enter Kuota" value="{{ old('kuota') }}">
                        <div class="text-danger">
                            @error('kuota')
                                {{$message}}
                            @enderror
                        </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <div class="form-group">
                        <label>Detail Lowongan</label>
                        <textarea name="detail" class="form-control" rows="3" style="resize:none">{{ old('detail') }}</textarea>
                      </div>
                      </div>
                    </div>
                  </div>
                   
               
           </div>
           <div class="card-footer">
                <div class="pull-right">
                    <a href="{{ url('/perusahaan/lowongan_perusahaan') }}" class="btn btn-info">Kembali</a>
                    <input type="reset" class="btn btn-danger" value="Batal">
                    <a href="javascript:void(0)" id="button" class="btn btn-success">Simpan</a>
                </div>
                </form>
            </div>
       </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('#button').click(function(e) {
        Swal.fire({
        title: 'Apakah Anda Yakin?',
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Kirim',
        cancelButtonText: 'batal'
      }).then((result) => {
        if (result.isConfirmed) {
          $('#myForm').submit();
        }
      })

    });
  </script> 
@endsection