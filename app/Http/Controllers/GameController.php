<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\Rating;
use App\RequestApp;
use App\Suggest;
use App\Viewer;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function popular(){
//        return 'hello';
        $posts=Post::withCount(['getViewer'])->orderBy('get_viewer_count','desc')->limit(12)->get();
        return view('welcome',compact('posts'));
    }
    public function gameList(){
        $title='All Games List';
        $games=Post::latest()->paginate(12);
        return view('games',compact('games','title'));
    }
    public function gameListFilter($id){
        $c_name=Category::where('id',$id)->first()->title;
        $title=$c_name.' Games List';
        $games=Post::where('category_id',$id)->latest()->paginate(12);
        return view('games',compact('games','title'));
    }
    public function singleGameList($id){
        $viewer=new Viewer();

        $viewer->post_id=(int)$id;
        $viewer->current=date('Y-m-d');
        $viewer->save();
        $game=Post::find($id);
        return view('seegame',compact('game'));
    }
    public function gameSearch(Request $request){
        $name=$request->name;
        $request->validate([
            "name" => "required",
        ]);
        $search='aa';
        $title='Search Result For - '.$name;
        $games=Post::query()
            ->where('name', 'LIKE', "%{$name}%")
            ->latest()
            ->paginate(12);
        return view('games',compact('games','search','title'));
    }


    public function showComment($id){
        $post=Post::where('id',$id)->get();
        return view('comment.show',compact('post'));
    }


    public function storeSuggest(Request $request)
    {
//        return $request;
        $request->validate([
            "name" => "required|max:150",
            "phone" => "required|max:30",
            "email" => "required|max:50",
            "description" => "required|unique:suggests|max:2000",
//            "playstore_link" => "required",
        ]);
        $finish='မင်္ဂလာပါ '.$request->name .'ရေ....သင့်အကြံပြုချက်အတွက် ကျေးဇူးအထူးတင်ပါတယ်ခင်ဗျာ....';
        $suggest=new Suggest();
        $suggest->name=$request->name;
        $suggest->email=$request->email;
        $suggest->phone=$request->phone;
        $suggest->description=$request->description;
        $suggest->save();
        return view('suggest.create',compact('finish'));
    }

    public function createSuggest()
    {
        return view('suggest.create');
    }

    public function storeRequest(Request $request)
    {
//        return $request;
        $request->validate([
            "app_name" => "required|max:150",
            "username" => "required|max:150",
            "phone" => "required|max:50",
            "description" => "required|max:1000",
//            "playstore_link" => "required",
        ]);
        $finish='မင်္ဂလာပါ '.$request->username .'ရေ.... မကြာခင်မှာ သင့်တောင်းဆိုတဲ့ '.$request->app_name.' ဂိမ်းကို စစ်ဆေးပီး ဆောင်ရွက်ပေးပါမယ်....';
        $requestApp=new RequestApp();
        $requestApp->app_name=$request->app_name;
        $requestApp->username=$request->username;
        $requestApp->phone=$request->phone;
        $requestApp->description=$request->description;
        $requestApp->playstore_link=$request->playstore_link;
        $requestApp->save();
//        return $finish;
        return view('request.create',compact('finish'));
    }

    public function createRequest()
    {
        return view('request.create');
    }

    public function storeRating(Request $request)
    {
        $request->validate([
            "post_id"=>"required|numeric",
            "rating"=>"required|numeric",
        ]);
        $rating=new Rating();
        $rating->post_id=$request->post_id;
        $rating->rating=$request->rating;
        $rating->save();

        return redirect()->back();
    }
    public function storeComment(Request $request)
    {
        $request->validate([
            "post_id"=>"required|numeric",
            "comment"=>"required|max:120",
        ]);
        $comment=new Comment();
        $comment->post_id=$request->post_id;
        $comment->comment=$request->comment;
        $comment->save();

        return redirect()->back();
    }

    public function adGame()
    {
        return view('ad_accept');
    }

    public function download(Request $request)
    {
//        return $request;
        $link1=$request->link1;
        $link2=$request->link2;
        $link3=$request->link3;

        if ($request->link2 && $request->link3){
            return view('download_page',compact('link1','link2','link3'));
        }
        elseif ($request->link2){
            return view('download_page',compact('link1','link2'));
        }
        elseif($request->link3){
            return view('download_page',compact('link1','link3'));
        }
        else{
            return view('download_page',compact('link1'));
        }
//                $request->validate([
//            "link" => "required",
//        ]);
    }
}
