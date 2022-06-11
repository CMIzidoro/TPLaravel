<!-- resources\views\restaurante\create.blade.php -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/restaurante" method="post">
	<div class="form-group">

		@csrf
		<label for="razaoSocial">Razao Social</label>
		Razao: <input type="text" name="razaoSocial"/>
		</div>

		<div class="form-group">
		<label for="cnpj">CNPJ</label>
		CNPJ: <input type="number" name="cnpj"/>
		</div>
		<div class="form-group">
		<label for="endereco">endereco</label>
		Endereco: <input type="text" name="endereco"/>
		</div>

		<div class="form-group">
		<label for="telefone">telefone</label>
		Telefone: <input type="text" name="telefone"/>
		</div>
		<div class="form-group">
		<label for="email">email</label>
		Email: <input type="email" name="email"/>
		</div>
		<div class="form-group">
		Tipo: 
		<select name="tipo">
			@foreach($tipos as $t)
				<option value="{{$t->id}}">{{$t->descricao}}</option>
			@endforeach	
		</select>
		</div>
	</form>
</body>
</html>