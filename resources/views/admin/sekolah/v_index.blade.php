@extends('layouts.backend')

@section('content')

    <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Data {{ $title }}</h3>

        <div class="card-tools">
            <a href="/sekolah/add" type="button" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i>Add</a>
        </div>
        <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            @if(session('pesan'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h5><i class="icon fas fa-check"></i> {{ session('pesan') }}!</h5>
              </div>
            @endif
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="50px" class="text-center">No</th>
                        <th class="text-center">Nama Sekolah</th>
                        <th width="50px" class="text-center">Jenjang</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Kecamatan</th>
                        <th class="text-center">Foto</th>
                        <th width="100px" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    @foreach ($sekolah as $data)
                        <tr>
                            <td class="text-center">{{ $no++ }}</td>
                            <td>{{ $data->nama_sekolah }}</td>
                            <td>{{ $data->jenjang }}</td>
                            <td>{{ $data->status }}</td>
                            <td>{{ $data->kecamatan }}</td>
                            <td class="text-center"><img src="{{ asset('foto') }}/{{ $data->foto }}" width="100px" height="75px"></td>
                            <td class="text-center">
                                <a href="/sekolah/edit/{{ $data->id_sekolah }}"class="btn btn-sm btn-flat btn-warning"><i class="fa fa-edit"></i></a>
                                <button class="btn btn-sm btn-flat btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_sekolah }}"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>

    @foreach($sekolah as $data)
    <div class="modal fade" id="delete{{ $data->id_sekolah }}">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">{{ $data->nama_sekolah }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Ingin Hapus Data Ini??</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
              <a href="/sekolah/delete/{{ $data->id_sekolah }}" type="button" class="btn btn-outline-light">Yes</a>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    @endforeach
    
    <script>
        $(function () {
          $("#example1").DataTable({
            "responsive": true,
            "autoWidth": false,
          });
          $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });
        });
      </script>

@endsection