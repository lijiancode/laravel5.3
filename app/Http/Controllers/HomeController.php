<?php

namespace App\Http\Controllers;
date_default_timezone_set ("PRC");
use App\News;
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
     * @return \Illuminate\Http\Response
     */
    public function welcome(){
        $news=new News();
        $data=$news->all();
        return view('welcome')->with('data',$data);
    }
    public function index()
    {
        return view('home');
    }
    public function userInfo(){
        return view('/info/user');
    }
    public function mainInfo(){
        return view('/info/mainInfo');
    }
    public function getInfo(Request $request){
        echo $request->input('name');
//        return view('/info/mainInfo');
    }
    public function insertData(Request $request){
        $data=$request->all();
        $news = new News();
        $news->title=$data['title'];
        $news->content=$data['content'];
        $news->position=$data['position'];
        $news->author=$data['author'];
        if($news->save()){
            echo "添加成功";
        }
        return redirect()->back();
    }
    public function detail($id){
        $data=News::find($id);
        return view('/info/detail')->with('data',$data);
    }

}
