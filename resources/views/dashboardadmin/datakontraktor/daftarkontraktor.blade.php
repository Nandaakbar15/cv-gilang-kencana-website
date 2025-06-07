@extends('dashboardadmin.layouts.main')

@section('content')
    <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Personil</h4>
                    <div class="table-responsive">
                        <h4><a href="/admin/viewtambahkontraktor" class="btn btn-primary">Tambah Personil</a></h4>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Foto Personil</th>
                            <th>Nama Personil</th>
                            <th>Alamat Personil</th>
                            <th>Nomor HP</th>
                            <th>Email</th>
                            <th>Specialist</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($kontraktor as $item)
                           <tr>
                                <td><img src="{{ asset($item->foto) }}" width="130px" height="300px"></td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat_personil }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->specialist }}</td>
                                <td>
                                    <a href="/admin/ubahkontraktor/{{ $item->id_kontraktor }}" class="btn btn-primary"><img src="{{ asset('images/edit.png') }}" alt="" width="60px" height="60px"></a>
                                </td>
                                <td>
                                    <form action="/admin/hapusKontraktor/{{ $item->id_kontraktor }}" class="d-inline" method="POST">
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
