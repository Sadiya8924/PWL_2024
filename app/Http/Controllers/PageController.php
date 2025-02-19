<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return 'Selamat Datang di Halaman Utama';
    }

    public function hello()
    {
        return 'Halo';
    }
    
    public function world()
    {
        return 'World';
    }

    public function home()
    {
        return 'Selamat Datang';
    }

    // public function about()
    // {
    //     return 'Nama: Sadiya Maritza NIM: 2341720147';
    // }

    public function showUser($name = 'Jhon')
    {
        return 'Nama saya ' . $name;
    }

    public function showPostComment($postId, $commentId)
    {
        return 'Pos ke-' . $postId . " Komentar ke-: " . $commentId;
    }

    // public function showArticle($articlesId)
    // {
    //     return "Post Articles ke-: " . $articlesId;
    // }
}
