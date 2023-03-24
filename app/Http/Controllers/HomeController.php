<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function chart(){
        $result=Post::withCount(['getViewer'])->orderBy('get_viewer_count','desc')->limit(7)->get();
        return response()->json($result);
    }
    public function index()
    {
//        $result=Post::withCount(['getViewer'])->orderBy('get_viewer_count','desc')->limit(7)->get();
//
//        return $result;

        return view('home');

    }

    public function sample(){
        return view('sample')->with("toast","I'm toast");
    }
}


//    public function all(){
//        $games=Post::select(
//            "posts.id",
//            "posts.name",
//            "posts.logo",
//            "posts.type",
//            "posts.category_id",
////            "posts.updated",
//            "posts.size",
//            "posts.version",
////            "posts.requirement",
//            "posts.developer",
////            "posts.description",
////            "posts.features",
////            "posts.video",
////            "posts.link1",
////            "posts.link2",
////            "posts.link3",
//            "categories.title as category_title"
//        )
//            ->leftJoin("categories", "categories.id", "=", "posts.category_id")
//            ->get();
//        $cat=Category::get();
//        return [$games,$cat];
//
//
//    }

// public function games($id){
//     $viewer=new Viewer();
//     $viewer->post_id=$id;
//     $viewer->current=date('Y-m-d');
//     $viewer->save();
//     $game=Post::where('id',$id)->first();
//     // $cat=Category::where('id',$game->category_id)->first()->title;
//     // $c_name=array('category'=>$cat);
//     // $final=array_push($game,$c_name);
//     // return [$final];
//     return gettype($game);
// }

//        $games=Post::select(
//            "posts.id",
//            "posts.name",
//            "posts.logo",
//            "posts.type",
//            "posts.category_id",
////            "posts.updated",
//            "posts.size",
//            "posts.version",
////            "posts.requirement",
//            "posts.developer",
////            "posts.description",
////            "posts.features",
////            "posts.video",
////            "posts.link1",
////            "posts.link2",
////            "posts.link3",
//            "categories.title as category_title"
//        )
//            ->leftJoin("categories", "categories.id", "=", "posts.category_id")->where('category_id',$id)
//            ->paginate(10);
////        $games=Post::where('category_id',$id)->Join('dsd')->latest()->paginate(12);
////            ->through(function ($post,$id){
////            $post->category_title=Category::find($id)->title;
//        return [$games];


//    public function all(){
//
//
//        $games=Post::select(
//            "posts.id",
//            "posts.name",
//            "posts.logo",
//            "posts.type",
//            "posts.category_id",
//            "posts.updated",
//            "posts.size",
//            "posts.version",
//            "posts.requirement",
//            "posts.developer",
//            "posts.description",
//            "posts.features",
//            "posts.video",
//            "posts.link1",
//            "posts.link2",
//            "posts.link3",
//            "categories.title as category_title"
//        )
//            ->leftJoin("categories", "categories.id", "=", "posts.category_id")
//            ->paginate(10);
//        $cat=Category::get();
//        return [$games,$cat];
//
//
//
//
////        `SELECT Customers.CustomerName, Orders.OrderID
////FROM Customers
////LEFT JOIN Orders
////ON Customers.CustomerID=Orders.CustomerID
////ORDER BY Customers.CustomerName;`
//    }
