<?php

namespace App\Http\Controllers;

use App\Models\Foodcategory;
use Illuminate\Http\Request;

class FoodcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $title = ' Food Category ';


    public function index()
    {
        $foodcategory = Foodcategory::simplePaginate(4);
        return view('admin.foodcategory.index', ['foodcategory'=>$foodcategory, 'title'=>$this->title]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foorcategory  $foorcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Foorcategory $foorcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foorcategory  $foorcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Foorcategory $foorcategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Foorcategory  $foorcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Foorcategory $foorcategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foorcategory  $foorcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foorcategory $foorcategory)
    {
        //
    }
}
