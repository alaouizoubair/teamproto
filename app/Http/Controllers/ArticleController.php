<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use \Input;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $articles = Article::orderby('updated_at')->get();
        return view('article/index',compact('articles'));
    }

    /**
     * Display a listing of the resource after search
     *
     * @return Response
     */
    public function recherche(Request $request){
        $nom = Input::get('nom');
        $description = Input::get('description');
        $code = Input::get('code');
        $orderby = Input::get('orderby');
        $ordertype = Input::get('ordertype');

        $articles = Article::where('nom','LIKE','%'.$nom.'%')->
        where('description','LIKE','%'.$description.'%')->
        where('code','LIKE','%'.$code.'%')->
        orderby($orderby,$ordertype)->get();
        return view('article/index',compact('articles'));
    }

     /**
     * Dupliquer un article 
     *
     * @return Response
     */
     public function duplicate($id){
        $article = Article::find($id);
        $dup_article = new Article;
        
        $dup_article->nom = $article->nom;
        $dup_article->description = $article->description;
        $dup_article->save();
        
        $data_validations = ["Votre article a été dupliqué"];
        
        $articles = Article::orderby('updated_at')->get();
        return view('article/index',compact('articles','data_validations'));
     }



    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nom' => 'required|max:255|min:2',
            'description' => 'required|max:255',
            'code' => 'required|max:255'
        ]);

        $article = new Article;
        $article->nom = Input::get('nom');
        $article->description = Input::get('description');
        $article->code = Input::get('code');

        $article->save();

        $articles = Article::all();
        $data_validations = ["Votre article a été ajouté"];
        return view('article/index',compact('articles','data_validations'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $article = Article::where('id', $id)->first();
        return view("article/show",compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        /**/
        $article = Article::find($id);
        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->code = $request->code;

        $article->save();

        $data_validations = ["Votre article a été modifié"];

        $article = Article::where('id', $id)->first();
        return view("article/show",compact('article','data_validations'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        $data_validations = ["Votre article a été supprimé"];

        $articles = Article::orderby('updated_at')->get();
        return view('article/index',compact('articles','data_validations'));
    }
}
