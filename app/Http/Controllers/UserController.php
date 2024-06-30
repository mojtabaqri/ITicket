<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
     return 'all user';
     //todo
    }
    public function store( $request)
    {
        return 'store user';
        //todo
    }
    public function show(User $user)
    {
        return 'show specific user';
        //todo
    }

    public function update(Request $request, string $id)
    {
        return 'update specific user';
        //todo
    }

    public function destroy(User $id)
    {
        return 'delete specific user';
        //todo
    }
}
