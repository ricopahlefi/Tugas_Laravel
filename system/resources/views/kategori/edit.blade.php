@extends('admin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Edit Data Kategori
					</div>
					<div class="card-body">
						<form action="{{url('kategori', $kategori->id)}}" method="post">
							@csrf
							@method("PUT")
							<div class="form-group">
								<label for="" class="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" value="{{$kategori->nama}}">
							</div>
							<div class="row no-gutters">
								<div class="col-md-6">
									<div class="form-group">
										<label for="" class="control-label">Harga</label>
										<input type="text" class="form-control" name="harga" value="{{$kategori->harga}}">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="" class="control-label">Berat</label>
										<input type="text" class="form-control" name="berat" value="{{$kategori->berat}}">
									</div>
								</div>
								<div class="col-md-3">
									<div class="form-group">
										<label for="" class="control-label">Stok</label>
										<input type="text" class="form-control" name="stok" value="{{$kategori->stok}}">
									</div>
								</div>
							</div>
							<button class="btn btn-dark float-right">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection