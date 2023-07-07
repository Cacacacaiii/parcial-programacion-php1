<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function listar(){

        $posts = Post::orderBy('id','desc')->paginate(3);
        return view('posts.listar', compact('posts'));

    }

    public function crear()
    {
        return view('posts.crear');
    }
    
    public function guardar(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'cuerpo' => 'required',
            'identidadAutor' => 'required',

        ]);
        
        Post::create($request->post());

        return redirect()->route('posts.listar')->with('Creaste el post exitosamente');
    }

    public function mostrar(Post $post)
    {
        return view('posts.mostrar',compact('post'));
    }

    public function modificar(Post $post)
    {
        return view('posts.modificar',compact('post'));
    }

    public function modificar2(Request $request, Post $post)
    {
        $request->validate([
            'titulo' => 'required',
            'cuerpo' => 'required',
            'identidadAutor' => 'required',
        ]);
        
        $post->fill($request->post())->save();

        return redirect()->route('posts.listar')->with('Se modifico el post exitosamente');
    }

    public function eliminar(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.listar')->with('Se elimino el post exitosamente');
    }
    
    /*public function CrearPost(Request $request){

        $p = new Post();
        $p -> titulo = $request -> post('titulo');
        $p -> cuerpo = $request -> post('cuerpo');
        $p -> save();

    }*/
}
