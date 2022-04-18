<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fish_model;

class fish_cntrlr extends Controller
{
    
    public function __construct()
    {
    	$this->obj=new fish_model();
    }
    public function index()
    {
      $res['data']=$this->obj->view_category1('category_tbl');

      $res1['data1']=$this->obj->view_product1('product_tbl');
      
    	return view('USER.index',$res,$res1);

    }
    public function update_product(Request $req,$pid)
    {
      request()->validate([
                            'price'=>'required',
                            'avail_stock1'=>'required',
                            'avail_stock2'=>'required'
                          ]);
      $price=$req->input('price');
      $avail_stock1=$req->input('avail_stock1');
      $avail_stock2=$req->input('avail_stock2');
      $data['price']=$price;
      $data['avail_stock1']=$avail_stock1;
      $data['avail_stock2']=$avail_stock2;
      $data['tot_stock1']=$avail_stock1;
      $data['tot_stock2']=$avail_stock2;
      $this->obj->update_product('product_tbl',$pid,$data);
      return redirect('/view_product');
    }
    public function delete_product($pid)
    {
      $this->obj->delete_product('product_tbl',$pid);
      return redirect('/view_product');
    }
    public function about()
    {
      $res['data']=$this->obj->view_data('content_tbl');
    	return view('USER.about',$res);
    }
    public function cart()
    {
    	return view('USER.cart');
    }
    public function update_product_admin($pid)
    { 
      $res['data']=$this->obj->view_a_product('product_tbl',$pid);
      return view('ADMIN.update_product_admin',$res);

    }
    public function checkout(Request $req,$pid)
    {
      if(session()->has('ses_id'))
      {
      $req->validate([
                      'weight_needed1'=>'required',
                      'weight_needed2'=>'required',
                    ]);
      $sid=session('ses_id');
      $weight_needed1=$req->input('weight_needed1');
      $avail_stock1=$req->input('avail_stock1');
      $avail_stock2=$req->input('avail_stock2');
      if($weight_needed1>$avail_stock1)
      {
        $message="OOPs..we have only  $avail_stock1 $avail_stock2 left";
         return redirect("/view_cart")->with('message',$message);
      }
      else
      {
      $data['pid']=$pid;
      $data['sid']=$sid;
      $data['weight_needed1']=$req->input('weight_needed1');
      $data['weight_needed2']=$req->input('weight_needed2');
      $data['amt_to_pay']=$req->input('tot_amt');
      $this->obj->insert_data('cart_tbl',$data);
      return redirect("/view_cart");
    }
    }
    else
    {
     return redirect('/login')->with('message','Need to login first!!'); 
    }
    }
    public function view_cart()
    { 
      if(session()->has('ses_id'))
      {
      $sid=session('ses_id');
      $res['data']=$this->obj->view_cart('cart_tbl','product_tbl',$sid);
      return view('USER.cart',$res);
      }
      else
      {
        return redirect('/login')->with('message','Need to login first!!');
      }
    }
    public function recipes_user()
    {
      $res['data']=$this->obj->view_data('recipes_tbl');
    	return view('USER.recipes_user',$res);
    }
    public function product_user($cid)
    {
      $res['data']=$this->obj->view_product_user('product_tbl','category_tbl',$cid);
    	return view('USER.product_user',$res);
    }
    public function myaccount()
    {
      if(session()->has('ses_id'))
      {
    	return view('USER.my-account');
      }
      else
      {
        return redirect('/login')->with('message','Need to login first!!');
      }
    }
    public function shopdetail($pid)
    {
      $res['data']=$this->obj->view_a_product('product_tbl',$pid);
    	return view('USER.shop-detail',$res);
    }
    public function shop()
    {
      $res['data']=$this->obj->view_product2('category_tbl','product_tbl');
      $res1['data1']=$this->obj->view_data('category_tbl');
      return view('USER.shop',$res,$res1);
    }
   
