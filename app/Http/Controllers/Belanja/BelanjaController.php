<?php

namespace App\Http\Controllers\Belanja;

use App\Item;
use App\Transformer\BelanjaItem;
use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('shopping.index',[
            'items' => $items
        ]);
    }

    public function create()
    {
        //
    }

    public function store()
    {
        $response = BelanjaItem::make();
        Item::create($response);
    }

    public function show($id)
    {
        $item = Item::findorfail($id);
    }

    public function edit($id)
    {
        $item = Item::findorfail($id);
    }

    public function update($id)
    {
        $response = BelanjaItem::make();
        Item::findorfail($id)->update($response);
    }

    public function destroy($id)
    {
        Item::findorfail($id)->delete();
    }

    public function cart()
    {
        return view('shopping.cart');
    }
}
