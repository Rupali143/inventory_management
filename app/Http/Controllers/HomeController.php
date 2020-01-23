<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eloquent\Model\Product;
use App\Eloquent\Repositories\ProductsRepository AS Repo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $product;
    
    public function __construct(Product $product)
    {
     //   $this->middleware('auth');
        $this->model = new Repo($product);
    }

    /**
     * Show the application dashboard.
     *
     * @return prductCount int
     */
    public function dashboard()
    {
        $productCount= $this->model->productCount();
        return view('dashboard',compact('productCount'));
    }


}
