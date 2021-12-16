@extends('layouts.master')

@section('main_content')
<!-- Main Content -->
<div class="main-content">
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{session('sukses')}}
  </div>
  @endif
  <section class="section">
    <div class="section-header">
      <h1>Daftar Admin</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Daftar Admin</h4>
              <div class="card-header-form">
                <div class="input-group">
                  @if(auth()->user()->role == 'Bos')
                  <a href="admin/add" class="btn btn-dark btn-lg">Tambah Admin</a>
                  @endif
                </div>
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped">
                  <tbody>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      @if(auth()->user()->role == 'Bos')
                      <th>Delete</th>
                      @endif
                    </tr>
                    @foreach($data_admin as $adm)
                    <tr>
                      <td>{{$adm->name}}</td>
                      <td>{{$adm->email}}</td>
                      @if(auth()->user()->role == 'Bos')
                      <td><a href="http://127.0.0.1:8000/admin/{{$adm->id}}/delete" class="btn btn-dark" onclick="return confirm('Konfirmasi untuk mengahapus admin?')">Delete</a></td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection