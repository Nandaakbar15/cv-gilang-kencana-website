@extends('dashboardadmin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Ubah Kontak</h4>
                <input type="hidden" name="gambarLama" value="{{ $contact->gambar }}">
                <form class="forms-sample" action="/admin/ubahkontak/{{ $contact->id_kontak }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama" autofocus value="{{ old("nama", $contact->nama) }}">
                        @error('nama')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"  placeholder="Alamat Kontraktor" autofocus value="{{ old("alamat", $contact->alamat)  }}">
                        @error('alamat')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Kontraktor" autofocus value="{{ old('email', $contact->email) }}">
                        @error('email')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" placeholder="Nomor telepon" autofocus value="{{ old('no_telp', $contact->no_telp) }}">
                        @error('no_telp')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Pekerjaan</label>
                        <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" id="pekerjaan" name="pekerjaan" placeholder="Pekerjaan" autofocus value="{{ old('pekerjaan', $contact->pekerjaan) }}">
                        @error('pekerjaan')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        @if ($contact->gambar)
                            <img src="{{ asset($contact->gambar) }}" alt="" width="300px" height="200px">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <div class="img-preview">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control @error('gambar') is-invalid @enderror" id="gambar" placeholder="Gambar" name="gambar" onchange="previewImage()">
                            @error('gambar')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Ubah!</button>
                    <a href="/admin/datacontact" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
        <script text="text/javascript">
            function previewImage() {
                const foto = document.querySelector('#gambar');
                const imgPreview = document.querySelector('.img-preview');

                imgPreview.style.display = 'block';

                const oFReader = new FileReader();
                oFReader.readAsDataURL(foto.files[0]);

                oFReader.onload = function(oFREvent) {
                    imgPreview.src = oFREvent.target.result;
                }
            }
        </script>
@endsection
