<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;

class HomeController extends Controller
{
    public function index()
    {
        $registros = Produto::where([
            'ativo' => 'S'
            ])->get();
        $categorias = Produto::CATEGORIA_PRODUTO;
        return view('home.index', compact('registros', 'categorias'));
    }

    public function contato(){
        return view('home.contato');
    }

    public function categoria($id)
    {
        if( !empty($id) ) {
            $registros = Produto::where([
                'categoria'    => $id,
                'ativo' => 'S'
                ])->get();

            if( !empty($registros) ) {
                $categorias = Produto::CATEGORIA_PRODUTO;
                $categoria_name = $categorias[$id];
                return view('home.categoria',compact('registros', 'categorias', 'categoria_name'));
            }
        }
        return redirect()->route('index');
    }

    public function busca(Request $request)
    {
        $q = $request->q;
        if( !empty($q) ) {
            $registros = Produto::where('ativo','S')->where('nome', 'like', '%'.$q.'%')->get();

            if( !empty($registros) ) {
                $categorias = Produto::CATEGORIA_PRODUTO;
                return view('home.busca',compact('registros', 'categorias', 'q'));
            }
        }
        return redirect()->route('index');
    }

    public function produto($id = null)
    {
        if( !empty($id) ) {
            $registro = Produto::where([
                'id'    => $id,
                'ativo' => 'S'
                ])->first();

            if( !empty($registro) ) {
                return view('home.produto', compact('registro'));
            }
        }
        return redirect()->route('index');
    }


    public function filtrarProduto()
    {
        $registros = Produto::where([
            'ativo' => 'S'
            ])->get();
        return view('home.utensilios',compact('registros'));
    }
}
