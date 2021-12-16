@extends('layouts.master')

@section('main_content')
<!-- Main Content -->
<div class="main-content">
  @if(session('sukses'))
  <div class="alert alert-success" role="alert">
    {{session('sukses')}}
  </div>
  @endif
  @if(session('hapus'))
  <div class="alert alert-danger" role="alert">
    {{session('hapus')}}
  </div>
  @endif
  <section class="section">
    <div class="section-header">
      <h1>Daftar Produk</h1>
    </div>

    <div class="section-body">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4>Daftar Produk</h4>
              <div class="card-header-form">
                @if(auth()->user()->role == 'Admin')
                <div class="input-group">
                  <a href="produk/add" class="btn btn-dark btn-lg">Tambah Produk</a>
                </div>
                @endif
              </div>
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-striped table-hover">
                  <tbody>
                    <tr>
                      <th class="text-center">
                        <i class="fas fa-list"></i>
                      </th>
                      <th>Nama Produk</th>
                      <th>Kategori</th>
                      <th>Harga</th>
                      @if(auth()->user()->role == 'Admin')
                      <th>Edit</th>                      
                      <th>Delete</th>
                      @endif
                    </tr>
                    @foreach($data_produk as $i => $produk)
                    <tr>
                      <td>{{$i+1}}</td>
                      <td>
                        <a href="http://127.0.0.1:8000/produk/{{$produk->id}}/detail">
                          {{$produk->nama}}
                        </a>
                      </td>
                      <td>{{$produk->kategori}}</td>
                      <td>{{$produk->in_currency}}</td>
                      @if(auth()->user()->role == 'Admin')
                      <td><a href="http://127.0.0.1:8000/produk/{{$produk->id}}/edit" class="btn btn-light">Edit</a></td>                      
                      <td><a href="http://127.0.0.1:8000/produk/{{$produk->id}}/delete" class="btn btn-dark" onclick="return confirm('Konfirmasi untuk mengahapus produk?')">Delete</a></td>
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