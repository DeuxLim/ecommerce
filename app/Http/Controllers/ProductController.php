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

    public function __construct(ProductService $product){
        $this->product = $product;
    }

    public function index(){
        return view('products.index', ["products" => Product::all()]);
    }

    public function create(){
        return view('products.create');
    }

    public function show(Product $product){
        return view('products.show', ["product" => $product]);
    }

    public function edit(Product $product){
        return view('products.edit', ["product" => $product]);
    }

    public function store(NewProductRequest $request){
        $validatedData = $request->validated();
        $user = Auth::user();
        $this->product->createProduct($validatedData,  $user);
        return redirect()->route('product.index');
    }

    public function update(Product $product){
        return "test";
    }
}
