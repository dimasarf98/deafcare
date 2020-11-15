<?php

namespace App\Http\Controllers\Belanja;

use App\Item;
use App\JenisBelanja;
use App\JenisKesehatan;
use App\Transformer\BelanjaItem;
use Illuminate\Http\Request;

class BelanjaController extends Controller
{
    public function index()
    {
        $items = Item::all();
        $tags = JenisBelanja::all();
        return view('shopping.index',[
            'items' => $items,
            'tags' => $tags,
            'active' => 0
        ]);
    }

    public function create()
    {
        $jenises = JenisBelanja::all();
        return view('shopping.create', compact('jenises'));
    }

    public function store()
    {
        $response = BelanjaItem::make();
        Item::create($response);

        return redirect(route('deafcare.belanja.user.item.index'));
    }

    public function show($id)
    {
        $item = Item::findorfail($id);

        return view('shopping.show', compact('item'));
    }

    public function getJenis($id)
    {
        $items = JenisBelanja::findorfail($id)->items;
        $tags = JenisBelanja::all();
        return view('shopping.index',[
            'items' => $items,
            'tags' => $tags,
            'active' => $id
        ]);
    }

    public function edit($id)
    {
        $item = Item::findorfail($id);
        $jenises = JenisBelanja::all();
        return view('shopping.edit', compact('item', 'jenises'));
    }

    public function update($id)
    {
        $response = BelanjaItem::make();
        Item::findorfail($id)->update($response);

        return redirect(route('deafcare.belanja.user.item.show', $id));
    }

    public function destroy($id)
    {
        Item::findorfail($id)->delete();

        return redirect(route('deafcare.belanja.user.item.index'));
    }

    public function cart()
    {
        return view('shopping.cart');
    }
}
