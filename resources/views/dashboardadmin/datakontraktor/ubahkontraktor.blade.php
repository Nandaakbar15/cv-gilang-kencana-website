@extends('dashboardadmin.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Ubah Personil</h4>
                <input type="hidden" name="gambarLama" value="{{ $kontraktor->foto }}">
                <form class="forms-sample" action="/admin/ubahkontraktor/{{ $kontraktor->id_kontraktor }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama">Nama Personil</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"  placeholder="Nama Personil" autofocus value="{{ old("nama", $kontraktor->nama) }}">
                        @error('nama')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat"  placeholder="Alamat Personil" autofocus value="{{ old("alamat", $kontraktor->alamat)  }}">
                        @error('alamat')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Email Kontraktor" autofocus value="{{ old('email', $kontraktor->email) }}">
                        @error('email')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="no_telp" class="form-control @error('no_telp') is-invalid @enderror" id="no_telp" name="no_telp" placeholder="Nomor telepon Kontraktor" autofocus value="{{ old('no_telp', $kontraktor->no_telp) }}">
                        @error('no_telp')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        @if ($kontraktor->foto)
                            <img src="{{ asset($kontraktor->foto) }}" alt="" width="300px" height="200px">
                        @else
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                        @endif
                        <div class="img-preview">
                            <label for="foto">Foto Personil</label>
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" id="foto" placeholder="Foto Kontraktor" name="foto" onchange="previewImage()">
                            @error('foto')
                                <div class="is-invalid">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="specialist">Specialist</label>
                        <input type="text" class="form-control @error('specialist') is-invalid @enderror" id="specialist" placeholder="Specialist" name="specialist" autofocus value="{{ old('specialist', $kontraktor->specialist) }}">
                        @error('specialist')
                            <div class="is-invalid">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Ubah!</button>
                    <a href="/admin/daftarkontraktor" class="btn btn-light">Kembali</a>
                </form>
            </div>
        </div>
        <script text="text/javascript">
            function previewImage() {
                const foto = document.querySelector('#foto');
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
