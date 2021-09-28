<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Blogs;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = Blogs::all();
        
    
        return response()->json([
            'status' => 200,
            'error' => false,
            'data' => $blogs
        ]);
    }

    public function getAllBlogs(){
        $blogs = Blogs::all();
        return view('blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // var_dump($request->all());
        if($request->title != null && $request->body != null){

            $blog = new Blogs();
            $blog->title = $request->title;
            $blog->body = $request->body;
            $blog->excerpt = $request->excerpt;
            $blog->slug = $request->slug;
            $blog->author = $request->author;
            if($blog->save()){
                session(['alert' => 'Blog Created successfully', 'class' => 'alert alert-success']);

                return redirect()->route('blogs');
    
            } else{
                session(['alert' => 'Unable to create blog', 'class' => 'alert alert-danger']);
                
                return redirect()->route('blogs.add');
            }
        } else {
            session([
                'alert' => 'Please fill all the fields',
                'class' => 'alert alert-danger'
            ]);
            return redirect()->route('blogs.add');
        }



        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {   
        $blog = Blogs::where('slug', '=', $slug)->first();
        // var_dump($blog);
        // exit();
        return view('blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $blog = Blogs::where('slug', '=', $slug)->first();
        return view('blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $blog = Blogs::find($id);
        $blog->title = $request->title;
        $blog->body = $request->body;
        $blog->excerpt = $request->excerpt;
        $blog->slug = $request->slug;
        $blog->author = $request->author;
        if($blog->update()){
            session(['alert' => 'Blog updated successfully', 'class' => 'alert alert-success']);

            return redirect()->route('blogs');

        } else{
            session(['alert' => 'Unable to update blog', 'class' => 'alert alert-danger']);
            
            return redirect()->route('blogs.edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $blog = Blogs::where('slug', '=', $slug)->delete();
        session(['alert' => 'Blog Deleted successfully', 'class' => 'alert alert-success']);
        return redirect()->route('blogs');
    }
}