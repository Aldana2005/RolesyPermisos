@extends('layouts.adminlite')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">{{ $title }}</div>

				<div class="card-body">
					<table id="example1" class="table table-sm table-striped">
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

						@foreach($apprentices as $a)
							<tr>
								<td>{{$a->id}}</td>
								<td>{{$a->document_number}}</td>
								<td>{{$a->name}}</td>
								<td>{{$a->city}}</td>
								<td>{{$a->email}}</td>
								<td>{{$a->telephone}}</td>
								<td>
									<a href="{{route('apprentice.edit',$a->id)}}" class="btn btn-info btn-sm">
										<i class="fa-solid fa-pencil"></i>
										Editar
									</a>
									<a href="{{ route('apprentice.delete', $a->id) }}" class="btn btn-danger btn-sm" id="delete">
										<i class="fa-solid fa-trash"></i>
										
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
@section('scripts')
<script>
	const eliminarBtn = document.querySelector('#delete');
	eliminarBtn.addEventListener('click', () => {
	  Swal.fire({
		title: '¿Estás seguro de que deseas eliminar?',
		text: 'Esta acción no se puede deshacer.',
		icon: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		confirmButtonText: 'Sí, eliminar'
	  }).then((result) => {
		if (result.isConfirmed) {
		  // Aquí puedes escribir el código para eliminar el elemento
		  Swal.fire(
			'Eliminado',
			'El elemento ha sido eliminado.',
			'success'
		  )
		}
	  })
	});
  </script>
{{-- <script>
$(document).on('click','#delete', function(){
	var id= $(this).val();
	Swal.fire({
	title: 'Are you sure?',
	text: "You won't be able to revert this!",
	icon: 'warning',
	showCancelButton: true,
	confirmButtonColor: '#3085d6',
	cancelButtonColor: '#d33',
	confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
	if (result.isConfirmed) {
	  Swal.fire(
		'Deleted!',
		'Your file has been deleted.',
		'success'
	  )
	  $(location).attr('href', '{{ url('/apprentices/delete/') }}/'+id);
	}
})
  });
</script> --}}
@endsection