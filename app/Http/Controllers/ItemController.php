<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;
use DB;
class ItemController extends Controller
{
    public function store(Request $request)
        {
            /* $stock=Stock::create($request->all()); */
            $item = new Item();
            $item->name=$request->get('name');
            $item->price= $request->get('price');
        
            $item->save();
            return response()->json('Successfully added');
        }
    public function allProds(){
       $prods=DB::table('items')
                    ->orderBy('id', 'desc')
                    ->get();
       return response()->json($prods);
      /*  $articles =     DB::table('article_marque_famille')
                       ->orderBy('ART_QteStock', 'asc')
                       ->limit(10)
                       ->get(); */
       }
}
