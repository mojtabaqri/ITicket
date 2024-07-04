<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceCategoryController extends ApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return 'all category';
    }

    public function store(Request $request)
    {
        return 'save new category';
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return ' update category';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'delete category';
    }



}
