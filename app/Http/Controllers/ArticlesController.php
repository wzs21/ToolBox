<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Articles;
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
use App\Http\Controllers\Auth;


class ArticlesController extends Controller
{

    //give a middleware to the controller constructor
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Auth::user() != null)
        {
            //return \Auth::user()->first_name;
        }
        else
        {
           // return "Please log in first";
        }

        //$articles = Articles::latest('published_at')->published()->get();
        $articles = Articles::latest('published_at')->published()->get();
        return view('articles.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response 
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //use App\Http\Requests\CreateArticleRequest as CreateArticleRequest;
    public function store(ArticleRequest $request)
    {
        //how to access the data from the post request?
        //use facade  \Illuminate\Http\Request  $request
        //$input = Request::all();
        //$input['published_at'] = Carbon::now();
        //Articles::create($input);
        //return $request->user_id;

        $article = new Articles($request->all());

        //the method articles() is from Articles.php eloquent
        \Auth::user()->articles()->save($article);
       // Articles::create($request->all());

        return redirect('articles');
    }

    /*
    //another way to validate
    // use Illuminate\Http\Request;
    public function store(Request $request)
    {
        $this->validate($request,['title'=>'required','body'=>'required']);
        Articles::create($request->all());

        return redirect('articles');
    }
    */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Articles::findOrFail($id);

       //dd(Carbon::now());
       // dd($article->published_at->diffForHumans());

        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Articles::findOrFail($id);
        return view('articles.edit',compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $article = Articles::findOrFail($id);
        $article ->update($request->all());

        return redirect('articles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
