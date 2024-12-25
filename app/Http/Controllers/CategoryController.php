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
        $data=[
            ['name' =>"bikaner",'id' =>3],
            ['name' =>"Jaipur",'id' =>2],
            ['name' =>"Jodhpur",'id' =>1],
            ['name' =>"Nokha",'id' =>43]
        ];
        return view('category.create',compact('data'));
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
          return redirect('/category')->with('success','Data  successfully');
        
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
    public function edit($id)
    {
        //
        $category=category::find($id);
        return view("category.edit",['info'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        //
        $category=category::find($id);
        $category->name=$request->name;
        $category->description=$request->description;
        $category->save();
        return redirect('/category')->with('success','Data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $category= category::find($id);
        $category->delete();
        return redirect('/category')->with('success','Data deleted successfully');

    }
}
