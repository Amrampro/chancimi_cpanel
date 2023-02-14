<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $data = Post::limit(3)->orderBy('id', 'desc')->get();
        return view('home', [
            'posts' => $data
        ]);
    }
    public function blog()
    {
        // $data = Post::all();
        $data = Post::orderBy('id', 'desc')->paginate(9);
        // Order by recent post
        // $data = Post::orderBy('id', 'desc')->get();
        return view('blog', [
            'posts' => $data
        ]);
    }

    function postDetail(Request $request, $slug, $postId)
    {
        $postsFromDb = Post::find($postId);
        $categoriesFromDb = Category::all();
        return view('postDetail', [
            'post' => $postsFromDb,
            'categories' => $categoriesFromDb,
        ]);
    }

    function postDetail_old($id)
    {
        $postsFromDb = Post::find($id);
        $categoriesFromDb = Category::all();
        return view('postDetail', [
            'post' => $postsFromDb,
            'categories' => $categoriesFromDb,
        ]);
    }

    function save_comment(Request $request, $slug, $id)
    {
        $request->validate([
            'comment' => 'required'
        ]);

        $data= new Comment;
        $data->user_id=$request->user()->id;
        $data->post_id=$id;
        $data->comment=$request->comment;
        $data->save();
        return redirect('detail/'.$slug.'/'.$id)->with('success', 'Commentaire ajouté');

    }
}
