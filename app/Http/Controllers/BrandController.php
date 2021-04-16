<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Brand;
use App\Http\Requests;
use Session;
Session_start();
use Illuminate\Support\Facades\Redirect;
class BrandController extends Controller
{
    public function index()
    {
    	return view('add_brand');
    }
    public function save_brand(Request $request)
    {
    	$data=array();
    	$data['id']=$request->id;	
    	$data['brand_name']=$request->brand_name;	
    	$data['brand_status']=$request->brand_status;
        //DB::table('tbl_brands')->insert($data);
        Brand::insert($data);
        Session::put('message','brand added successfully !!!');	
        //return Redirect::to('admin/add-brand');
		return Redirect::to('admin/all-brand');	
    }
    public function all_brand()
    {
    	//$all_brand_info=DB::table('tbl_brands')->get();
    	$all_brand_info=Brand::get();
    	$mannage_brand=view('all_brand')
    						->with('all_brand_info',$all_brand_info);
    							return view('admin_layout')
    						->with('all_brand',$mannage_brand);
    	
    }
    public function unactive_brand($id)
    {
    	//DB::table('tbl_brands')
    		Brand::where('id',$id)
    		->update(['brand_status' => 0]);
    	Session::put('message','brand Unactive successfully !!!');
    		return Redirect::to('admin/all-brand');
    	
    }
    public function active_brand($id)
    {
    	//DB::table('tbl_brands')
    		Brand::where('id',$id)
    		->update(['brand_status' => 1]);
    	Session::put('message','brand activated successfully !!!');
    		return Redirect::to('admin/all-brand');
    	
    }
    public function edit_brand($id)
    {
    	//$brand_info=DB::table('tbl_brands')
    	$brand_info=Brand::where('id',$id)
    		->first();
    	$brand_info=view('edit_brand')
    		->with('brand_info',$brand_info);
    		return view('admin_layout')
    		->with('edit_brand',$brand_info);
    	    return view('edit_brand');
    }
    public function update_brand(Request $request,$id)
    {
        
    	$data=array();
    	$data['brand_name']=$request->brand_name;
    	//DB::table('tbl_brands')
    		Brand::where('id',$id)
    		->update($data);
    	      Session::put('message','brand update successfully !!!');
    		  return Redirect::to('admin/all-brand');
    	
    }
    public function delete_brand($id)
    {
        
    	//echo "Hi Tapan";
    	//DB::table('tbl_brands')
    		Brand::where('id',$id)
    		->delete();
    		Session::put('message','brand deleted successfully !!!');
    		return Redirect::to('admin/all-brand');
    	//Db::table('tbl_manufacture')
    	//	->where
    }
}
