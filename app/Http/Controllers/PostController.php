<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Validator;
use Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index(Request $request)
//    {
//        // get the search term
//        if($request->ajax())
//        {
////            dd($request->text);
//            $text = $request->text;
////            $text = $request->input('text');
//
//            // search the members table
//            $posts = DB::table('posts')->where('title', 'Like', $text)->get();
////            dd($posts);
//
//            // return the results
////        return response()->json($posts);
//            return response()->json([
//                'posts' => $posts,
//            ], Response::HTTP_OK);
//        }
////        return view('posts.posts')->with('posts',$posts);
//
//        else
//        {
//            $posts = Post::all();
//            return response()->json($posts);
//        }
//
//    }
    public function search(Request $request)
    {
        $query = $request->query('query');
        $posts = Post::where('title', 'like', '%' . $query . '%')
            ->orWhere('description', 'like', '%' . $query . '%')
            ->get();

        //broadcast search results with Pusher channels
        event(new SearchEvent($posts));

        return response()->json("ok");
//        return view('posts.posts')->with('posts',$posts);

    }

    public function get(Request $request)
    {
        $post = Post::all();
        return response()->json($post);
    }

    public function index()
    {
        $posts = Post::all();
//        return response()->json($posts);
        return view('posts.posts')->with('posts',$posts);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('posts.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, array(
            'title'=> 'required',
            'description'=>'required'
        ));
        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        Session::flash('success','The post was save!');

        return redirect()->route('posts.show', $post->id);

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
        $post = Post::find($id);

        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $post = Post::find($id);
       return view('posts.edit')->withPost($post);
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
        $this->validate($request, array(
            'title'=> 'required',
            'description'=>'required'
        ));

        $post = Post::find($id);

//        $post['title'] = $request->input('title');
//        $post['description'] = $request->input('description');
        $post->update($request->all());

        $post->save();
        Session::flash('success','This post was updated!');

       return redirect()->route('posts.show', $post->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post -> delete();


        Session::flash('success','The post was deleted!');

        return redirect()->back();
    }

//    public function search(Request $request) {
//
//    }

}
