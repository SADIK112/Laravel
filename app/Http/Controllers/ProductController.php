<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use DB;
class ProductController extends Controller
{
    public function createProduct(){
        $categories = Category::where('publicationStatus', 1)->get();
        return view('admin.product.createProduct',['categories'=>$categories]);
    }
    public function storeProduct(Request $request){
        $this->validate($request,[
        'productName' => 'required',
        'productPrice' => 'required',
        'productImage' => 'required',
    ]);

    $productImage=$request->file('productImage');
    $name = $productImage->getClientOriginalName();
    $uploadPath='public/productImage/';
    $productImage->move($uploadPath, $name);
    $imageUrl=$uploadPath.$name;
    $this->saveProductInfo($request, $imageUrl);
    return redirect('/product/add')->with('message', 'Product info save sauccessfully');
}
protected function saveProductInfo($request, $imageUrl) {
    $product = new Product();
    $product->productName = $request->productName;
    $product->categoryId = $request->categoryId;
    $product->productPrice = $request->productPrice;
    $product->productQuantity = $request->productQuantity;
    $product->productShortDescription = $request->productShortDescription;
    $product->productLongDescription = $request->productLongDescription;
    $product->productImage = $imageUrl;
    $product->publicationStatus = $request->publicationStatus;
    $product->save();   
  }
  public function manageProduct() {
    $products = DB::table('products')
            ->join('categories', 'products.categoryId', '=', 'categories.id')
          //->select('products.id', 'products.productName', 'products.productPrice', 'products.productQuantity', 'products.publicationStatus', 'categories.categoryName', 'manufacturers.manufacturerName')
            ->select('products.*', 'categories.categoryName')
            ->get();
    return view('admin.product.manageProduct', ['products' => $products]);
}

public function viewProduct($id) {
    $productById = DB::table('products')
            ->join('categories', 'products.categoryId', '=', 'categories.id')
//          ->select('products.id', 'products.productName', 'products.productPrice', 'products.productQuantity', 'products.publicationStatus', 'categories.categoryName', 'manufacturers.manufacturerName')
            ->select('products.*', 'categories.categoryName')
            ->where('products.id', $id)
            ->first();
    return view('admin.product.viewProduct', ['product'=>$productById]);
    }

    public function editProduct($id){
        $categories = Category::where('publicationStatus', 1)->get();
        $productById = Product::where('id', $id)->first();
        return view('admin.product.editProduct')
                ->with('productById', $productById)
                ->with('categories', $categories);
    }
    public function updateProduct(Request $request) {
        $imageUrl = $this->imageExistStatus($request);
        echo $imageUrl;
        exit();
    }

    private function imageExistStatus($request) {
        $productById = Product::where('id', $request->productId)->first();
        $productImage = $request->file('productImage');
        if ($productImage) {
            unlink($productById->productImage);
            $name = $productImage->getClientOriginalName();
            $uploadPath = 'public/productImage/';
            $productImage->move($uploadPath, $name);
            $imageUrl = $uploadPath . $name;
        } else {
            $imageUrl = $productById->productImage;
        }
        return $imageUrl;
    }

}
