<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(){
        $allproducts = Produit::all();
        return view('frontend.shop',compact('allproducts'));
    }
}
