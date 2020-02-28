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

	<h1 id="categorialabel" class="my-4">Categoria</h1>
	<div id="categoriatable" class="list-group">
		@foreach ($categorias as $index => $categoria)
		<a href="{{route('categoria.produtos',$index)}}" class="list-group-item">{{$categoria}}</a>
		@endforeach
	</div>

</div>


<div class="container">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" style="width:100%;">
			<div class="item active">
				<img src="https://blog.revendakwg.com.br/wp-content/uploads/2016/08/B-Bem-vindo-ao-blog.png" style="width:100%;">
			</div>

			<div class="item">
				<img src="https://s3.amazonaws.com/jacotei-static-img/guia/wp-content/uploads/2018/09/18151815/utensilios_domesticos_jogo-de-panela-tramontina-inox.jpg" style="width:100%;">
			</div>

			<div class="item" style="width:100%;">
				<img src="https://blog.revendakwg.com.br/wp-content/uploads/2016/08/B-Bem-vindo-ao-blog.png" style="width:100%;">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<div id="container-produtos-index" class="container">
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
<style>
	#container-produtos-index {
		box-shadow: 0.2em 0.1em 1.2em #FF0000;
	}

	#categoriatable {
		box-shadow: 0.2em 0.1em 1.2em #FF0000;
	}

	#categorialabel {
		font-size: 3.65rem;
		color: yellow;
		font-family: Stencil Std, fantasy;
		text-shadow: 0.2em 0.1em 0.2em #FF0000;

	}
</style>
@endsection