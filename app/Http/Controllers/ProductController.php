<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use App\Http\Requests;
use Session;
Session_start();
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    public function index()
   {
   	return view('add_product');
    //return view('dashboard');
   }
   public function save_product(Request $request)
   {
   		$data=array();
   		$data['product_name']=$request->product_name;
      $data['product_sku']=$request->product_sku;
      $data['product_price']=$request->product_price;
      $data['category_id']=$request->category_id;
      $data['brand_id']=$request->brand_id;
      $data['product_description']=$request->product_description;
      $data['product_status']=$request->product_status;
   		$image=$request->file('product_image');
      //$request->validate([
                
               // 'product_image' => 'required|mimes:png,jpeg,gif|min:2048', /* 2 MB */
                
            //]);
   		if($image){
            $image_name = Str::random(40);
   			//$image_name=str_random(20);
   			$ext=strtolower($image->getClientOriginalExtension());
   			$image_full_name=$image_name.'.'.$ext;
   			$upload_path='images/';
   			$image_url=$upload_path.$image_full_name;
   			$success=$image->move($upload_path,$image_full_name);
   			if($success)
   			{
   				$data['product_image']=$image_url;
   				DB::table('products')->insert($data);
   				Session::put('message','Product added successfully !!!');	
               //return Redirect::to('admin/add-product');
               return Redirec::to('admin/all-product');
   			}
            //echo "<pre";
           // print_r($data);
   		}
   		$data['product_image']='';
   		DB::table('tbl_products')->insert($data);
   		Session::put('message','Product added successfully without Image !!!');
   	return Redirect::to('/add-product');
   }
  
   public function all_product()
   {
      /*$all_product_info=DB::table('tbl_products')
               ->join('tbl_categorys' ,'tbl_products.category_id','=','tbl_categorys.id')
               ->join('tbl_brands','tbl_products.brand_id','=','tbl_brands.id')
               ->select('tbl_products.*','tbl_categorys.category_name')
               ->get();       
               $mannage_product=view('all_product')
              ->with('all_product_info',$all_product_info);
              return view('admin_layout')
              ->with('all_product',$mannage_product);*/
            $all_product_info=Product::with('category')->get();
            //dd($all_product_info);
            //dd($all_product_info['tbl_category_id']);
           // $product=Category::where('id',$all_product_info->tbl_category_id)->select('category_name')->first();
            $mannage_product=view('all_product')
          ->with('all_product_info',$all_product_info);
          return view('admin_layout')
              ->with('all_product',$mannage_product);
              //->with('all_category',$mannage_category);
              //return view('admin.concessionaire',compact('dataUser'));
              
   }
   public function unactive_product($id)
    {
      //DB::table('tbl_categorys')
        Product::where('id',$id)
        ->update(['product_status' => 0]);
      Session::put('message','product Unactive successfully !!!');
        return Redirect::to('admin/all-product');
      
    }
    public function active_product($id)
    {
      //DB::table('tbl_categorys')
        Product::where('id',$id)
        ->update(['product_status' => 1]);
      Session::put('message','product activated successfully !!!');
        return Redirect::to('admin/all-product');
      
    }
    public function edit_product($id)
    {
        
      //echo "$category_id";
      //$category_info=DB::table('tbl_categorys')
      $product_info=Product::where('id',$id)
        ->first();
        $product_info=view('edit_product')
          ->with('product_info',$product_info);
          return view('admin_layout')
              ->with('edit_product',$product_info)
              ->with('brand_name',$product_info);
             
      return view('edit_product');
    }
    public function update_product(Request $request,$id)
    {
       
      //echo $category_id;
      $data=array();
      $data['product_name']=$request->product_name;
      $data['product_sku']=$request->product_sku;
      $data['product_price']=$request->product_price;
      $data['product_description']=$request->product_description;
      //print_r($data);

      //DB::table('tbl_categorys')
        Product::where('id',$id)
        ->update($data);
      Session::put('message','Product update successfully !!!');
        return Redirect::to('admin/all-product');
      
    }
    public function delete_product($id)
    {
        
      //DB::table('tbl_categorys')
        product::where('id',$id)
        ->delete();
        Session::put('message','Product deleted successfully !!!');
        return Redirect::to('admin/all-product');
    }
    public function view_product()
    {
      $product_by_details=DB::table('products')
               ->join('category' ,'products.id','=','category.id')
              
               ->select('products.*','category.category_name')
               //->where('tbl_products.product_id',$product_id)
               ->where('products.publication_status',1)
               ->limit(5)
               ->first(); 


               $manage_product_by_details=view('product_details')
              ->with('product_by_details',$product_by_details);
              return view('welcome')
              ->with('product_details',$manage_product_by_details);
    }
}
