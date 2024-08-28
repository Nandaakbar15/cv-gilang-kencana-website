@extends('dashboardadmin.layouts.main')

@section('content')
    <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Kontraktor</h4>
                    <div class="table-responsive">
                        <h4><a href="/admin/viewtambahkontraktor" class="btn btn-primary">Tambah Kontraktor</a></h4>
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Foto Kontraktor</th>
                            <th>Nama Kontraktor</th>
                            <th>Alamat</th>
                            <th>Nomor HP</th>
                            <th>Specialist</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($kontraktor as $item)
                           <tr>
                                <td><img src="{{ asset($item->foto) }}" width="130px" height="200px"></td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_hp }}</td>
                                <td>{{ $item->specialist }}</td>
                                <td>
                                    <a href="/admin/ubahKontraktor/{{ $item->id }}" class="btn btn-primary"><img src="{{ asset('images/edit.png') }}" alt="" width="60px" height="60px"></a>
                                </td>
                                <td>
                                    <form action="/hapusKontraktor/{{ $item->id }}" class="d-inline" method="POST">
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
