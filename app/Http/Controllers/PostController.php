<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() //1 solo metodo
    {
        /* $post=[
            ['title'=>'Primer post'],
            ['title'=>'Segundo post'],
            ['title'=>'Tecer post'],
            ['title'=>'Cuarto post'],
            ['title'=>'Quinto post']
        ]; */
        $post= DB::table('posts')->get();

        return view('blog',['posts'=>$post]);
    }
}
?>