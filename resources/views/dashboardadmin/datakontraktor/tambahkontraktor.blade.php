@extends('dashboardadmin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah Personil</h4>
                <form class="forms-sample" action="/admin/tambahkontraktor" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Personil</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"  placeholder="Nama Kontraktor" required="{{ old("nama") }}">
                        @error('nama')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"  placeholder="Alamat Kontraktor" required="{{ old("alamat") }}">
                        @error('alamat')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Kontraktor" required="{{ old('email') }}">
                        @error('email')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="no_telp" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" placeholder="Nomor telepon Kontraktor" required="{{ old('no_telp') }}">
                        @error('no_telp')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto Personil</label>
                        <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" placeholder="Foto Kontraktor" name="foto" required="{{ old('foto') }}">
                        @error('foto')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="specialist">Specialist</label>
                        <input type="text" class="form-control @error('specialist') is-invalid @enderror" id="specialist" placeholder="Specialist" name="specialist" required="{{ old('specialist') }}">
                        @error('specialist')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-primary me-2">Tambah!</button>
                    <a href="/admin/daftarkontraktor" class="btn btn-light">Cancel</a>
                </form>
            </div>
        </div>
@endsection
