<?php

use App\Http\Controllers\homeController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\postController;


/* Route::get('/posts', function () {
    return 'Aqui se mostraran todos los post';
}); */

/* Route::post/get/put/delete la que queramos */

Route::get('/posts/{post}', function ($post) {
    return "Aqui se mostraran todos los post {$post}";
});

Route::get('/',[homeController::class,'index']);
/* 
Route::get('/posts',[postController::class,'create']);
Route::get('/posts/{post}',[postController::class,'show']); */

Route::get('prueba', function(){
    $posts = new Post;

    /* $posts->title = "Titulo 1";
    $posts->content="Contenido de prueba 1";
    $posts->categoria="Categoria de prueba 1";

    $posts->title = "Titulo 2";
    $posts->content="Contenido de prueba 2";
    $posts->categoria="Categoria de prueba 2";

    $posts->save();
 */
    $posts= Post::find('1');
    return $posts;

});

//Muestra el id 1
Route::get('prueba', function () {
    $post = Post::find(1);
    return $post;
});

//Muestra Todo
/* Route::get('prueba', function () {

    $post = Post::all();
    return $post;
}); */


//Busca un id mayor o igual a 2
Route::get('prueba', function () {

    $post = Post::where('id', '>=', 2)->get();
    return $post;
});

//Busca el primer resgistro y modifica la categoria
 
Route::get('prueba', function () {

    $post = Post::first();
    $post->categoria = 'Desarrollo Web';
    $post->save();
    return $post;
});


//Actualizar un valor

Route::get('prueba', function () {

    $post = Post::where('title', 'Titulo de prueba 1')->first();

    $post->categoria = 'Desarrollo web';

    $post->save();

    return $post;
});

//Para borrar

/* Route::get('prueba', function () {

    $post = Post::find(2);
    $post->delete();
    return "Se borró correctamente";
});
 */
//Ordenar

Route::get('prueba', function () {

    $posts = Post::orderBy('id','desc')->get();
    $posts = Post::orderBy('categoria', 'asc')->select('id','title','categoria')->get();
    return $posts;
});

Route::get('/formulario',function(){
    return view('formulario');
});

/* Ruta formulario */
Route::post('/procesar',function(\Illuminate\Http\Request $request){
    $nombre = $request->input('nombre');
    $email = $request->input('email');
    return "Nombre $nombre, Correo $email";
});