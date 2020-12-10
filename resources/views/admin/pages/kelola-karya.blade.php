@extends('admin.app')

@push('css')
	<link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
@endpush

@section('content')
	<div class="row mt-3">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-hover datatable">
							<thead>
								<tr>
									<th>Judul Karya</th>
									<th>Jenis</th>
									<th>Judul Serial</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>a</td>
									<td>a</td>
									<td>a</td>
									<td>a</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header bg-white border-0 text-center font-weight-bold">
					<i class="fa fa-plus-square"></i> Tambah Karya
				</div>
				<div class="card-body">
					<form id="form-create">
						<div class="form-group">
							<label>Judul</label>
							<input id="judul" type="text" class="form-control" placeholder="Judul" required>
						</div>
						<div class="form-group">
							<label>Pengisi</label>
							<input id="pengisi" type="text" class="form-control" placeholder="Pengisi" value="Ustadz DR. Ali Musri" required>
						</div>
						<div class="form-group">
							<label>Deskripsi</label>
							<textarea id="deskripsi" rows="4" class="form-control" placeholder="Deskripsi" required></textarea>
						</div>
						<div class="form-group">
							<label>Jenis</label>
							<select class="form-control" id="jenis" required>
								<option>Pilih Jenis</option>
								<option value="tematik">Tematik</option>
								<option value="serial">Serial</option>
							</select>
						</div>
						<div class="form-group">
							<label>File Karya</label>
							<input type="file" name="karya" required id="karya">
						</div>
						<button class="btn btn-block btn-success">
							<i class="fa fa-plus-square"></i> Tambah Karya
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('js')
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons -->
    <script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <!-- Responsive -->
    <script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script type="module" src="{{asset('js/pages/kelola_karya.js')}}" type="text/javascript"></script>
@endpush