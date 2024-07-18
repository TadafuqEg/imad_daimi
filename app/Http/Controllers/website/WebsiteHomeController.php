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

use App\Models\Volunteer;
use App\Models\Accident;
use Illuminate\Validation\Rule;
use Image;
use Str;
use File;

class WebsiteHomeController extends ApiController
{
    public function home(){
        return view('website2.home');
    }

    public function contact_us(Request $request){
        return $this->sendResponse(null,'سوف نقوم بالرد عليكم فى أقرب وقت');
    }
}