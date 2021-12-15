@extends('layouts.backend')

@section('content')

    <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit User</h3>
        </div>
        <form action="/user/update/{{ $user->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama User</label>
                            <input name="name" class="form-control" value="{{ $user->name }}" placeholder="Nama User">
                            <div class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>E-Mail</label>
                            <input name="email" class="form-control" value="{{ $user->email }}}" placeholder="E-Mail" readonly>
                            <div class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input name="password" class="form-control" value="{{ $user->password }}" placeholder="Password" readonly>
                            <div class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Foto User</label>
                                <input type="file" name="foto" class="form-control" accept="image/png,image/jpeg">
                            <div class="text-danger">
                                @error('foto')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
                <a href="/user" type="submit" class="btn btn-warning float-right">Batal</a>
            </div>
        </form>
    </div>
</div>


@endsection

