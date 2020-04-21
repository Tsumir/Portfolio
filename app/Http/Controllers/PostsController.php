<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PhpParser\Node\Expr\Array_;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->hasSession()){
            $ids = $request->session()->all();
            unset($ids['_token'] );
            unset($ids['_previous'] );
            unset($ids['_flash'] );
            $first_key = array_key_first($ids);
            if(!is_int($first_key)){
                unset($ids[$first_key]);
            }
        }
        $posts = DB::table('posts')->orderBy('id','asc')->get();
        return view('posts.posts-index', ['posts'=>$posts,'ids'=>$ids]);
    }
    public function viewProduct(Request $request, $id){
        if($request->hasSession()){
            $ids = $request->session()->all();
            unset($ids['_token'] );
            unset($ids['_previous'] );
            unset($ids['_flash'] );
            $first_key = array_key_first($ids);
            if(!is_int($first_key)){
                unset($ids[$first_key]);
            }
        }
        $post = Posts::find($id);
        return view('posts.pages.viewpost', ['post'=>$post, 'ids'=>$ids]);
    }

    public function cart(Request $request)
    {
        $ids = $request->session()->all();

        unset($ids['_token'] );
        unset($ids['_previous'] );
        unset($ids['_flash'] );
        $first_key = array_key_first($ids);
        if(!is_int($first_key)){
            unset($ids[$first_key]);
        }
        $posts = DB::table('posts')->orderBy('id','asc')->whereIn('id',$ids)->get();
        return view('posts.pages.cart', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Posts();

        $post->title = $request->title;
        $post->cardtext = $request->cardtext;
        $post->color = $request->color;
        if($request->author_id){
            $post->author_id = $request->author_id;
        }
        if($post->title && $post->cardtext){
            $post->save();
        }

        if($request->hasSession()){
            $ids = $request->session()->all();
            unset($ids['_token'] );
            unset($ids['_previous'] );
            unset($ids['_flash'] );
            $first_key = array_key_first($ids);
            if(!is_int($first_key)){
                unset($ids[$first_key]);
            }
        }

        $posts = DB::table('posts')->orderBy('id','asc')->get();
        return view('posts.posts-index', ['posts'=>$posts,'ids'=>$ids]);
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
    public function destroy(Request $request, $id)
    {
        $post = Posts::find($id);
        if ($post) {
            $post->delete();
        }
        if($request->hasSession()){
            $ids = $request->session()->all();
            $val = array_search($id, $ids);
            if(is_int($val)){
                $request->session()->pull($val);
            }
            $ids = $request->session()->all();

            unset($ids['_token']);
            unset($ids['_previous']);
            unset($ids['_flash']);
            $first_key = array_key_first($ids);
            if(!is_int($first_key)){
                unset($ids[$first_key]);
            }
        }
        $posts = DB::table('posts')->orderBy('id','asc')->get();
        return view('posts.posts-index', ['posts'=>$posts,'ids'=>$ids]);
    }

    public function addProduct(Request $request, $id)
    {
        if($request->hasSession()){
            $ids = $request->session()->all();
            unset($ids['_token'] );
            unset($ids['_previous'] );
            unset($ids['_flash'] );
            $first_key = array_key_first($ids);
            if(!is_int($first_key)){
                unset($ids[$first_key]);
            }
            $key = count($ids)+1;
        }
        else {
            $key = 0;
        }
        $request->session()->put($key,$id);


        echo json_encode($key);
    }

    public function delProduct(Request $request, $id)
    {
        if($request->hasSession()){
            $ids = $request->session()->all();
            $val = array_search($id,$ids);
            $request->session()->pull($val);
            $ids = $request->session()->all();
            unset($ids['_token'] );
            unset($ids['_previous'] );
            unset($ids['_flash'] );
            $first_key = array_key_first($ids);
            if(!is_int($first_key)){
                unset($ids[$first_key]);
            }
            $key = count($ids);
        }
        else {
            $key = 0;
        }
        echo json_encode($key);
    }

    public function cartClean(Request $request)
    {
        $ids = $request->session()->all();
        unset($ids['_token']);
        unset($ids['_previous']);
        unset($ids['_flash']);
        $first_key = array_key_first($ids);
        if(!is_int($first_key)){
            unset($ids[$first_key]);
        }
        $key = count($ids);
        for ($i=0; $i<=$key; $i++) {
            $request->session()->pull($i);
        }
        $posts = array();
        return view('posts.pages.cart',['posts'=>$posts]);
    }

    public function countProduct(Request $request)
    {
        if($request->hasSession()){
            $ids = $request->session()->all();
            unset($ids['_token'] );
            unset($ids['_previous'] );
            unset($ids['_flash'] );
            $first_key = array_key_first($ids);
            if(!is_int($first_key)){
                unset($ids[$first_key]);
            }
            $key = count($ids);
        }
        else {
            $key = 0;
        }
        echo json_encode($key);
    }

}
