<?php
namespace App\Http\Controllers;

use App\Http\Requests\SavePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
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

   public function create()
    {
        return view('posts.create',['post'=>new Post]);
   
    }

   public function store(SavePostRequest $request)
   {

        // $post=new Post;
        // $post->title=$request->input('title');
        // $post->body=$request->input('body');
        // $post->save();
        // Post::create([
        //     'title'=>$request->input('title'),
        //     'body' =>$request->input('body')
        // ]); se puede hacer asi si es que no creamos archivos request
        Post::create($request->validated()); //esta es con archivo request

        session()->flash('status','Post creado');

        return  redirect()->route('posts.index'); //to_route() hace lo mismo
   }

    public function edit(Post $post)
    {
        return view('posts.edit',['post' => $post]);
    }

    public function update(SavePostRequest $request, Post $post){
    
        // $post->title=$request->input('title');
        // $post->body=$request->input('body');
        // $post->save();
        $post->update($request->validated()); //esta es otra manera distinta de mandar los campos al metodo--> ver metodo store

        session()->flash('status','Post editado');

        return  to_route('posts.show',$post); //to_route() hace lo mismo
    }

    public function delete(Post $post){
        $post->delete();


        //envez de usar session()->flash se puede usar with
        return to_route('posts.show',$post)->whit('status','Post Eliminado');
    }
}
?>