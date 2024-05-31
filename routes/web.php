<?php

use App\Models\Post;
use App\Models\Sale;
use App\Models\Service;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\VinosController;
use App\Http\Controllers\ServiceController;

Route::get('sale',function (){
    $sale = new Sale();

    $sale ->marca = 'huawei';
    $sale ->nombre = 'Celular';
    $sale ->modelo = 'dftth45';
    $sale ->precio = 8000;
    $sale ->stock = 45895;
    $sale ->cantidad = 9;

    $sale->save();
    return $sale;
});

Route::get('service',function (){
    $service = new Service();

    return Post::all(); //forma 1 de llamar todos los registros
//    $service->marca ='Sal';
//    $service->modelo ='Salsa';
//    $service->descripcion ='sal sin salsa';
//    $service->precio =858;
//
//    $service->save();
//    return $service;

//    $table->string('marca');
//    $table->string('modelo');
//    $table->string('descripcion');
//    $table->float('precio');
});
Route::get('/servicios/post-1',function (){
    return 'Aqui se mostrata el post 1';
});

Route::get('/', [HomeController::class,'index']);

Route::get('/vinos',[VinosController::class, 'index']); //practica

Route::get('/posts',[PostController::class,'index']);

Route::get('/posts/create',[PostController::class,'create']);

Route::get('/posts/{post}',[PostController::class,'show']);


Route::get('/posts/{post}/{category}',function ($post,$category){
    return "Aqui se mostrata el post {$post} en la categoria {$category}";
});



Route::get('prueba',function (){
////   crear un nuevo registro
//    $post = new Post;
//
//    $post->title = 'YOYO NUEVO';
//    $post->content = 'COMIDA';
//    $post->categoria = 'SALCHA';
//
//    $post->save();
//    return $post;

//    return Post::all(); //forma 1 de llamar todos los registros
//    return Post::where ('id','>=','3') //filtrando registros por ID
//                    ->get();
//
//    return Post::orderBy('id','desc') //filtrando registros por desc
//                    ->get();

//    return Post::orderBy('categoria','asc') //filtrando registros por asc
//                    ->select('id','title','categoria')
//                    ->get();

//    $posts = Post::all();
//    return $posts;

    //Eliminar registros
//    $post = Post::find(2);
//    $post->delete();
//
//    return "Datos borrados satisfactoriamente";
});
