<?php
namespace App\Http\Controllers;

class PostController
{
    public function index() //1 solo metodo
    {
        $post=[
            ['title'=>'Primer post'],
            ['title'=>'Segundo post'],
            ['title'=>'Tecer post'],
            ['title'=>'Cuarto post'],
            ['title'=>'Quinto post']
        ];
        return view('blog',['posts'=>$post]);
    }
}
?>