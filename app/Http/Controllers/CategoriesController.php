<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $categories = \App\Category::All();
        return view('admin.index', compact('categories'));//Regresar la variable categories a la vista con todos los datos
        //return view('admin.index', ['name' => 'Victoria']);

        // return \View::make('categories.index')
        //     ->with('categories', Category::all());
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
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
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
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }





    /*public function getIndex(){
        return View::make('categories.index')
            ->with('categories',Category::all());

    }
    public function postCreate(){
        $validator = Validator::make(Input::all(), Category::$rules);

        if($validator->passes()){
            $category = new Category;
            $category->name = Input::get('name');
            $category->save();

            return Redirect::to('admin/categories/index')
                ->with('message','Category Created')
                ->withErrors($validator)
                ->withInput();

        }
    }


    public function postDestroy(){
        $category = Category::find(Input::get('id'));
        if($category){
            $category->delete();
            return Redirect::to('admin/categories/index')
                ->with('message','Category Deleted');
        }

        return Redirect::to('admin/categories/index')
                ->with('message','Something went wrong, please try again');
    }*/

}