    public function contact_us()
    {
      if(session()->has('ses_id'))
      {
    	return view('USER.contact_us');
     }
     else
     {
      return redirect('/login')->with('message','Need to login first!!');
     }
    }
    public function index_admin()
    {

      $count_ordr=$this->obj->count_order('cart_tbl');
      $count_msg=$this->obj->count_message('message');
      $count_usr=$this->obj->count_customer('login_tbl');
      $data=[
             'count_order'=>$count_ordr,
             'count_message'=>$count_msg,
             'count_customer'=>$count_usr
            ];
        return view('ADMIN.index')->with($data);
    }

    public function login()
    {

        return view('login');
    }

    public function signup()
    {
        return view('signup');
    }


    public function signup_insrt(Request $req)
    {
        request()->validate([
                         'fname'=>'required',
                         'lname'=>'required',
                         'mob_no'=>'required',
                         'h_name'=>'required',
                         'l_mark'=>'required',
                         'city'=>'required',
                         'state'=>'required',
                         'email_id'=>'required|email|unique:login_tbl',
                         'pwd'=>'required|min:4|', 
                         'password_confirmation'=>'required|same:pwd'
                        ]);
      $data['fname']=$req->input('fname');
      $data['lname']=$req->input('lname');
      $data['mob_no']=$req->input('mob_no');
     
      $data['h_name']=$req->input('h_name');
      $data['l_mark']=$req->input('l_mark');
      $data['city']=$req->input('city');
      $data['state']=$req->input('state');
     
       $sid=$this->obj->signup_insrt('signup_tbl',$data);
        $data1['email_id']=$req->input('email_id');
         $data1['pwd']=$req->input('pwd');
         $data1['sid']=$sid;
         $data1['user']=1;
         $this->obj->insert_data('login_tbl',$data1);
         return redirect('/login');
    }
    public function check_login(Request $req)
    {
      $req->validate([
                       'email_id'=>'required',
                       'pwd'=>'required',
                      ]);
      $email_id=$req->input('email_id');
      $pwd=$req->input('pwd');
      $res=$this->obj->check_login('login_tbl',$email_id,$pwd);
      if($res="")
      {
        if($res->user==1)
        {
         /* $req->session()->put(array('ses_id'=>$res->sid));
          return redirect('/');*/
          echo "User 1";
        }
        else if($res->user==0)
        {

         /* return redirect('/index_admin');*/
         echo "USer Admin";
        }
       }
       else
        {
          /*return redirect('/login')->with('message','**INCORRECT USER NAME / PASSWORD');*/
          echo "not logged in";
        }
      }

      public function logout(Request $req)
      {
        $req->session()->forget('ses_id');
        return redirect('/');
      }

