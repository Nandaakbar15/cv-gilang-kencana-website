@extends('dashboard.layouts.main')

@section('content')
    <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Kontraktor</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Foto Kontraktor</th>
                            <th>Nama Kontraktor</th>
                            <th>Alamat</th>
                            <th>Nomor HP</th>
                            <th>Email Kontraktor</th>
                            <th>Specialist</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($kontraktor as $item)
                           <tr>
                                <td><img src="{{ asset($item->foto) }}" width="100px" height="100px"></td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->specialist }}</td>
                           </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
@endsection
