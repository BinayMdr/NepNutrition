<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Banner;
use App\Models\Certification;
use App\Models\CustomerReview;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\PopUp;
use App\Models\Product;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function index()
    {
      $banners = Banner::where('is_enabled',true)
                     ->orderBy('order')->get();
      
      $settings = $this->getSettings();
      
      $reviews = CustomerReview::where('is_enabled',true)
                     ->orderBy('order')->limit(6)->get();
      
      $popUp = PopUp::where('is_enabled',true)
                      ->orderBy('order')->first();

      $products = Product::where('is_enabled',true)
                    ->where('show_in_home_page',true)
                    ->orderBy('order')
                    ->limit(6)
                    ->get();

      return view('frontend.pages.index',compact('banners','settings','reviews','popUp','products'));
    }

    public function products(Request $request)
    {
      $settings = $this->getSettings();

      $order = $request->query('order') ?? 'asc';
      
      $products = Product::where('is_enabled',true)
                    ->orderBy('name',$order)->get();
      return view('frontend.pages.products',compact('settings','products','order'));
    }

    public function authenticity()
    {
      $settings = $this->getSettings();
      $certifications = Certification::orderBy('id','desc')->get();

      return view('frontend.pages.authenticity',compact('settings','certifications'));
    }

    public function contact_us()
    {
      $settings = $this->getSettings();
      return view('frontend.pages.contact-us',compact('settings'));
    }

    public function gallery()
    {
      $settings = $this->getSettings();
      $galleries = Gallery::orderBy('id','desc')->get();
      return view('frontend.pages.gallery',compact('settings','galleries'));
    }

    public function product_details($slug)
    {
      $settings = $this->getSettings();
      $product = Product::where('slug',$slug)->first();

      $relatedProducts = Product::where('id', '!=', $product->id)
                          ->where('is_enabled',true)
                          ->inRandomOrder()
                          ->limit(4)
                          ->get();

      return view('frontend.pages.product-detail',compact('settings','product','relatedProducts'));
    }

    public function about_us( )
    {
      $settings = $this->getSettings();
      $teams = Team::where('is_enabled',true)
                    ->orderBy('order','asc')->get();
      $aboutUs = AboutUs::first();

      return view('frontend.pages.about-us',compact('settings','teams','aboutUs'));
    }

    private function getSettings()
    {
      return Setting::pluck('value','key');
    }

    public function send_message(Request $request)
    {
      $request->validate([
        'full_name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
      ]);

      Message::create([
        'name' => $request->full_name,
        'email' => $request->email,
        'message' => $request->message
      ]);

      return redirect()->route('frontend.contact_us')->with('success','Thank you for your message');
    }

    public function save_session(Request $request)
    {
      Session::put('modal_shown', $request->modal_id);
    }

}
