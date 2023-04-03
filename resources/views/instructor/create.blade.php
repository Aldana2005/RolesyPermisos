@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ $title }}</div>

				<div class="card-body align-items-center">
					<form action="{{ route('instructor.create') }}" method="POST">

						@csrf {{-- Ese token es necesario agregarlo en un formulario para enviar alguna información de manera segura --}}

						<div class="row"> {{-- Divición del formulario en columnas --}}
							
							<div class="col"> {{-- Primera columna del formulario --}}

								<div class="mb-3"> {{-- Campo de dato para nombre --}}
								  <label for="name" class="form-label">Nombre</label>
								  <input type="text" class="form-control" name="name" id="name" required>
								</div>

								<div class="mb-3"> {{-- Campo de dato para ciudad --}}
								  <label for="city" class="form-label">Ciudad</label>
								  <input type="text" class="form-control" name="city" id="city" required>
								</div>

							  
							</div>
							
							<div class="col"> {{-- Segunda columna del formulario --}}

								<div class="mb-3"> {{-- Campo de dato para número de identificación --}}
								  <label for="document_number" class="form-label">Número de identificación</label>
								  <input type="number" class="form-control" name="document_number" id="document_number" required>
								</div>

								<div class="mb-3"> {{-- Campo de dato para número de teléfono --}}
								  <label for="telephone" class="form-label">Número de telefono</label>
								  <input type="number" class="form-control" name="telephone" id="telephone" required>
								</div>
							  
							</div>

						</div>

						<div class="mb-3"> {{-- Campo de dato para correo eletrónico --}}
						  <label for="email" class="form-label">Correo electronico</label>
						  <input type="email" class="form-control" name="email" id="email" required>
						</div>
						<div class="mb-3"> {{-- Campo de dato para correo eletrónico --}}
							<label for="email" class="form-label">Correo electronico</label>
							<input type="email" class="form-control" name="email" id="email" required>
						  </div>

						<div class="col text-center"> {{-- Sección del botón para el envío del formulario --}}
							<button type="submit" class="btn btn-primary aling-self-center">Registrar</button>
						</div>

					  </form>
					
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection