@extends('layout/main')


    @section('title','Cart')


    @section('main content')
    <section class="section">
    <div class="section-header">
      <h1>Detail Pesanan</h1>
    </div>

    <div class="section-body">
      <section class="section">

        <div class="section-body">
          <div class="invoice">
            <div class="invoice-print">
              <div class="row">
                <div class="col-lg-12">
                  <div class="invoice-title">
                    <h2>Invoice</h2>
                    <div class="invoice-number">No. Pesanan #{{$order->id}}</div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-6">
                      <address>
                        <strong>Pelanggan:</strong><br>
                        {{$order->name}}<br>
                        {{$order->alamat}}<br>
                        {{$order->no_telp}}<br>

                        <strong>Email:</strong><br>
                        {{$order->email}}<br><br>

                        <strong>Tanggal Order:</strong><br>
                        {{$order->tanggal}}<br><br>

                        <strong>Link File Foto:</strong><br>
                        {{$order->link}}<br><br>

                        <strong>Request:</strong><br>
                        {{$order->request}}<br><br>
                      </address>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <div class="col-lg-8">
                  <div class="section-title">Status Pesanan</div>
                  <p class="section-lead">{{$order->status}}</p>
                </div>
                <div class="col-md-12">
                  <div class="section-title">Detail Pesanan</div>
                  <div class="table-responsive">
                    <table class="table table-striped table-hover table-md">
                      <tbody>
                        <tr>
                          <th>No</th>
                          <th>Nama Produk</th>
                          <th class="text-center">Harga</th>
                          <th class="text-center">Jumlah</th>
                          <th class="text-right">Total</th>
                        </tr>
                        @foreach($order_produk as $i => $produk)
                        <tr>
                          <td>{{$i+1}}</td>
                          <td>{{$produk->nama}}</td>
                          <td class="text-center">{{$produk->harga}}</td>
                          <td class="text-center">{{$produk->qty}}</td>
                          <td class="text-right">{{$produk->total_harga}}</td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                  <div class="row mt-4">
                    <div class="col-lg-8">
                      <div class="section-title">Metode Pembayaran</div>
                      <p class="section-lead">{{$order->metode_pembayaran}}</p>
                    </div>
                    <div class="col-lg-8">
                      <div class="section-title">Metode Pengiriman</div>
                      <p class="section-lead">{{$order->metode_pengiriman}} (Free Ongkir)</p>
                    </div>
                    <div class="col-lg-4 text-right">
                      <div class="invoice-detail-item">
                        <div class="invoice-detail-name">Subtotal</div>
                        <div class="invoice-detail-value">{{$order->total_harga}}</div>
                      </div>
                      <div class="invoice-detail-item">
                        <div class="invoice-detail-name">Ongkos Kirim</div>
                        <div class="invoice-detail-value">0</div>
                      </div>
                      <hr class="mt-2 mb-2">
                      <div class="invoice-detail-item">
                        <div class="invoice-detail-name">Total</div>
                        <div class="invoice-detail-value invoice-detail-value-lg">{{$order->total_harga}}</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr>
            <div class="text-md-right">
              <div class="float-lg-left mb-lg-0 mb-3">
              <form action='/order/{{$order->nama}}/1/update'>
                <?php if($order->status=="Menunggu Pembayaran"){?>
                <a href="http://127.0.0.1:8000/order/{{$order->id}}/6/update" class="btn btn-outline-info btn-icon icon-left" onclick="return confirm('Konfirmasi untuk melakukan pembayaran??')">Konfirmasi Pembayaran</a>
                <?php } ?>
                <?php if($order->status=="Menunggu Link"){?>
                <a href="/uploadlink/{{$order->id}}" class="btn btn-outline-info btn-icon icon-left">Upload Link Google Drive</a>
                <?php } ?>
                </form>          
              </div>
              <br>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>                   
        @endsection
