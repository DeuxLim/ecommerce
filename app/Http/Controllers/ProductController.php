<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\ProductService;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\NewProductRequest;

class ProductController extends Controller
{
    protected $product;

    public function index(){
        $products = Product::all();
        //dd($products);
        return view('products.index', ["products" => $products]);
    }

    public function __construct(ProductService $product){
        $this->product = $product;
    }

    public function create(){
        return view('products.create');
    }

    public function store(NewProductRequest $request){
        $validatedData = $request->validated();
        $user = Auth::user();

        $this->product->createProduct($validatedData,  $user);

        return redirect()->route('product.index');

    }
}
