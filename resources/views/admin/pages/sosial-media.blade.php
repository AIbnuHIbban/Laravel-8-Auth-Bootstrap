@extends('admin.app')

@section('content')
	<div class="row justify-content-center mt-3">
		<div class="col-md-5">
			<div class="card">
			    <div class="card-body">
				    <table>
						<tbody>	
							<tr>
								<td>
									<input type="text" class="form-control" placeholder="Nama Sosial Media">
								</td>
								<td>
									<input type="text" class="form-control" placeholder="Link">
								</td>
								<td>
									<button class="btn btn-primary">
										<i class="fa fa-plus"></i>
									</button>
								</td>
							</tr>
						</tbody>
				    </table>
			    </div>
		    </div>
		</div>
	</div>
@endsection