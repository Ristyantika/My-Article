<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\add_article;

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
    public function index()
    {
        $mains = DB::table('add_articles')->get();

        return view('home', compact('mains'));
    }

    public function view($id)
    {
        $views = DB::table('add_articles')->where('id_article', $id);

        return view('home/$id', compact('views'));
    }

    public function show($id)
    {
        $details = DB::table('add_articles')->where('id_article' , $id)->get();
        return view('detail_article', compact('details'));
    }
}
