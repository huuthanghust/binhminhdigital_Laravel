<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slide;

class PageController extends Controller
{
    public function index(){
    	$banner = Slide::all();
    	return view('pages.home',compact('banner'));
    }
    public function product(){

    	return view('pages.product');
    }
    public function contact(){
    	return view('pages.contact');
    }
    public function getInfo() {
    	return view('pages.information');
    }
}
