<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use Illuminate\Http\Request;


class ArticleController extends MainController
{   
    public function index(){
        $article = ArticleModel::simplePaginate(4);
        return view('article.index', [
            'article'=>$article
        ]);
    }

    public function details(Request $request){
        $id = \App\Helpers\URL::getIdUrl($request, 1);

        $article = ArticleModel::find($id);
        return view('article.details', [
            'article'=>$article
        ]);

    }
    
}
