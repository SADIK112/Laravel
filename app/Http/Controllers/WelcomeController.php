<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class WelcomeController extends Controller
{
    public function index(){
        return view('frontEnd.home.homeContent');
    }
    public function about(){
        return view('frontEnd.about.aboutContent');
    }
    public function Services(){
        return view('frontEnd.Services.ServicesContent');
    }
    public function Menus(){
        $publishedProducts = Product::where('publicationStatus',1)->get();
        return view('frontEnd.Menus.MenusContent',['publishedProducts' => $publishedProducts]);
    }
    public function SignIn(){
        return view('frontEnd.Contact.ContactContent');
    }
}
