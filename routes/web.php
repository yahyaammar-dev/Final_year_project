<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userin;
use App\Http\Controllers\Login;
use App\Http\Controllers\Pakistanc;
use App\Http\Controllers\Adddestination;
use App\Http\Controllers\Listdestinations;
use App\Http\Controllers\filterdestination;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Homeitems;
use App\Http\Controllers\Newsletter;
use App\Http\Controllers\MailController;
use App\Http\Controllers\Useraccount;
use App\Http\Controllers\Calculatereviews;
use App\Http\Controllers\DestinationSingle;
use App\Http\Controllers\SaveId;
use App\Http\Controllers\Blog_detail;
use App\Http\Controllers\InsertImages;
use App\Http\Controllers\CalculateId;
use App\Http\Controllers\inserthotelimages;
use App\Http\Controllers\HotelDetail;
use App\Http\Controllers\freelancerListing;
use App\Http\Controllers\hotellisting;
use App\Http\Controllers\productlisting;
use App\Http\Controllers\bloglisting;
use App\Http\Controllers\freelancerdetail;
use App\Http\Controllers\productdetail;
use App\Http\Controllers\BlogDetail;


Route::get('signup',function (){
    return view("signup");
});

Route::get('login',function (){
    return view("login");
});

Route::get('muree',function (){
    return view("muree");
});

Route::get('hotel',function (){
    return view("hotel");
});

Route::get('blogcategory',function (){
    return view("blogcategory");
});


Route::get('accountcreated',function (){
    return view("accountcreated");
});

Route::get('about',function (){
    return view("about");
});

Route::get('contact',function (){
    return view("contact");
});

Route::get('author',function (){
    return view("author");
});

Route::get('hotellisting',function (){
    return view("hotellisting");
});

Route::get('bloglisting',function (){
    return view("bloglisting");
});


Route::get('blogcategorylisting',function (){
    return view("blogcategorylisting");
});

Route::get('freelancerdetail',function (){
    return view("freelancerdetail");
});

Route::get('freelancerlisting',function (){
    return view("freelancerlisting");
});

Route::get('productdetail',function (){
    return view("productdetail");
});

Route::get('productlisting',function (){
    return view("productlisting");
});

Route::get('addtocart',function (){
    return view("addtocart");
});

Route::get('checkout',function (){
    return view("checkout");
});

Route::get('contactdir',function (){
    return view("contactdir");
});

Route::get('favorite',function (){
    return view("favorite");
});

Route::get('visas',function (){
    return view("visas");
});

Route::get('addcategory',function (){
    return view("addcategory");
});

Route::get('adddestination',function (){
    return view("adddestination");
});

Route::get('addfreelancer',function (){
    return view("addfreelancer");
});

Route::get('addhotel',function (){
    return view("addhotel");
});

Route::get('addproduct',function (){
    return view("addproduct");
});

Route::get('writeblog',function (){
    return view("writeblog");
});

Route::post('signup',[Userin::class,'insertUser']);

Route::post('login', [Login::class,'loginuser']);

Route::get('pakistan', [Pakistanc::class,'returnhtml']);

Route::post('adddestination',[Adddestination::class,'adddestination']);

Route::get('destinationlisting', [Listdestinations::class,'Listdestinations']);

Route::get('filterdestination', [filterdestination::class,'Listdestinations']);

Route::get('/', [Homeitems::class,'Listitems']);

Route::get('/search',[SearchController::class,'search']);

Route::post('/',[Newsletter::class,'register']);

Route::get('send-mail', [MailController::class,'sendMail']);

Route::get('useraccount', [Useraccount::class,'Showaccount'] );

Route::get('Calculatereviews', [Calculatereviews::class,'Calculate'] );

Route::get('destinations', [DestinationSingle::class , 'SingleDestination']);

Route::get('saveid', [SaveId::class , 'Save']);

Route::post('blogdetail', [Blog_detail::class , 'SingleBlog']);

Route::post('insertimages', [InsertImages::class , 'InsertImages']);

Route::post('calculateid', [CalculateId::class , 'CalculateId']);

Route::get('hoteldetail', [HotelDetail::class , 'HotelDetail']);

Route::get('freelancerListing',[freelancerListing::class,'freelancerListing']);

Route::get('hotellisting',[hotellisting::class,'hotellisting']);

Route::get('productlisting',[productlisting::class,'productlisting']);

Route::get('bloglisting',[bloglisting::class,'bloglisting']);

Route::get('hoteldetail/{unique}', [hoteldetail::class,'hoteldetail']);

Route::get('freelancerdetail/{unique}', [freelancerdetail::class,'freelancerdetail']);

Route::get('productdetail/{unique}', [productdetail::class,'productdetail']);

Route::get('blogdetail/{unique}', [BlogDetail::class,'BlogDetail']);

