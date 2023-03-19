<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BlogController extends Controller
{
    function index()
    {
        $blogs = Blog::get(); //select * from user database
        return view(
            'blogs.index',
            compact('blogs')
        );
    }
    //show create form
    function create()
    {
        return view('blogs.create');
    }

    //process store
    function store(Request $request)
    {
        //validate syarat untuk input macam ic kena masuk nombor
        $validator = Validator::make($request->all(), [
            "title" => "required|string",
            "description" => "required|string",
        ]);
        //insert data to db
        Blog::create(
           $validator -> validate()
           /* //key guna nama dalam db -> $request->title (nama dalam form)
            "title" => $request->title,
            "description" => $request->description,
            */
        );
        // ridirect ke page
        return redirect()->route('blogs');
    }

    //edit blog
    function edit($id)
    {
        //cari guna id lepastu send
        $blog = Blog::find($id);
        return view(
            'blogs.edit',
            compact("blog"),
        );
    }

    //process edit
    function update($id, request $request)
    {
        $blog = Blog::find($id);
        //insert data to database
        $blog->update([
            //key guna nama dalam db -> $request->title (nama dalam form)
            "title" => $request->title,
            "description" => $request->description,
        ]);
        return redirect()->route('blogs');
    }

        //process delete
        function delete($id)
        {
            $blog = Blog::find($id);
            //insert data to database
            $blog->delete();
            return redirect()->route('blogs');
        }
}
