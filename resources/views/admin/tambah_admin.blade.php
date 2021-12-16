@extends('layouts.master')

@section('main_content')
<!-- Main Content -->
<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Tambah Admin</h1>
		</div>

		<div class="section-body">
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-header">
							<h4>Tambah Admin Baru</h4>
						</div>
						<div class="card-body">
							<form action="http://127.0.0.1:8000/admin/create" method="post">
								{{csrf_field()}}
								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama Admin</label>
									<div class="col-sm-12 col-md-7">
										<input type="text" name="name" class="form-control">
									</div>
								</div>

								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
									<div class="col-sm-12 col-md-7">
										<input type="email" name="email" class="form-control">
									</div>
								</div>

								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Password</label>
									<div class="col-sm-12 col-md-7">
										<input type="password" name="password" class="form-control">
									</div>
								</div>

								<div class="form-group row mb-4">
									<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
									<div class="col-sm-12 col-md-7">
										<button class="btn btn-dark">Tambah Admin</button>
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