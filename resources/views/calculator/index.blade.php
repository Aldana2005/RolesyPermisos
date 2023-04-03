@extends('layouts.adminlite')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-3">
			<div class="card">
				<div class="card-header">{{ $title }}</div>
				<div class="card-body">
				{!! Form::open(['url'=> route('resultado')]) !!}
				<div class="mb-3">
			    <label for="num1" class="form-label">Numero 1</label>
			    <input type="text" class="form-control" id="num1" name="num1">
			  </div>
			  <div class="mb-3">
			    <label for="num2" class="form-label">Numero 2</label>
			    <input type="text" class="form-control" id="num2" name="num2">
			  </div>
			  <button  type="submit" name="op" class="btn btn-secondary" value="add">+</button>
			  <button type="submit" name="op" class="btn btn-secondary" value="rest" >-</button>
			  <button type="submit" name="op" class="btn btn-secondary" value="multiplication">*</button>
			  <button type="submit" name="op" class="btn btn-secondary" value="divicion">/</button>


				{!! Form::close()!!}
				
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
