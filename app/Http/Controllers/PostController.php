<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Post::all();
        // Order by recent post
        // $data = Post::ordeyBy('id', 'desc')->get();
        return view('backend.post.index', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('backend.post.add',[
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'category'=>'required',
            'detail'=>'required',
        ]);
        // Post Thumbnail
        if($request->hasFile('post_thumb')){
            $image=$request->file('post_thumb');
            $reThumbImage = 'ti'.time().'.'.$image->getClientOriginalExtension(); // 'ti' at the begining is just to say that it is the thumb image inorder to differentiate in the system from the full image
            $dest=public_path('/frontend/assets/img/blog/thumb');
            $image->move($dest, $reThumbImage);
        } else {
            $reThumbImage = 'na';
        }

        // Post image
        if($request->hasFile('post_image')){
            $image=$request->file('post_image');
            $reFullImage = 'fi'.time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/frontend/assets/img/blog/full_img');
            $image->move($dest, $reFullImage);
        } else {
            $reFullImage = 'na';
        }

        $post=new post;
        $post->user_id=1;
        $post->cat_id=$request->category;
        $post->title=$request->title;
        $post->thumb=$reThumbImage;
        $post->full_img=$reFullImage;
        $post->detail=$request->detail;
        $post->tags=$request->tags;
        $post->save();

        return redirect('admin/post/create')->with('success', 'Data has been added');
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
        $cat = Category::all();
        $data = Post::find($id);
        return view('backend.post.update', [
            'category' => $cat,
            'data' => $data
        ]);
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
        $request->validate([
            'title'=>'required',
            'category'=>'required',
            'detail'=>'required',
        ]);
        // Post Thumbnail
        if($request->hasFile('post_thumb')){
            $image=$request->file('post_thumb');
            $reThumbImage = 'ti'.time().'.'.$image->getClientOriginalExtension(); // 'ti' at the begining is just to say that it is the thumb image inorder to differentiate in the system from the full image
            $dest=public_path('/frontend/assets/img/blog/thumb');
            $image->move($dest, $reThumbImage);
        } else {
            $reThumbImage = $request->post_thumb;
        }

        // Post image
        if($request->hasFile('post_image')){
            $image=$request->file('post_image');
            $reFullImage = 'fi'.time().'.'.$image->getClientOriginalExtension();
            $dest=public_path('/frontend/assets/img/blog/full_img');
            $image->move($dest, $reFullImage);
        } else {
            $reFullImage = $request->post_image;
        }

        $post=Post::find($id);
        $post->user_id=1;
        $post->cat_id=$request->category;
        $post->title=$request->title;
        $post->thumb=$reThumbImage;
        $post->full_img=$reFullImage;
        $post->detail=$request->detail;
        $post->tags=$request->tags;
        $post->save();

        return redirect('admin/post/'. $id . '/edit')->with('success', 'Data has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id',$id)->delete();
        return redirect('admin/post');
    }
}
