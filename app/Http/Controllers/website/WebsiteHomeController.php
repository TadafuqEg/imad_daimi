<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Setting;
use App\Models\ContactUs;
use App\Models\Accident;
use Illuminate\Validation\Rule;
use Image;
use Str;
use File;

class WebsiteHomeController extends ApiController
{
    public function home(){
        $img1=url(Setting::where('key','introduction_image')->where('category','website')->where('type','file')->first()->value);
        $img2=url(Setting::where('key','intro_image')->where('category','application')->where('type','file')->first()->value);
        $img3=url(Setting::where('key','summary-of-the-edition-image')->where('category','website')->where('type','file')->first()->value);
        $img4=url(Setting::where('key','work_image1')->where('category','website')->where('type','file')->first()->value);
        $img5=url(Setting::where('key','work-image2')->where('category','website')->where('type','file')->first()->value);
        $img6=url(Setting::where('key','work-image3')->where('category','website')->where('type','file')->first()->value);
        $img7=url(Setting::where('key','article-image1')->where('category','website')->where('type','file')->first()->value);
        $img8=url(Setting::where('key','article-image2')->where('category','website')->where('type','file')->first()->value);
        $text1=Setting::where('key','text_1')->where('category','website')->where('type','points')->first()->value;
        $text2=Setting::where('key','text_2')->where('category','website')->where('type','points')->first()->value;
        $text3=Setting::where('key','text_3')->where('category','website')->where('type','points')->first()->value;
        $text4=Setting::where('key','text_4')->where('category','website')->where('type','points')->first()->value;
        $text5=Setting::where('key','text_5')->where('category','website')->where('type','points')->first()->value;
        $text6=Setting::where('key','text_6')->where('category','website')->where('type','points')->first()->value;
        $text7=Setting::where('key','text_7')->where('category','website')->where('type','points')->first()->value;

        $text8=Setting::where('key','text_8')->where('category','website')->where('type','textarea')->first()->value;
        $text9=Setting::where('key','text_9')->where('category','website')->where('type','textarea')->first()->value;
        return view('website2.home2',compact('img1','img2','img3','img4','img5','img6','img7','img8','text1','text2','text3','text4','text5','text6','text7','text8','text9'));
    }

    public function contact_us(Request $request){
        ContactUs::create(['first_name'=>$request->first_name,'last_name'=>$request->last_name,'email'=>$request->email,'message'=>$request->message,'phone'=>$request->phone]);
        return $this->sendResponse(null,'سوف نقوم بالرد عليكم فى أقرب وقت');
    }
    public function privacy(){
        return view('website2.privacy');
    }
}