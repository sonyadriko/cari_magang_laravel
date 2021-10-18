@extends('adminlte.template')
  
@section('title')
  Lowongan
@endsection

@section('master/lowongan_bos')
active
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.0/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{url('/perusahaan/lowongan_perusahaan/create')}}" class="btn btn-primary btn-md">
            <i class="fa fa-plus"></i> Tambah Data
        </a>
        <a href="{{url('/perusahaan/lowongan_perusahaan/view')}}" target="_blank" class="btn btn-default btn-md">
            <i class="fa fa-file"></i> View Report
        </a>
        <a href="{{url('/perusahaan/lowongan_perusahaan/excel')}}" class="btn bg-green color-palette">
            <i class="fa fa-file-excel"></i> Export To Excel
        </a>
        <a href="{{url('/perusahaan/lowongan_perusahaan/pdf')}}" class="btn btn-danger btn-md">
            <i class="fa fa-file-pdf"></i> Export to PDF
        </a>
    </div>
    <div class="card-body">
            <div class="table-responsive">
            <table class="table table-striped table-hover" id="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Lowongan</th>
                        <th>Jurusan</th>
                        <th>Kota</th>
                        <th>Kuota</th>
                        <th>Status</th>
                        <th>Expired</th>
                        <!-- <th>Status</th> -->
                        <!-- <th>Created</th>
                        <th>Updated</th> -->
                        <th class="nosort">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1 @endphp
                    @foreach($tb_lowongan as $low)
                    <tr>
                        <td>{{$no++}}</td>
                        <td>{{ $low->judul }}</td>
                        <td>{{ $low->jurusan }}</td>
                        <td>{{ $low->kota }}</td>
                        <td>{{ $low->kuota }}</td>
                        <td>{{ $low->status }}</td>
                        <td>{{ $low->exp }}</td>
                        <!-- <td>{{ $div->status }}</td> -->
                        <!-- <td>{{ date('d-m-Y',strtotime($div->created_at)) }}</td>
                        <td>{{ date('d-m-Y',strtotime($div->updated_at)) }}</td> -->
                        <td>
                            <a href="{{url('/lowongan_bos/edit/'.$low->id_lowongan.'')}}" class="btn btn-warning btn-sm" title="Edit Data"><i class="fa fa-edit"></i></a>
                            <a href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="swal({{$low->id_lowongan}})" title="Hapus Data"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
        $('#table').DataTable();
    } );

    function swal(id){
        Swal.fire({
        title: 'Apakah Anda Yakin?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus',
        cancelButtonText: 'batal'
      }).then((result) => {
        if (result.isConfirmed) {
          window.location = '/master/divisi/delete/'+id;
        }
      })

    }
</script>
@endsection