@extends('layouts.adminlite')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-header">{{ $title }}</div>

				<div class="card-body align-items-center">
					{!!Form::open(array(
						'url'=>route('apprentice.edit',$apprentice->id),
					))!!}

						@csrf {{-- Ese token es necesario agregarlo en un formulario para enviar alguna información de manera segura --}}

						<div class="row"> {{-- Divición del formulario en columnas --}}
							
							<div class="col"> {{-- Primera columna del formulario --}}

								<div class="mb-3"> {{-- Campo de dato para nombre --}}
								  <label for="name" class="form-label">Nombre</label>
								  {!! Form::text('name',$apprentice->name,['class'=>'form-control'])!!}
								</div>

								<div class="mb-3"> {{-- Campo de dato para ciudad --}}
								  <label for="city" class="form-label">Ciudad</label>
								  {!! Form::text('city',$apprentice->city,['class'=>'form-control'])!!}
								</div>
							  
							</div>
							
							<div class="col"> {{-- Segunda columna del formulario --}}

								<div class="mb-3"> {{-- Campo de dato para número de identificación --}}
								  <label for="document_number" class="form-label">Número de identificación</label>
								  {!! Form::number('document_number',$apprentice->document_number,['class'=>'form-control'])!!}
								</div>

								<div class="mb-3"> {{-- Campo de dato para número de teléfono --}}
								  <label for="telephone" class="form-label">Número de telefono</label>
								  {!! Form::number('telephone',$apprentice->telephone,['class'=>'form-control'])!!}
								</div>
							  
							</div>

						</div>

						<div class="mb-3"> {{-- Campo de dato para correo eletrónico --}}
						  <label for="email" class="form-label">Correo electronico</label>
						  {!! Form::email('email',$apprentice->email,['class'=>'form-control'])!!}
						</div>

						<div class="col text-center"> {{-- Sección del botón para el envío del formulario --}}
							<button type="submit" value="add" class="btn btn-primary aling-self-center">Guardar</button>
						</div>

					  {!!Form::close()!!}
					
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection