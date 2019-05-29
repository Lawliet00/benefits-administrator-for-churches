@extends('layouts.app')

@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h1 class="panel-title">Acceso a la aplicación</h1>
				</div>
				<div class="panel-body">
					<form action="{{ route('login') }}" method="POST">
						<div class="form-group">
							<label for="user">Usuario</label>
							<input class="form-control"
								type="text" 
								name="user" placeholder="Ingresa tu Usuario">
						</div>
						<div class="form-group">
							<label for="password">Contraseña</label>
							<input class="form-control"
								type="text" 
								name="password" placeholder="Ingresa tu Contraseña">
						</div>
						<button class="btn btn-primery btn-block">Acceder</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection