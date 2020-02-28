@extends('layout')
@section('pagina_titulo', 'HOME')

@section('pagina_conteudo')

<div class="main">

	<!-- Actual search box -->
	<form action="{{ route('busca.produtos') }}" method="GET">
		<div class="form-group has-feedback has-search">
			<span class="glyphicon glyphicon-search form-control-feedback"></span>
			<input name="q" type="text" class="form-control" placeholder="Buscar Produtos	">
		</div>
	</form>

</div>
<div class="col-lg-2">

	<h1 class="my-4">Categoria</h1>
	<div class="list-group">
		@foreach ($categorias as $index => $categoria)
		<a href="{{route('categoria.produtos',$index)}}" class="list-group-item">{{$categoria}}</a>		
		@endforeach
	</div>

</div>

<div id="container-produtos-index" class="container">
	<h3>Produtos da Categoria:{{ $categoria_name }}
	<div class="row">
		@foreach($registros as $registro)
		<div id="box-index" class="col s12 m6 l3">
			<div class="card medium">
				<div class="card-image">
					<img src="{{ $registro->imagem }}">
				</div>
				<div class="card-content">
					<span class="card-title grey-text text-darken-4 truncate" title="{{ $registro->nome }}">{{ $registro->nome }}</span>
					<p>R$ {{ number_format($registro->valor, 2, ',', '.') }}</p>
				</div>
				<div class="card-action">
					<a class="blue-text" href="{{ route('produto', $registro->id) }}">Veja mais informações</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

<br>
<br>
<br>
<br>
@endsection