      public function category()
      {
        return view('ADMIN.category');
      }
      public function product()
      {
        $res['data']=$this->obj->view_data("category_tbl");
        return view('ADMIN.product',$res);
      }
      public function recipes()
      {
        return view('ADMIN.recipes');
      }
      public function customer_allpurchase()
      {
        $res['data']=$this->obj->customer_allpurchase('cart_tbl','product_tbl','order_tbl');
        return view('ADMIN.customer_allpurchase',$res);
      }
       public function template_content()
      {
        return view('ADMIN.template_content');
      }
      
      
       public function insrt_category(Request $req)
      {
        $req->validate([
                         'category'=>'required|unique:category_tbl',
                         'image1'=>'required',
                       ]);
        $files=$req->file('image1');
        $filename=$files->getClientOriginalName();
        $files->move(public_path().'/upload/image/',$filename);
        $data['category']=$req->input('category');
        $data['image1']=$filename;
        $this->obj->insert_data('category_tbl',$data);
        return redirect('/view_category');
      }
      public function view_category()
      {
        $res['data']=$this->obj->view_category('category_tbl');
        print_r($res);
        // return view('ADMIN.view_category',$res);
      }
      public function view_product()
      {
        $res['data']=$this->obj->view_product('product_tbl','category_tbl');
        return view('ADMIN.view_product',$res);
      }
      public function insrt_product(Request $req)
      {
        $req->validate([
                         'image2'=>'required',
                         'p_name'=>'required',
                         'price'=>'required',
                         'tot_stock1'=>'required',
                         'tot_stock2'=>'required',
                         'avail_stock1'=>'required',
                         'avail_stock2'=>'required',
                         'category'=>'required',
                       ]);
        $files=$req->file('image2');
        $filename=$files->getClientOriginalName();
        $files->move(public_path().'/upload/image/',$filename);
        $data['image2']=$filename;
        $data['p_name']=$req->input('p_name');
        $data['price']=$req->input('price');
         $data['tot_stock1']=$req->input('tot_stock1');
        $data['tot_stock2']=$req->input('tot_stock2');
        $data['avail_stock1']=$req->input('avail_stock1');
        $data['avail_stock2']=$req->input('avail_stock2');
        $data['cid']=$req->input('category');
        $this->obj->insert_data('product_tbl',$data);
        return redirect('/view_product');
      }
      public function view_recipes()
      {
        $res['data']=$this->obj->view_recipes('recipes_tbl');
        return view('ADMIN.view_recipes',$res);
      }
      public function insrt_recipes(Request $req)
      {
        $req->validate([
                        'r_name'=>'required',
                        'image3'=>'required',
                        'ingredients'=>'required',
                        'method'=>'required',
                       ]);
        $files=$req->file('image3');

        $filename=$files->getClientOriginalName();

        $files->move(public_path().'/upload/image/',$filename);
        $data['r_name']=$req->input('r_name');
        $data['image3']=$filename;
        $data['ingredients']=$req->input('ingredients');
        $data['method']=$req->input('method');
        $this->obj->insert_data('recipes_tbl',$data);
        return redirect('/view_recipes');
      }
      public function insrt_content(Request $req)
      {
        $req->validate([
                         'about_us'=>'required',
                         'image4'=>'required',
                         'team_detail1'=>'required',
                         'image5'=>'required',
                         'team_detail2'=>'required',
                         'image6'=>'required',
                         'team_detail3'=>'required',
                         'image7'=>'required',
                       ]);
        $files=$req->file('image4');
        $filename=$files->getClientOriginalName();
        $files->move(public_path().'/upload/image/',$filename);
        $files1=$req->file('image5');
        $filename1=$files1->getClientOriginalName();
        $files1->move(public_path().'/upload/image/',$filename1);
        $files2=$req->file('image6');
        $filename2=$files2->getClientOriginalName();
        $files2->move(public_path().'/upload/image/',$filename2);
        $files3=$req->file('image7');
        $filename3=$files3->getClientOriginalName();
        $files3->move(public_path().'/upload/image/',$filename3);
        $data['about_us']=$req->input('about_us');
        $data['image4']=$filename;
        $data['team_detail1']=$req->input('team_detail1');
        $data['image5']=$filename1;
        $data['team_detail2']=$req->input('team_detail2');
        $data['image6']=$filename2;
        $data['team_detail3']=$req->input('team_detail3');
        $data['image7']=$filename3;
        $this->obj->insert_data('content_tbl',$data);
        return redirect('/index_admin');
      }
      public function view_customer()
      {
        $res['data']=$this->obj->view_customer('signup_tbl','login_tbl');
        return view('ADMIN.view_customer',$res);
      }
      public function confirm_user($lid)
      {
        $data['status']=1;
        $this->obj->confirm_user('login_tbl',$data,$lid);
        return redirect('/view_customer');
      }
      public function buy_now($pid)
      {
        $res['data']=$this->obj->view_a_product('product_tbl',$pid);
        return view('USER.buy_now',$res);
      }
      public function add_cart(Request $req,$pid)
      {
        $data['pid']=$pid;
        $data['sid']=session('ses_id');
        $data['status']=0;
        $data['weight_needed1']=$req->input('weight_needed1');
        $data['weight_needed2']=$req->input('weight_needed2');
        $this->obj->insert_data('pdct_purchase_tbl',$data);
        return view('USER.add_cart');
      }
      public function insrt_complaint(Request $req)
      {
        $req->validate([
                        'm_name'=>'required',
                        'subject'=>'required',
                        'message'=>'required'
                       ]);
        $data['m_name']=$req->input('m_name');
        $data['subject']=$req->input('subject');
        $data['message']=$req->input('message');
        $data['sid']=session('ses_id');
        $this->obj->insert_data('message',$data);
        $success='Successfully Send';
        return redirect('/contact_us')->with('success',$success);
      }
      public function customer_message()
      {
        $res['data']=$this->obj->view_message('message','signup_tbl');
        return view('ADMIN.customer_message',$res);
      }
      public function view_message($mid)
      {
        $res['data']=$this->obj->view_message1('message','signup_tbl',$mid);
        return view('ADMIN.view_message',$res);

      }
       public function insrt_message(Request $req,$mid)
       {
        $req->validate([
                         'reply'=>'required',
                       ]);
        $data['reply']=$req->input('reply');
        $data['status']=1;
        $this->obj->update_message('message',$mid,$data);
        return redirect('/customer_message');
      }
      public function view_reply()
      {
        if(session()->has('ses_id'))
        {
        $sid=session('ses_id');
        $res['data']=$this->obj->view_reply('message',$sid);
        return view('USER.view_reply',$res);
        }
        else
        {
          return redirect('/login')->with('message','**INCORRECT USER NAME / PASSWORD');
        }
      }
      public function sample1()
      {
        $res['data']=$this->obj->view_product2('category_tbl','product_tbl');
       
      //return view('USER.shop',$res,$res1);
        return view('USER.sample1',$res);
      }
      public function select_amount($number1)
      {
        print_r($number1);
        exit();
        return view('USER.sample1');
      }
      public function sample2(Request $req)
      {
        $add=$req->input('add');
        print_r($add);
        exit();
        $number2=$req->input('number2');
        $tot_amt=$req->input('tot_amt');
      }
      public function delete_cart($cart_id)
      {
        $this->obj->delete_cart('cart_tbl',$cart_id);
        return redirect('/view_cart');
      }
      public function insert_order(Request $req)
      {
        $sid=session('ses_id');
        $data['sid']=$sid;
        $weight_needed1=$req->input('weight_needed1');
        $avail_stock1=$req->input('avail_stock1');
        $pid=$req->input('pid');
        $data['grand_amt']=$req->input('grand_amt');
        $this->obj->insert_data('order_tbl',$data);
        $data1['status']=1;
        $this->obj->update_order('cart_tbl',$data1,$sid);
        $data2['avail_stock1']=$avail_stock1-$weight_needed1;
        $this->obj->update_product('product_tbl',$pid,$data2);
        //dcrease weight needed from available quantity and update available quantity here
        return redirect('/view_cart')->with('message','Your Order is confirmed');
      }
      public function insert_orders(Request $req)
      {
        if(session()->has('ses_id'))
        {
          $req->validate([
                      'weight_needed1'=>'required',
                      'weight_needed2'=>'required',
                    ]);
        $sid=session('ses_id');
        $pid=$req->input('pid');
        $weight_needed1=$req->input('weight_needed1');
        $avail_stock1=$req->input('avail_stock1');
      
        $data['sid']=$sid; 
        $data['weight_needed1']=$req->input('weight_needed1');
        $data['weight_needed2']=$req->input('weight_needed2');
        $data['amt_to_pay']=$req->input('tot_amt');
        $data['pid']=$pid;
        $data['status']=1;
        
        $data1['sid']=$sid;
        $data1['grand_amt']=$req->input('tot_amt');
       $this->obj->insert_data('cart_tbl',$data);
       $this->obj->insert_data('order_tbl',$data1);
       $data3['avail_stock1']=$avail_stock1-$weight_needed1;
        $this->obj->update_product('product_tbl',$pid,$data3);
       return redirect('/view_cart')->with('message','Your Order is confirmed');
     }
     else
      {
         return redirect('/login')->with('message','Enter with new password');
      }
      }
      public function view_customer_cart($sid)
      {
        $res['data']=$this->obj->view_customer_cart('cart_tbl','product_tbl',$sid);
        return view('ADMIN.view_customer_cart',$res);
      }
      public function admin_action_dispatched($sid)
      {
        $data['order_status']=1;
        $this->obj->admin_action('order_tbl',$sid,$data);
        return redirect('/customer_allpurchase');
      }
      public function admin_action_delivered($sid)
      {
        $data['order_status']=2;
        $this->obj->admin_action('order_tbl',$sid,$data);
        return redirect('/customer_allpurchase');
      }
      public function get_category()
      { 
        $res=$this->obj->view_data('category_tbl');

        foreach($res as $value)
        {
        ?>
          <a href="#" value="<?php echo $value->cid;?>" id="text1"><?php echo $value->category;?></a>
         
        <?php
        }
        
      }
      public function get_product($cid)
      {
        $res['data']=$this->obj->get_product('product_tbl','category_tbl',$cid);
         $res1['data1']=$this->obj->view_data('category_tbl');
      return view('USER.shop',$res,$res1);

        /*foreach($res1 as $value1)
        {
        ?>
        <a href="#"><?php echo $value1->p_name?></a>
        <?php
          }*/
        
      }
      public function track_order_user()
      {
        $sid=session('ses_id');
        $res['data']=$this->obj->track_order_user('product_tbl','cart_tbl','order_tbl',$sid);
        return view('USER.track_order_user',$res);
      }
      public function change_login()
      {
        $sid=session('ses_id');
        $res['data']=$this->obj->get_user('login_tbl',$sid);
        return view('USER.change_login',$res);
      }
      public function edit_login(Request $req)
      {
        $sid=session('ses_id');
        request()->validate([
                             'current_pwd'=>'required',
                             'new_pwd'=>'required|min:4',
                             'confirm_pwd'=>'required|same:new_pwd'
                           ]);
        $email_id=$req->input('email_id');
        $pwd=$req->input('current_pwd');
        $res=$this->obj->check_login('login_tbl',$email_id,$pwd);
        if(isset($res))
        {
          $data1['pwd']=$req->input('new_pwd');
          $this->obj->update_pwd('login_tbl',$data1,$sid);
          $req->session()->forget('ses_id');
          return redirect('/login')->with('message','Enter with new password');
        }
      }
      public function view_profile_user()
      {
        $sid=session('ses_id');
          $res['data']=$this->obj->get_address('signup_tbl',$sid);
          return view('USER.view_profile_user',$res);
      }
        public function update_address()
        {
          $sid=session('ses_id');
          $res['data']=$this->obj->get_address('signup_tbl',$sid);
          return view('USER.update_address',$res);
        }
        public function edit_address(Request $req)
        {
          $sid=session('ses_id');
          request()->validate([
                         'mob_no'=>'required',
                         'h_name'=>'required',
                         'l_mark'=>'required',
                         'city'=>'required',
                         'state'=>'required',
                        ]);
      $data['mob_no']=$req->input('mob_no');
      $data['h_name']=$req->input('h_name');
      $data['l_mark']=$req->input('l_mark');
      $data['city']=$req->input('city');
      $data['state']=$req->input('state');
      $this->obj->update_address('signup_tbl',$data,$sid);
      $res['data']=$this->obj->get_address('signup_tbl',$sid);
      return view('USER.view_profile_user',$res);
        }
      

}
