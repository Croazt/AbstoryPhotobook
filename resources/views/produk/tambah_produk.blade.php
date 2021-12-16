@extends('layouts.master')

@section('main_content')
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Tambah Produk</h1>
		</div>

		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4>Tambah Produk Baru</h4>
						</div>
						<div class="card-body">
							<form action="http://127.0.0.1:8000/produk/create" method="post">
								{{csrf_field()}}
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Produk</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" name="nama" class="form-control">
									</div>
								</div>

								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kategori</label>
									<select class="form-control col-sm-12 col-md-7" name="kategori">
										<option value="Magazine" class="form-control col-sm-12 col-md-7">Magazine</option>
										<option value="Premium" class="form-control col-sm-12 col-md-7">Premium</option>
										<option value="Luxury" class="form-control col-sm-12 col-md-7">Luxury</option>
									</select>
								</div>

								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Ukuran</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" name="ukuran" class="form-control">
									</div>
								</div>

								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga</label>
									<div class="col-sm-12 col-md-7">
										<input type="number" name="harga" class="form-control">
									</div>
								</div>

								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga dalam Rupiah</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" name="in_currency" class="form-control">
									</div>
								</div>

								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Keterangan</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" name="ket" class="form-control">
									</div>
								</div>


								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
									<div class="col-sm-12 col-md-7">
										<input type="file" name="imageurl" class="form-control">
									</div>
								</div>

								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
									<div class="col-sm-12 col-md-7">
										<button class="btn btn-dark">Tambah Produk</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

@endsection