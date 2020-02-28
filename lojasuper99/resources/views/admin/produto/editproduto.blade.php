@extends('layout')
@section('pagina_titulo', 'Cadastro de Produto' )

@section('pagina_conteudo')

<div id="container-login" class="container">
    <div id="login" class="row">
        <div class="col l10 offset-l1 s12 m12">
            <h4>Cadastrar Produto</h4>
            <br>

            <form method="POST" action="{{route('admin.produtos.atualizar', $produto)}}">
                {!! method_field('PUT') !!}
                {{ csrf_field() }}

                    <div class="row">
                        <div class="input-field">
                            <input id="nome" type="text" name="nome" value="{{$produto->nome or old('nome') }}" class="validate {{ $errors->has('nome') ? ' invalid' : '' }}">
                            <label id="nome" for="nome" data-error="{{ $errors->has('nome') ? $errors->first('nome') : null }}">Nome Produto</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input id="nome" type="text" name="descricao" value="{{$produto->descricao or old('descricao') }}" class="validate {{ $errors->has('descricao') ? ' invalid' : '' }}">
                            <label id="nome" for="descricao" data-error="{{ $errors->has('descricao') ? $errors->first('descricao') : null }}">Descrição do produto</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input id="nome" type="text" name="valor" value="{{$produto->valor or old('valor') }}" class="validate {{ $errors->has('valor') ? ' invalid' : '' }}">
                            <label id="nome" for="valor" data-error="{{ $errors->has('valor') ? $errors->first('valor') : null }}">Valor do produto</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <input id="nome" type="text" name="imagem" value="{{$produto->imagem or old('imagem') }}" class="validate {{ $errors->has('imagem') ? ' invalid' : '' }}">
                            <label id="nome" for="imagem" data-error="{{ $errors->has('imagem') ? $errors->first('imagem') : null }}">Imagem do Produto</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field">
                            <select name="ativo" id="ativo">
                                <option value="S" @if($produto->ativo == 'S') selected @endif>Sim</option>
                                <option value="N"  @if($produto->ativo == 'N') selected @endif>Não</option>
                            </select>
                            {{--  <input id="ativo" type="checkbox" name="ativo" value="{{$produto->ativo or old('ativo') }}" class="validate {{ $errors->has('ativo') ? ' invalid' : '' }}" @if(isset($produto) && $produto->active == '1')checked @endif >  --}}
                            <label id="ativo" for="ativo" data-error="{{ $errors->has('ativo') ? $errors->first('ativo') : null }}">Produto Ativo ?</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="select-field">
                            <div class="col-auto my-1">
                                <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                                <select name="categoria" class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                                    <option >Categorias</option>
                                    <option @if($produto->categoria == '1') selected @endif value="1">Utensílios Domésticos</option>
                                    <option @if($produto->categoria == '2') selected @endif value="2">Artigos de Camping</option>
                                    <option @if($produto->categoria == '3') selected @endif value="3">Brinquedos</option>
                                    <option @if($produto->categoria == '4') selected @endif value="4">Linha para bebes</option>
                                    <option @if($produto->categoria == '5') selected @endif value="5">Tabacaria</option>
                                    <option @if($produto->categoria == '6') selected @endif value="6">Confecções</option>
                                    <option @if($produto->categoria == '7') selected @endif value="7">Enfeites e Festas</option>
                                    <option @if($produto->categoria == '8') selected @endif value="8">Maquiagens</option>
                                    <option @if($produto->categoria == '9') selected @endif value="9">Manicure e Pedicure</option>
                                    <option @if($produto->categoria == '10') selected @endif value="10">Petshop</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                      <button id="botao" type="submit" class="btn blue waves-effect waves-light col l3 m6 s12" style="right: -100px;">
                          Atualizar
                      </button>
                  </div>
                  </form>
        </div>

    </div>
</div>
</div>

<style>
    h4 {
        font-size: 4.00rem;
    }

    #nome {
        font-size: 2.00rem;
    }

    #login {
        border-style: solid;
        border-color: #4d94ff;
        border-radius: 50px;
        border-width: 22px;
        box-shadow: 0.2em 0.1em 1.2em black;
        margin-bottom: 80px;
    }
</style>

@endsection