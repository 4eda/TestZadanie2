<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class newsController extends Controller
{
    public function allData()
    {
        $news = new News;
        return view('news' ,['data' => $news->orderBy('idate', 'desc')->paginate(4)]); 
    }
public function ShowOneNews($id){

    $news = new News;
 return view('One-news', [ 'data' =>$news->find($id)]);
}




}

