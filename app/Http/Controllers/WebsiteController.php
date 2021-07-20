<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Status;
use App\Models\Customer;
use App\Models\Review;
use App\Models\Wishlist;
use App\Models\Cart;
use App\Models\Order;

class WebsiteController extends Controller
{
    public function home(Request $request)
    {
        $allProds=Product::with("subCategory.category")->with("status")->get();
        $hotdeals=Product::where('statusId',1)->with("subCategory.category")->with("status")->get();
        $bestdeals=Product::where('statusId',2)->with("subCategory.category")->with("status")->get();
        $featured=Product::where('statusId',3)->with("subCategory.category")->with("status")->get();
        $cats=Category::get();
        $subCats=SubCategory::get();
        $email=$request->session()->get('email');
        //return json_encode($cats);
        $data=['subCats'=>$subCats, 'email'=>$email, 'allProds'=>$allProds, 'hotdeals'=> $hotdeals, 'bestdeals'=>$bestdeals, 'featured'=>$featured, 'cats'=>$cats];
        return view("home")->with($data);
    }
    public function login_page(Request $request)
    {
        $cats=Category::get();
        $subCats=SubCategory::get();
        $data=['subCats'=>$subCats, 'cats'=>$cats];
        return view("login")->with($data);
    }
    public function register_page(Request $request)
    {
        $cats=Category::get();
        $subCats=SubCategory::get();
        $data=['subCats'=>$subCats, 'cats'=>$cats];
        return view("register")->with($data);;
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
        $cats=Category::get();
        $subCats=SubCategory::get();
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
        $data=['subCats'=>$subCats, 'cats'=>$cats, 'upsell'=>$upsell, 'related'=>$related, 'email'=>$email, 'product'=>$product, 'pieces'=>$pieces, 'revs'=>$revs];
        return view("product")->with($data);
    }
    public function view_category(Request $request, $id)
    {
        $cats=Category::get();
        $subCats=SubCategory::get();
        $email=$request->session()->get('email');

        $matchthese=["id"=>$id];
        $category=Category::where($matchthese)->get();
        $category=$category[0];
        $matchthese=["catId"=>$id];
        $subcategory=SubCategory::where($matchthese)->get();
        $allProducts=Product::with("subCategory.category")->get();
        $categoryProds=array();
        foreach($allProducts as $prod)
        {
            if($prod->subCategory->catId ==$id)
                array_push($categoryProds, $prod);
        }
        //return json_encode($categoryProds);
        $data=['email'=>$email, 'subCats'=>$subCats,'categoryProds'=>$categoryProds, 'cats'=>$cats, 'category'=>$category, 'subcategory'=>$subcategory];
        return view("category")->with($data);
    }
    public function view_subcategory(Request $request, $id)
    {
        $cats=Category::get();
        $subCats=SubCategory::get();
        $email=$request->session()->get('email');
        $matchthese=["id"=>$id];
        $subcategory=SubCategory::where($matchthese)->get();
        $allProducts=Product::with("subCategory.category")->get();
        
        $subcategoryProds=array();
        foreach($allProducts as $prod)
        {
            if($prod->subCatId ==$id)
                array_push($subcategoryProds, $prod);
        }
        //return json_encode($subcategoryProds);
        $data=['email'=>$email, 'subCats'=>$subCats,'subcategoryProds'=>$subcategoryProds, 'cats'=>$cats];
        return view("subcategory")->with($data);
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
    public function search(Request $request)
    {
        $search = $request->input('search');
        $finalresult=array();
        $resultCategory=Category::query()->where('name', 'LIKE', "%{$search}%")->get();
        if(count($resultCategory)>=1)
        {
            foreach($resultCategory as $result)
            {
                $matchthese=["catId"=>$result->id];
                $subs=SubCategory::where($matchthese)->get();
                foreach($subs as $sub)
                {
                    $matchthese=["subCatId"=>$sub->id];
                    $prods=Product::where($matchthese)->with("subCategory.category")->get();
                    foreach($prods as $prod)
                    {
                        array_push($finalresult, $prod);
                    }
                    
                }
            }
        }
        else
        {
            $resultSub=SubCategory::query()->where('name', 'LIKE', "%{$search}%")->get();
            if(count($resultSub)>=1)
            {
                foreach($resultSub as $result)
                {
                    $matchthese=["subCatId"=>$result->id];
                    $prods=Product::where($matchthese)->with("subCategory.category")->get();
                    foreach($prods as $prod)
                    {
                        array_push($finalresult, $prod);
                    }
                }
            }
            else
            {
                $resultProd=Product::query()->where('name', 'LIKE', "%{$search}%")->get();
                foreach($resultProd as $prod)
                {
                    array_push($finalresult, $prod);
                }
            }
        }
        //return json_encode($finalresult);

        $cats=Category::get();
        $subCats=SubCategory::get();
        $email=$request->session()->get('email');
        $data=['cats'=>$cats, 'subCats'=>$subCats, 'email'=>$email, 'finalresult'=>$finalresult];
        return view("search_results")->with($data);

    }
    public function add_to_wishlist(Request $request)
    {
        $email=$request->session()->get('email');
        if($email == 'null')
        {
            return response()->json(['status'=>'false']);
        }
        else
        {
            $matchthese=['email'=>$email];
            $cust=Customer::where($matchthese)->get();
            if(count($cust)<1)
                return response()->json(['status'=>'false']);
            else
            {
                $cust=$cust[0];
                $matchthese=['custId'=>$cust->id, 'prodId'=>$request->prod];
                $check=Wishlist::where($matchthese)->get();
                if(count($check)>=1)
                    return response()->json(['status'=>'exist']);
                
                $wish= new Wishlist();
                $wish->prodId=$request->prod;
                $wish->custId=$cust->id;
                $wish->save();
                return response()->json(['status'=>'true']);
            }
        }
    }
    public function add_to_cart(Request $request)
    {
        $email=$request->session()->get('email');
        if($email == 'null')
        {
            return response()->json(['status'=>'false']);
        }
        else
        {
            $matchthese=['email'=>$email];
            $cust=Customer::where($matchthese)->get();
            if(count($cust)<1)
                return response()->json(['status'=>'false']);
            else
            {
                $cust=$cust[0];
                $matchthese=['custId'=>$cust->id, 'prodId'=>$request->prod];
                $check=Cart::where($matchthese)->get();
                if(count($check)>=1)
                    return response()->json(['status'=>'exist']);
                
                $cart= new Cart();
                $cart->prodId=$request->prod;
                $cart->custId=$cust->id;
                $cart->quantity=1;
                $cart->save();
                return response()->json(['status'=>'true']);
            }
        }
    }
    public function remove_wish(Request $request)
    {
        $email=$request->session()->get('email');
        if($email == 'null')
        {
            return response()->json(['status'=>'false']);
        }
        else
        {
            $matchthese=['email'=>$email];
            $cust=Customer::where($matchthese)->get();
            if(count($cust)<1)
                return response()->json(['status'=>'false']);
            else
            {
                $cust=$cust[0];
                $matchthese=['custId'=>$cust->id, 'prodId'=>$request->prod];
                $wishRow=Wishlist::where($matchthese)->get();
                $wishRow=$wishRow[0];
                $wishRow->delete();
                
                return response()->json(['status'=>'true']);
            }
        }
    }
    public function remove_from_cart(Request $request)
    {
        $email=$request->session()->get('email');
        if($email == 'null')
        {
            return response()->json(['status'=>'false']);
        }
        else
        {
            $matchthese=['email'=>$email];
            $cust=Customer::where($matchthese)->get();
            if(count($cust)<1)
                return response()->json(['status'=>'false']);
            else
            {
                $cust=$cust[0];
                $matchthese=['custId'=>$cust->id, 'prodId'=>$request->prod];
                $cartRow=Cart::where($matchthese)->get();
                $cartRow=$cartRow[0];
                $cartRow->delete();
                
                return response()->json(['status'=>'true']);
            }
        }
    }
    public function cart_checkout(Request $request)
    {
        $cats=Category::get();
        $subCats=SubCategory::get();
        $email=$request->session()->get('email');
        if($email == null)
        {
            return redirect("/login");
        }
        else
        {
            $matchthese=['email'=>$email];
            $cust=Customer::where($matchthese)->get();
            $cust=$cust[0];
            $matchthese=['custId'=>$cust->id];
            $carts=Cart::where($matchthese)->with("product")->get();
            /* echo json_encode($carts);
            die(); */
            $data=['cats'=>$cats, 'subCats'=>$subCats, 'email'=>$email, 'carts'=>$carts];
            return view("cart_checkout")->with($data);
        }
    }
    public function wishlist(Request $request)
    {
        $cats=Category::get();
        $subCats=SubCategory::get();
        $email=$request->session()->get('email');
        
        if($email == null)
        {
            return redirect("/login");
        }
        else
        {
            $matchthese=['email'=>$email];
            $cust=Customer::where($matchthese)->get();
            $cust=$cust[0];
            $matchthese=['custId'=>$cust->id];
            $wishes=Wishlist::where($matchthese)->with("product")->get();
            /* echo json_encode($wishes);
            die(); */
            $data=['cats'=>$cats, 'subCats'=>$subCats, 'email'=>$email, 'wishes'=>$wishes];
            return view("wishlist")->with($data);
        }
    }
    public function shoppingCart(Request $request)
    {
        $cats=Category::get();
        $subCats=SubCategory::get();
        $email=$request->session()->get('email');
        
        if($email == null)
        {
            return redirect("/login");
        }
        else
        {
            $matchthese=['email'=>$email];
            $cust=Customer::where($matchthese)->get();
            $cust=$cust[0];
            $matchthese=['custId'=>$cust->id];
            $carts=Cart::where($matchthese)->with("product")->get();
            /* echo json_encode($carts);
            die(); */
            $data=['cats'=>$cats, 'subCats'=>$subCats, 'email'=>$email, 'carts'=>$carts];
            return view("shoppingCart")->with($data);
        }
    }
    public function cart_product_increase(Request $request)
    {
        $email=$request->session()->get('email');
        if($email == 'null')
        {
            return response()->json(['status'=>'false']);
        }
        else
        {
            $matchthese=['email'=>$email];
            $cust=Customer::where($matchthese)->get();
            if(count($cust)<1)
                return response()->json(['status'=>'false']);
            else
            {
                $cust=$cust[0];
                $matchthese=['custId'=>$cust->id, 'prodId'=>$request->prod];
                $cartRow=Cart::where($matchthese)->get();
                $cartRow=$cartRow[0];
                $cartRow->quantity+=1;
                $cartRow->save();
                return response()->json(['status'=>'true']);
            }
        }
    }
    public function make_payment(Request $request)
    {
        $cats=Category::get();
        $subCats=SubCategory::get();
        $email=$request->session()->get('email');

        $ord_id=$this->generateRandomString(5);
        $order= new Order();
        $order->uid=$ord_id;
        $order->first_name=$request->firstname;
        $order->last_name=$request->lastname;
        $order->email=$request->email;
        $order->phone=$request->telephone;
        $order->address_line1=$request->address_1;
        $order->address_line2=$request->address_2;
        $order->city=$request->city;
        $order->zipcode=$request->postcode;
        $order->voucher_code=$request->voucher;
        $order->comment=$request->comments;
        $order->gift_packing= $request->gift==1? "Yes": "No";
        $order->gift_packing_charge = $request->gift==1? "10.00" : "0.0";
        $matchthese=['email'=>$email];
        $cust=Customer::where($matchthese)->get();
        $cust=$cust[0];
        $matchthese=['custId'=>$cust->id];
        $carts=Cart::where($matchthese)->with("product")->get();
        $details="";
        $total=0.0;
        foreach($carts as $cart)
        {
            $total+=$cart->quantity*$cart->product->price;
            $details=$details."\r\n Name: ".$cart->product->name." (Product Id: ".$cart->prodId." ) Quantity: ".$cart->quantity;
        }
        $order->product_details=$details;
        $order->order_total=$total;
        $order->subtotal=$total+$order->gift_packing_charge;
        $order->payment_status="Not Successful";
        $order->customer_id=$cust->id;
        $order->delivery_charge="0.0";
        $order->save();
        
        $data=['cats'=>$cats, 'subCats'=>$subCats, 'email'=>$email, 'order'=>$order];
        return view("final_checkout")->with($data);
        
        return json_encode($order);
    }
    public function generateRandomString($length) 
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) 
        {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        $randomString="M_ORD".$randomString;
        return $randomString;
    }

}
