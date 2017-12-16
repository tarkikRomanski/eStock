<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Item;
use App\Http\Resources\ItemResource;

class ItemsController extends Controller
{
     public function index()
    {
        $items = Item::latest()
            ->paginate(20);

        return ItemResource::collection($items);
    }

  
    public function show(Item $items)
    {
        return new ItemResource($items);
    }

    public function store(Request $request)
    {
        $items = $this->validate($request, [
            'title' => 'required|min:2|max:50',
            'stock_id' => 'required',
            'unit_id' => 'required',
            'price' => 'required|numeric',
        ]);

        $items = Item::create($items);

        return new ItemResource($items);
    }
}