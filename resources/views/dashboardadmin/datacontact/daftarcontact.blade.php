@extends('dashboardadmin.layouts.main')

@section('content')
    <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Kontak</h4>
                    <div class="table-responsive">
                        <h4><a href="/admin/viewtambahkontak" class="btn btn-primary">Tambah Kontak</a></h4>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Foto Kontak</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Nomor telepon</th>
                            <th>Email</th>
                            <th>Pekerjaan</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($contact as $item)
                           <tr>
                                <td><img src="{{ asset($item->gambar) }}" width="130px" height="300px"></td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->pekerjaan }}</td>
                                <td>
                                    <a href="/admin/ubahkontak/{{ $item->id_kontak }}" class="btn btn-primary"><img src="{{ asset('images/edit.png') }}" alt="" width="60px" height="60px"></a>
                                </td>
                                <td>
                                    <form action="/admin/hapusKontak/{{ $item->id_kontak }}" class="d-inline" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button class="badge border-0" onclick="return confirm('Yakin mau hapus data ini?')"><img src="{{ asset('images/delete.png') }}" alt="" width="60px" height="60px"></button>
                                    </form>
                                </td>
                           </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
@endsection
