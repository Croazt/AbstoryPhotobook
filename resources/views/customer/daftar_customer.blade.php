@extends('layouts.master')

@section('main_content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Daftar Customer</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Daftar Customer</h4>
                    <div class="card-header-form">
                      <form>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Nama</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Email</th>
                            <!-- <th>Detail</th> -->
                          </tr>
                          @foreach($data_cus as $cus)
                            <tr>
                              <td>{{$cus->name}}</td>
                              <td>{{$cus->no_telp}}</td>
                              <td>{{$cus->alamat}}</td>
                              <td>{{$cus->email}}</td>
                              <!-- <td><a href="#" class="btn btn-dark">Detail</a></td> -->
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