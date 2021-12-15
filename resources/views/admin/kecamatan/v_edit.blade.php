@extends('layouts.backend')

@section('content')

    <div class="col-md-12">
        <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit Data</h3>
        </div>
        <form action="/kecamatan/update/{{ $kecamatan->id_kecamatan }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input name="kecamatan" value="{{ $kecamatan->kecamatan }}" class="form-control" placeholder="Nama Kecamatan">
                            <div class="text-danger">
                                @error('kecamatan')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Warna</label>

                            <div class="input-group my-colorpicker2">
                                <input name="warna" value="{{ $kecamatan->warna }}" class="form-control" placeholder="Warna">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-square"></i></span>
                                </div>
                            </div>
                            <div class="text-danger">
                                @error('warna')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label>GeoJSON</label>
                            <textarea name="geojson" rows="7" class="form-control" placeholder="GeoJSON">{{ $kecamatan->geojson }}</textarea>
                            <div class="text-danger">
                                @error('geojson')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
                <button type="submit" class="btn btn-warning float-right">Batal</button>
            </div>
        </form>
    </div>
</div>


@endsection

