<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function Home(){
        return view('home');
    }
    public function Article( $id){
        $posts = [
            1 =>['title'=>'Laravel'],
            2 =>['title'=>'React']
        ];
        return view('posts.show',['data'=>$posts[$id]]);
    }
    
}
