<?php

namespace App\Http\Controllers\Belanja\User;

use App\Item;
use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('shopping.index');
    }

    public function create()
    {
        //
    }

    public function store()
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
