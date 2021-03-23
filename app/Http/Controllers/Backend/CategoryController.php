<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::orderBy('name','asc')->get();
        return view('backend.pages.category.manage', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $primary_category = Category::orderBy('name','asc')->where('parent_id',0)->get();
        return view('backend.pages.category.create',compact('primary_category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255'
        ],
        [
            'name.required' => 'Please Provide Category Name'
        ]);

        $category = new Category();
        $category->name       = $request->name;
        $category->slug       = Str::slug($request->name);
        $category->icon         = $request->icon;
        $category->desc       = $request->desc;
        $category->parent_id  = $request->parent_id;
        $category->fetured  = $request->fetured;
        $category->save();

        return redirect()->route('category.manage');
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $primary_category = Category::orderBy('name','asc')->where('parent_id',0)->get();
        $category = Category::find($id);
        if ( !is_null( $category ) ){
            return view('backend.pages.category.update', compact('category','primary_category'));
        }
        else{
            return route('category.manage');
        }
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
        $request->validate([
            'name' => 'required|max:255'
        ],
        [
            'name.required' => 'Please Provide Category Name'
        ]);

        $category               = Category::find($id);
        $category->name         = $request->name;
        $category->slug         = Str::slug($request->name);
        $category->icon         = $request->icon;
        $category->desc         = $request->desc;
        $category->parent_id    = $request->parent_id;
        $category->fetured    = $request->featured;
        $category->save();

        return redirect()->route('category.manage');
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
