<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\add_article;
use Illuminate\Support\Facades\Input;
use Image;
use Illuminate\Support\Facades\DB;
use Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = add_article::get();
        return view('add_articles',compact('images'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('add_articles');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        add_article::create([
            'title_article' => request('title_article'),
            'category_article' => request('category_article'),
            'description_article' => request('description_article'),
        ]);
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
    public function show_image(Request $request){
        if ($request->hasFile('image_article')) {
            $image_article = $request->file('image_article');
            $filename = time().'.'.$request->image_article->getClientOriginalExtension();
            // Image::make($image_article)->resize(500,500)->save(public_path('/images/' . $filename));

            $user->image_article = $filename;
            $user->save(); 
        }
        return view('add_articles', compact('user'));   
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

    // public function upload(){
    //     if(Input::hasFile('image_article')){
    //         $file = Input::file('image_article');
    //         $file->move(public_path('add_article', $file->getClientOriginalExtension()));
    //         echo '<img src="add_articles'.$file->getClientOriginalExtension().'"/>';
    //     }
    // }
    public function upload(Request $request)
    {
        $this->validate($request, [
            'image_article' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title_article' => 'required',
            'category_article' => 'required',
            'description_article' => 'required', 
            'id_user' => 'required',   
        ]);

        $photo = $request->image_article;
        $imagename = time().'.'.$photo->getClientOriginalExtension(); 
   
        $destinationPath = public_path('/images/' . $imagename);
        $gambar = Image::make($photo->getRealPath())->resize(1000, 1000);
        $gambar->save($destinationPath);
        $input['image_article'] = $imagename;
                    

        // $input['image_article'] = time().'.'.$request->image_article->getClientOriginalExtension();
        // $request->image_article->move(public_path('images'), $input['image_article']);
        

        $input['title_article'] = $request->title_article;
        $input['category_article'] = $request->category_article;
        $input['description_article'] = $request->description_article;
        $input['id_user'] = $request->id_user;
        add_article::create($input);

        return back()
            ->with('success','Image Uploaded sucessfully.');
    }

    public function destroy($id)
    {
        add_article::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');    
    }
    // public function create1(){
    //    $post = add_article::get();
    //    return view('add_articles', compact('add_articles'));
    // 

    public function display(){
        $blogs = DB::table('add_articles')->get();
        return view('add_articles', compact('blogs'));
    }
    // public function readURL(input) {
    //         if (input.files && input.files[0]) {
    //             var reader = new FileReader();

    //             reader.onload = function (e) {
    //                 $('#blah')
    //                     .attr('src', e.target.result);
    //             };

    //             reader.readAsDataURL(input.files[0]);
    //         }
    //     }
}
