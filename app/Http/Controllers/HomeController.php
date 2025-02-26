<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\VeriantSize;
use App\Models\PageCategory;
use App\Models\PageSections;
use App\Models\VeriantColor;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
         return view('home');
    }
	
	public function about()
    {
         return view('about');
    }
	
	public function all_matches()
    {
         return view('all_matches');
    }
	
	public function rules()
    {
         return view('rules');
    }
	
	public function contactus()
    {
         return view('contactus');
    }
	
	public function faq()
    {
         return view('faq');
    }
	
	public function terms_condition()
    {
         return view('terms_condition');
    }
	
	public function privacy_policy()
    {
         return view('privacy_policy');
    }

    public function login(){
        // $this->middleware('auth')->except('logout');
        return view('auth.login');
    }
    
    // public function product_detail($id)
    // {
    //     $data['product'] = Product::find($id);
    //     $data['size'] = VeriantSize::where('product_id',$id)->first();
    //     // return json_decode($size->name); 
    //     $data['color'] = VeriantColor::where('product_id',$id)->first();
    //     return view('admin.product_detail',$data);
    // }
}
