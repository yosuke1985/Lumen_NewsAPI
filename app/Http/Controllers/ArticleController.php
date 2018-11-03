<?php
/**
 * Created by PhpStorm.
 * User: yosukenakayama
 * Date: 2018/11/03
 * Time: 20:46
 */

namespace App\Http\Controllers;

use App\Article;

class ArticleController extends Controller
{
    public function get()
    {
//        $articles = Article::all();
//        return response()->json($articles);
        echo "hello yosuke";
    }
}