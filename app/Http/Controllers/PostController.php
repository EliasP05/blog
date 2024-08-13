<?php
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        /* $post=[
            ['title'=>'Primer post'],
            ['title'=>'Segundo post'],
            ['title'=>'Tecer post'],
            ['title'=>'Cuarto post'],
            ['title'=>'Quinto post']
        ]; */
        // $post= DB::table('posts')->get(); //con este metodo indicamos en nombre de la tabla
        $post= Post::get(); //aqui no se debe indicar, eloquent asume que la tabla se llama posts como el modelo pero en plural
        return view('posts.index',['posts'=>$post]);
    }
    /* public function show($post)
    {
       return Post::findorFail($post);
        // return 'detalle del post '.$post;
    } */
   public function show(Post $post)
   {
    return view('posts.show',['post'=>$post]);
   }
   public function create(){
    return view('posts.create');
   }
   public function store(){
    return 'string';
   }
}
?>