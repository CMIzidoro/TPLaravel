<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/prato" method="post">
	<div class="form-group">
		@csrf
		<label for="Tipo">Tipo</label>
		Tipo: <input type="text" name="tipo">
		</div>

		<div class="form-group">
		<label for="Tipo">nome</label>
		Nome: <input type="text" name="nome">
		</div>
		
		<div class="form-group">
		<label for="Tipo">preco</label>
		Preço: <input type="number" name="preco">
		Retaurante: <select name="restaurante_id">
						@foreach($rest as $r)
							<option value="{{$r->id}}">{{$r->razaoSocial}}</option>
						@endforeach	
				    </select>
		</div>
		<input type="submit" value="Criar">
	</form>
</body>
</html>

  
