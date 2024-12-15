<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
       $data=category::all();
       return view('category.index',['data'=>$data]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $info=[
            'name'=>$request->name,
            'description'=>$request['description'],
          ];
          category::create($info);
          return redirect('/category');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(category $category)
    {
        //
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(category $category)
    {
        //
        
        return view("category edit",[$info=>category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        //
        $category->name=$request->name;
        $category->description=$request->description;
        $category->save();
        return redriect('/category');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category)
    {
        //
    }
}
