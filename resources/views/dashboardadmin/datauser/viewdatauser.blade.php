@extends('dashboardadmin.layouts.main')

@section('content')
    <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data User</h4>
                    <div class="table-responsive">
                      <table class="table table-hover">
                        <thead>
                          <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($user as $item)
                           <tr>
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role }}</td>
                                <td>
                                    <form action="/hapusdatauser/{{ $item->id_kontraktor }}" class="d-inline" method="POST">
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
