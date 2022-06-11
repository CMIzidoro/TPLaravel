<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/prato/{{$prato->id}}" method="post">
	<div class="form-group">
		@csrf
		@method('PUT')
		<label for="Tipo">Tipo</label>
		Tipo: <input type="text" name="tipo" value="{{$prato->tipo}}">
		</div>

		<div class="form-group">
		<label for="Tipo">nome</label>
		Nome: <input type="text" name="nome" value="{{$prato->nome}}">
		</div>

		<div class="form-group">
		Preço: <input type="number" name="preco" value="{{$prato->preco}}">
		Restaurante: <select name="restaurante_id">
						@foreach($rest as $r)
						  @if($prato->restaurante_id == $r->id)
							<option value="{{$r->id}}" selected>{{$r->razaoSocial}}</option>
						  @else
						  	<option value="{{$r->id}}" >{{$r->razaoSocial}}</option>
						  @endif
						@endforeach	
				    </select>
		</div>
		<input type="submit" value="Alterar">
	</form>
</body>
</html>