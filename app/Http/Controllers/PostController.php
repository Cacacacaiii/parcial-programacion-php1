<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    
    @return \Illuminate\Http\Response

    public function DailyPosts()
    {

        $posts = DB::select('select * from posts');

        return view()

    }

}