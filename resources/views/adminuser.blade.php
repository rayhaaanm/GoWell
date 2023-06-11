@extends('layout.adminbar')
@section('page')
<div class="blank">
    @if(session()->has('success'))
    <div class="alert alert-info" role="alert">
        {{ session('success') }}
      </div>
    @endif
    <div class="user-header">
        <div class="jumlah-user">
            <div class="shape">
                <div class="shape-logo">
                  <i class="bi bi-person-fill width" id="logo-user"></i>
                    {{-- <center>
                    Jumlah
                    <p id="angka">{{ $Users->count() }}</p>
                    Users
                    </center> --}}
                </div>
                <div class="deskripsi">
                  Jumlah User <br>
                  {{ $Users->count() }}
                </div>
            </div>
        </div>
        <div class="add-article">

        </div>
    </div>
    <div class="user-info">
        <table class="table table-borderless" >
            <thead>
                <tr>
                    <th > ID </th>
                    <th > Fullname </th>
                    <th > Username </th>
                    <th > Email </th>
                    <th > Admin </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($Users as $User)
                <tr>
                    <th>{{ $User->id }}</th>
                    <td>{{ $User->fullname }}</td>
                    <td>{{ $User->username }}</td>
                    <td>{{ $User->email }}</td>
                    <td>{{ $User->is_admin }}</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#Edit_{{ $User->id }}" form="UsersEdit_{{ $User->id }}" >Edit</button>
                        <form action="{{ route('user.delete',[$User->id]) }}" method="post" class="d-inline">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                <div class="modal fade" id="Edit_{{ $User->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Edit User</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form action="{{ route('user.update', $User->id) }}" method="post"  id="UsersEdit_{{ $User->id }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="fullname" class="col-form-label">Fullname:</label>
                                <input type="text" class="form-control @error('fullname') is-invalid @enderror" id="fullname" name="fullname" value="{{ $User->fullname }}">
                                @error('fullname')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                            <div class="form-group">
                                <label for="username" class="col-form-label">Username:</label>
                                <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ $User->username }}">
                                @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="email" class="col-form-label">Email:</label>
                                <input type="text" class="form-control  @error('email') is-invalid @enderror" id="email" name="email" value="{{ $User->email }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                              </div>
                              <div class="form-group">
                                <label for="is_admin" class="col-form-label">Admin</label>
                                <input type="text" class="form-control  @error('is_admin') is-invalid @enderror" id="is_admin" name="is_admin" value="{{ $User->is_admin }}">
                                @error('is_admin')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" >Submit</button>
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                    
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>
@endsection