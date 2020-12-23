<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodModel;
use App\Models\Cart;
use App\Models\Hitory;
use Session;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getAddToCart(Request $request, $id){
        $items = Foodmodel::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') :null;
        $cart = new Cart($oldCart);
        $cart->add($items, $items->id);

        $request->session()->put('cart', $cart);
        dd($request->session()->get('cart'));
        return redirect()->route('/home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foodform');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

        return redirect('/home');

    }
    public function menu(){
      $items = FoodModel::all();

      return view('menu')->with('food', $items);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
