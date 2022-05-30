<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
class BlogController extends Controller
{
    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        //방법1
        // $blog = new Blog;
        // $blog->user_id = $request->user()->id;
        // $blog->title = $request->description;
        // $blog->save();


        //방법2
        Blog::create([
            'user_id' => $request->user()->id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // return redirect()->back();
        
        //$request->all();
        //dd($request->all());
    }
}
