@extends('dashboard.layouts.main')

@section('content')
    <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Daftar Personil</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Foto Personil</th>
                            <th>Nama Personil</th>
                            <th>Alamat Personil</th>
                            <th>Nomor HP</th>
                            <th>Email</th>
                            <th>Specialist</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($kontraktor as $item)
                           <tr>
                                <td><img src="{{ asset($item->foto) }}" width="100px" height="100px"></td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->alamat_personil }}</td>
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
