<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodModel;
use App\Models\HistoryModel;
use App\Models\Cart;
use Session;

class FoodController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        return view('foodform');
    }

    public function store(Request $request)
    {
        $destiantion_path = 'public/images';
        $foodName = $request->input('foodName');
        $price = $request->input('price');
        $description = $request->input('description');
        $files = $_FILES['foodPic'];
        $fileName = $files['name'];
        $path = $request->file('foodPic')->storeAs($destiantion_path, $fileName);


        $food = new FoodModel;
        $food->foodName = $foodName;
        $food->price = $price;
        $food->description = $description;
        $food->foodPic = $fileName;
        $food->save();

        return redirect('/menu');

    }
    public function addToCart(Request $request){
      $customerId = $request->input('customerId');
      $food = FoodModel::find($request->input('foodId'));
      $foodName = $food['foodName'];
      $price = $food['price'];

      $item = new Cart;
      $item['foodName'] = $foodName;
      $item['price'] = $price;
      $item['customerId'] = $customerId;

      $item->save();

      return redirect('/menu');
    }
    public function menu(){
      $items = FoodModel::all();

      return view('menu')->with('food', $items);
    }

    public function history(Request $request)
    {
        $id = $request->input('customerId');
        $history = HistoryModel::all()->where('customerId',"=" ,$id);
        return view('history')->with('history', $history);
    }

    public function edit(Request $request)
    {
      $item = FoodModel::find($request->input('foodId'));

      return view('editForm')->with('item',$item);
    }
    public function editFood(Request $request){
      $food = FoodModel::find($request->input('foodId'));
      if($food){
        $foodName = $request->input('foodName');
        $price = $request->input('price');
        $description = $request->input('description');

        $food->foodName = $foodName;
        $food->price = $price;
        $food->description = $description;
        $food->save();
      }

      return redirect('/menu');
    }
    public function delete(Request $request){
      $item = FoodModel::find($request->input('foodId'));
      $item->delete();

      $items = FoodModel::all();

      return view('menu')->with('food', $items);
    }

    public function update(Request $request, $id)
    {

    }

     public function showCart(Request $request){
       $id = $request->input('customerId');
       $cart = Cart::all()->where('customerId', "=", $id);
       return view('cart')->with('cart', $cart);
     }
    public function destroy(Request $request)
    {
        $item = Cart::find($request->input('cartId'));
        $item->delete();

        $id = $request->input('customerId');
        $cart = Cart::all()->where('customerId', "=", $id);
        return view('cart')->with('cart', $cart);
    }
    public function submitOrder(Request $request){
      $id  = $request->input('customerId');
      $cart = Cart::all()->where('customerId', "=", $id);
      foreach($cart as $item){
        $new = new HistoryModel;
        $new['foodName'] = $item['foodName'];
        $new['price'] = $item['price'];
        $new['customerId'] = $id;
        $new->save();
      }
      $history = HistoryModel::all()->where('customerId',"=" ,$id);
      return view('history')->with('history', $history);
    }
}
