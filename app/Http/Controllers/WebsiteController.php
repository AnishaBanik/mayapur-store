<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Status;
use App\Models\Customer;
use App\Models\Review;

class WebsiteController extends Controller
{
    public function home(Request $request)
    {
        $allProds=Product::with("subCategory.category")->with("status")->get();
        $cats=Category::get();
        $hotdeals=Product::where('statusId',1)->with("subCategory.category")->with("status")->get();
        $bestdeals=Product::where('statusId',2)->with("subCategory.category")->with("status")->get();
        $featured=Product::where('statusId',3)->with("subCategory.category")->with("status")->get();

        $subCats=SubCategory::get();
        
        $email=$request->session()->get('email');
        //return json_encode($hotdeals);
        $data=['subCats'=>$subCats, 'email'=>$email, 'allProds'=>$allProds, 'hotdeals'=> $hotdeals, 'bestdeals'=>$bestdeals, 'featured'=>$featured, 'cats'=>$cats];
        return view("home")->with($data);
    }
    public function login_page(Request $request)
    {
        return view("login");
    }
    public function register_page(Request $request)
    {
        return view("register");
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
    	return redirect("/");
    }
    public function create_account(Request $request)
    {
        $matchthese = ["email"=>$request->email];
        $check= Customer::where($matchthese)->get();
        if(count($check)>=1)
        {
            return redirect("/login")->with('error', "An account exists with this email id. Please login to continue.");
        }
        $cust = new Customer;
        $cust->name= $request->name;
        $cust->email= $request->email;
        $cust->contact =$request->phn;
        $cust->address= $request->addr;
        $cust->pincode= $request->pin;
        $cust->password= $request->password;
        $cust->save();
        return redirect("/login")->with('success', "Account succesfully created. Login to continue.");
    }
    public function login_check(Request $request)
    {
        $matchthese = ["email"=>$request->email];
        $check= Customer::where($matchthese)->get();
        if(count($check)<=0)
        {
            return redirect("/register")->with('error', "No account with this email-id exists. Register to continue");
        }
        if(count($check)==1)
        {
            $check=$check[0];
            if($check->password==$request->password)
            {
                $request->session()->put('email', $request->email);
                return redirect("/");
            }
               
            else
                return redirect("/login")->with('error', "Incorrect password");
        }
        return redirect ("/register")->with('error', "Create an account with a different mail-id.");
    }
    public function view_product(Request $request, $id)
    {
        $matchthese=["id"=>$id];
        $product=Product::where($matchthese)->with("subCategory.category")->with("status")->get();
        $product=$product[0];
        $email=$request->session()->get('email');
        $change=substr($product->gallery, 1); 
        $change=substr($change, 0, strlen($change)-1);
        $pieces = explode(",", $change);
        for($i=0; $i<count($pieces); $i++)
        {
            $p=$pieces[$i];
            $p=substr($p, 1);
            $p=substr($p, 0, strlen($p)-1);
            $pieces[$i]=$p;
        }
        $matchthese=["subCatId"=>$product->subCatId];
        $related=Product::where($matchthese)->get();
        $matchthese=["prodId"=>$product->id];
        $revs=Review::where($matchthese)->get();
        $matchthese=["statusId"=>$product->statusId];
        $upsell=Product::where($matchthese)->where('id', '!=', $product->id)->get();
        //return json_encode($upsell);
        $data=['upsell'=>$upsell, 'related'=>$related, 'email'=>$email, 'product'=>$product, 'pieces'=>$pieces, 'revs'=>$revs];
        return view("product")->with($data);
    }
    public function post_review(Request $request)
    {
        $rev= new Review();
        $rev->prodId= $request->prod;
        $rev->name= $request->name;
        $rev->comment= $request->text;
        $rev->save();
        return redirect()->back();
        //return json_encode($request->all());
    }
}
