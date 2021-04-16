<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
Session_start();
use Illuminate\Support\Facades\Redirect;
class CategoryController extends Controller
{
    public function index()
    {
    	return view('add_category');
    }
    
     public function all_category()
    {
    	$all_category_info=Category::get();
    	//dd($all_category_info);
    	$mannage_category=view('all_category')
    			->with('all_category_info',$all_category_info);
    			return view('admin_layout')
    					->with('all_category',$mannage_category);
    	//return view('admin.all_category');
    }
    public function save_category(Request $request)
    {
       
    	$data=array();
		//$taglessBody = strip_tags($subject->body);
    	$data['id']=$request->id;	
    	$data['category_name']=$request->category_name;	
    	$data['category_description']=$request->category_description;	
    	$data['publication_status']=$request->publication_status;
        //DB::table('tbl_categorys')->insert($data);
        Category::insert($data);
        //dd($data);
        Session::put('message','Category added successfully !!!');	
        //return Redirect::to('admin/add-catagory');
		return Redirect::to('admin/all-category');
		//return view('all_category');	
    }
    public function unactive_category($id)
    {
    	//DB::table('tbl_categorys')
    	Category::where('id',$id)
    		->update(['publication_status' => 0]);
    	Session::put('message','Category Unactive successfully !!!');
    		return Redirect::to('admin/all-category');
    	
    }
    public function active_category($id)
    {
    	//DB::table('tbl_categorys')
    		Category::where('id',$id)
    		->update(['publication_status' => 1]);
    	Session::put('message','Category activated successfully !!!');
    		return Redirect::to('admin/all-category');
    	
    }
    public function edit_category($id)
    {
        
    	//echo "$category_id";
    	//$category_info=DB::table('tbl_categorys')
    	$category_info=Category::where('id',$id)
    		->first();
    		$category_info=view('edit_category')
    			->with('category_info',$category_info);
    			return view('admin_layout')
    					->with('edit_category',$category_info);
    	
    	return view('edit_category');
    }
    public function update_category(Request $request,$id)
    {
       
    	//echo $category_id;
    	$data=array();
    	$data['category_name']=$request->category_name;
    	$data['category_description']=$request->category_description;
    	//print_r($data);

    	//DB::table('tbl_categorys')
    		Category::where('id',$id)
    		->update($data);
    	Session::put('message','Category update successfully !!!');
    		return Redirect::to('admin/all-category');
    	
    }
    public function delete_category($id)
    {
        
    	//DB::table('tbl_categorys')
    	Category::where('id',$id)
    		->delete();
    		Session::put('message','Category deleted successfully !!!');
    		return Redirect::to('admin/all-category');
    }
}
