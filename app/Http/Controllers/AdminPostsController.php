<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;

use App\Http\Requests\PostsCreateRequest;

use Illuminate\Support\Facades\Auth;

use App\Photo;

use App\Category;


class AdminPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // return "Hello Index page HERE ";

        $posts = Post:: all();

        return view('admin.posts.index' , compact('posts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    
    {
        //
        // return "Hello Create page HERE ";


        $categories = Category::lists('name','id') -> all(); 

        return view('admin.posts.create', compact('categories'));

    }

    /**
     * Store a newly created resource in scandir(directory)torage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostsCreateRequest $request)
    {
        //

        $input = $request -> all();

        $user = Auth::user(); // Here Not calling the USER Model here , Here calling user() that is defined in Admin.php in Middleware folder at line 23

        // return $request -> all();


        if($file = $request -> file('photo_id')){

            $name = time() . $file-> getClientOriginalName();

            $file -> move('images' , $name); // Error  = , ->

            $photo = Photo::create(['file' => $name]);

            $input['photo_id'] = $photo -> id;

        }

        $user->posts()->create($input);   // Here link of user id and posts id ..

        // Post::create($input);

        return redirect('/admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
