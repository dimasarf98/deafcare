<?php

namespace App\Http\Controllers\Belanja\User;

use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    public function index()
    {
        return view('shopping.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function cart()
    {
        return view('shopping.cart');
    }
}
