<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentarios;
use App\Post;
use App\User;

class ForoController extends Controller
{
    //Mostrar todos los post de la bbdd
	public function index()
	{
		$arrayPost = Post::all();
		return view('home', array('arrayPost'=>$arrayPost));
	}

	//Ruta a crear
	public function crear()
	{
		return view('foro.crear');
	}
	//Crear Post
	public function store(Request $request) {
		//creamos object Post
        $post = new Post();
        //Si el campo esta vacio no crea post
        if( $request->has("titulo")) {
        	$post->idUsuario = $request->input('idUsuario');
        	$post->nombreUsuario = $request->input('nombreUsuario');
            $post->titulo = $request->input('titulo');
            $post->save();
            return view('foro.bien');
        } else {
            return view('foro.mal');
        }
    }
    public function show($id)
	{
		$arrayPost = Post::find($id);
		return view('foro.show', array('id'=>$id, 'titulo'=>$arrayPost));
	}

}
