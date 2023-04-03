@extends('layouts.adminlite')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">
                    {{ $title }}
                </div>

				<div class="card-body">
					<table id="datatable" class="table table-sm table-striped">
						<thead>
						<tr>
							<th>Id</th>
							<th>Documento</th>
							<th>Nombre</th>
							<th>Ciudad</th>
							<th>Correo</th>
							<th>Telefono</th>
							<th>
								<a href="{{ route('apprentice.create') }}" class="btn btn-success btn-sm">
									<i class="fa-solid fa-plus"></i>
									Agregar									
								</a>
							</th>
						</tr>
						</thead>
						
						<tbody>

						

						@foreach($instructors as $a)
							<tr>
								<td>{{$a->id}}</td>
								<td>{{$a->document_number}}</td>
								<td>{{$a->name}}</td>
								<td>{{$a->city}}</td>
								<td>{{$a->email}}</td>
								<td>{{$a->telephone}}</td>
								<td>|
									<a href="" class="btn btn-info btn-sm">
										<i class="fa-solid fa-pencil"></i>
										Editar
									</a>
								</td>
								<td>
									<a href="" class="btn btn-danger btn-sm">
										<i class="fa-solid fa-trash"></i>
										Eliminar
									</a>

								</td>
							</tr>
						@endforeach
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection