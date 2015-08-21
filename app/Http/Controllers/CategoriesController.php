<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;//Se agrega para no tener que estar escribiendo  \App\Category cada vez que se utilice

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
        $categories = Category::orderBy('name')->get();;
        return view('admin.categories.index', compact('categories'));//Regresar la variable categories a la vista con todos los datos

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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
            Category::create([
            'name' => $request['name']
        ]);
        
        flash()->success('Nueva categoria creada:   "'. $request['name'].'"');

        return redirect('admin/categories');
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
        $category = Category::find($id);
        return view('admin/categories/edit',['category'=>$category]);
        //return view('admin/categories', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();
        flash()->warning('La categoria fue editada correctamente');
        return Redirect::to('admin/categories');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
         Category::destroy($id);
         flash()->warning('La categoria fue eliminada correctamente');
        return redirect('admin/categories');
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
