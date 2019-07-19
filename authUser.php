<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Section;
use App\Models\Item;
class authUser extends Controller
{
 
function index(request $request){
    $sections=Section::select('*')->where('active_section',1)->get();
    $categorys=Category::select('*')->where('active_category',1)->get();
    $items=Item::select('*')->where('active_item',1)->get();
    
    $data=array();
    $data['data']['sections']=$sections;
    $data['data']['categorys']=$categorys;
    $data['data']['items']=$items;
    echo json_encode($data);
    }
    


}
