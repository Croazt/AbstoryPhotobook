@extends('layouts.master')

@section('main_content')
<!-- Main Content -->
<div class="main-content col-12" style="min-height: 530px;">
	@if(isset($berhasil))
	<div class="alert alert-success" role="alert">
		{{$berhasil}}
	</div>
	@endif
	<section class="section col-12">
		<div class="section-header">
			<h1>{{$produk->nama}}</h1>
			<div class="section-header-breadcrumb">
				<div class="breadcrumb-item active"><a href="http://127.0.0.1:8000/dashboard">Dashboard</a></div>
				<div class="breadcrumb-item">{{$produk->nama}}</div>
			</div>
		</div>
		<div class="section-body">
			<h2 class="section-title">{{$produk->nama}}</h2>
			<p class="section-lead">
			</p>

			<div class="row mt-sm-4">
				<div class="col-12 col-md-12 col-lg-5">
					<div class="card profile-widget">
						<div class="profile-widget-header">
							<img alt="image" src="{{$produk->getFoto()}}" class="rounded-circle profile-widget-picture">
							<div class="profile-widget-items">
								<div class="profile-widget-item">
									<div class="profile-widget-item-label">Kategori</div>
									<div class="profile-widget-item-value">{{$produk->kategori}}</div>
								</div>
								<div class="profile-widget-item">
									<div class="profile-widget-item-label">Ukuran</div>
									<div class="profile-widget-item-value">{{$produk->ukuran}}</div>
								</div>
								<div class="profile-widget-item">
									<div class="profile-widget-item-label">Harga</div>
									<div class="profile-widget-item-value">{{$produk->harga}}</div>
								</div>
							</div>
						</div>
						<div class="profile-widget-description">
							<div class="profile-widget-name">{{$produk->nama}} <div class="text-muted d-inline font-weight-normal">
									<div class="slash"></div> {{$produk->kategori}}
								</div>
							</div>
							{{$produk->ket}}
						</div>
						<div class="text-center">
							<a href="http://127.0.0.1:8000/produk/{{$produk->id}}/edit" class="btn btn-dark btn-lg">Edit Produk</a>
						</div>
					</div>
				</div>
			</div>
	</section>
</div>

@endsection