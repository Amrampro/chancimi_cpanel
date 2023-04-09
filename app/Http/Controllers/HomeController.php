<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Team;
use App\Models\Construction;
use App\Models\Examination;

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
        $exams = Examination::all();
        // $teams = Team::limit(3)->get();
        return view('home', [
            'data' => $data,
            'exams' => $exams
            // 'teams' => $teams
        ]);
        // $data = Construction::limit(1)->where('id', '1')->get();
        // return view('under_construction', [
        //     'data' => $data
        // ]);
        // return view('home');
    }
    public function about()
    {

        $data = Post::limit(3)->orderBy('id', 'desc')->get();
        $teams = Team::all();
        return view('about', [
            'posts' => $data,
            'teams' => $teams
        ]);
    }
    public function services()
    {

        $data = Post::limit(3)->orderBy('id', 'desc')->get();
        return view('services', [
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

        $data = new Comment;
        $data->user_id = $request->user()->id;
        $data->post_id = $id;
        $data->comment = $request->comment;
        $data->save();
        return redirect('detail/' . $slug . '/' . $id)->with('success', 'Commentaire ajouté');
    }
}
