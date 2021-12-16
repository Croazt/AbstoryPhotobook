@extends('layouts.master')

@section('main_content')
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Daftar Pesanan</h1>
          </div>

          <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Daftar Pesanan</h4>
                    <div class="card-header-form">
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                              </div>
                            </th>
                            <th>No Pesanan</th>
                            <th>Nama Customer</th>
                            <th>Total Pembelian</th>
                            <th>Status</th>
                            <th>Detail</th>
                          </tr>
                          @foreach($data_order as $order)
                          <tr>
                            <td class="p-0 text-center">
                              <div class="custom-checkbox custom-control">
                                <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                              </div>
                            </td>
                            <td>{{$order->id}}</td>
                            <td>{{$order->name}}</td>
                            <td>{{$order->total_harga}}</td>
                            <td>
                          <?php
                            switch ($order->status) {
                              case "Menunggu Pembayaran":?>
                                <div class="badge badge-danger">{{$order->status}}</div>
                                <?php break;
                              case "Menunggu Link":?>
                                <div class="badge badge-info">{{$order->status}}</div>
                                <?php break;
                              case "Sedang Diproses":?>
                                <div class="badge badge-warning">{{$order->status}}</div>
                                <?php break;
                              case "Pesanan Dikirim":?>
                                <div class="badge badge-dark">{{$order->status}}</div>
                                <?php break;
                              case "Pesanan Selesai":?>
                                <div class="badge badge-success">{{$order->status}}</div>
                                <?php break;                            
                            }?>
                            </td>
                            <td><a href="http://127.0.0.1:8000/order/{{$order->id}}/details" class="btn btn-light">Detail</a></td>
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