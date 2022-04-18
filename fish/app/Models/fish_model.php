<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class fish_model extends Model
{
    use HasFactory;
    public function signup_insrt($table,$data)
    {
    	return DB::table($table)->InsertGetId($data);
    }
    public function insert_data($table,$data)
    {
    	DB::table($table)->insert($data);
    }
    public function check_login($table,$data1,$data2)
    {
    	return DB::table($table)->where('email_id',$data1)->where('pwd',$data2)->first();
    }
    public function view_category($table)
    {
        return DB::table($table)->orderBy('cid','desc')->simplepaginate(2);
    }
    public function view_category1($table)
    {
        return DB::table($table)->orderBy('cid','desc')->get();
    }
    public function view_data($table)
    {
        return DB::table($table)->get();
    }
    public function view_product2($table1,$table2)
    {
        return DB::table($table1)->join($table2,'category_tbl.cid','=','product_tbl.cid')->orderBy('product_tbl.pid','desc')->get();
    }
    
   
     public function view_product($table1,$table2)
    {
        return DB::table($table1)->join($table2,'category_tbl.cid','=','product_tbl.cid')->orderBy('product_tbl.pid','desc')->simplepaginate(2);
    }
     public function get_product($table1,$table2,$cid)
    {
        return DB::table($table1)->join($table2,'category_tbl.cid','=','product_tbl.cid')->where('product_tbl.cid','=',$cid)->get();
    }

     public function view_product1($table1)
    {
        return DB::table($table1)->get();
    }
     public function view_product_user($table1,$table2,$cid)
    {
        return DB::table($table1)->join($table2,'category_tbl.cid','=','product_tbl.cid')->where('product_tbl.cid','=',$cid)->get();
    }
    public function view_recipes($table)
    {
       return DB::table($table)->orderBy('rid','desc')->simplepaginate(2); 
    }
    public function view_customer($table1,$table2)
    {
        return DB::table($table1)->join($table2,'signup_tbl.sid','=','login_tbl.sid')->orderBy('signup_tbl.sid','desc')->simplepaginate(4);
    }
    public function confirm_user($table,$data,$lid)
    {
      DB::table($table)->where('lid',$lid)->update($data);  
    }
    public function view_a_product($table,$pid)
    {
        return DB::table($table)->where('pid',$pid)->get();
    }
    public function view_a_product1($table,$pid)
    {
        return DB::table($table)->where('pid',$pid)->get('price');
    }
    public function view_message($table1,$table2)
    {
        return DB::table($table1)->join($table2,'signup_tbl.sid','=','message.sid')->simplepaginate();
    }
    public function view_message1($table1,$table2,$mid)
    {
        return DB::table($table1)->join($table2,'signup_tbl.sid','=','message.sid')->where('message.mid','=',$mid)->get();
    }
    public function update_message($table,$mid,$data)
    {
     DB::table($table)->where('mid',$mid)->update($data);
    }
    public function view_reply($table,$sid)
    {
        return DB::table($table)->where('sid',$sid)->get();
    }
    public function view_cart($table1,$table2,$sid)
    {
        return DB::table($table1)->join($table2,'cart_tbl.pid','=','product_tbl.pid')->where('sid',$sid)->where('cart_tbl.status','=',0)->get();
    }
    public function delete_cart($table,$cart_id)
    {
        DB::table($table)->where('cart_id',$cart_id)->delete();
    }
    public function update_order($table,$data,$sid)
    {
        DB::table($table)->where('sid',$sid)->update($data);
    }
    public function view_customer_cart($table1,$table2,$sid)
    {
        return DB::table($table1)->join($table2,'product_tbl.pid','=','cart_tbl.pid')->where('cart_tbl.sid','=',$sid)->where('cart_tbl.status','=','1')->get();
    }
    public function customer_allpurchase($table1,$table2,$table3)
    {
        return DB::table($table1)->join($table2,'product_tbl.pid','=','cart_tbl.pid')->join($table3,'order_tbl.sid','=','cart_tbl.sid')->where('cart_tbl.status','=','1')->get();
    }
    public function admin_action($table,$sid,$data)
    {
        DB::table($table)->where('sid',$sid)->update($data);
    }
    public function count_order($table)
    {
        return DB::table($table)->where('status','=','1')->count();
    }
    public function count_message($table)
    {
        return DB::table($table)->where('status','=','0')->count();
    }
    public function count_customer($table)
    {
        return DB::table($table)->where('status','=',0)->where('user','=',1)->count();
    }
    public function update_product($table,$pid,$data)
    {
       DB::table($table)->where('pid','=',$pid)->update($data);
    }
    public function delete_product($table,$pid)
    {
        DB::table($table)->where('pid',$pid)->delete();
    }
    public function track_order_user($table1,$table2,$table3,$sid)
    {
        return DB::table($table1)->join($table2,'product_tbl.pid','=','cart_tbl.pid')->join($table3,'cart_tbl.sid','=','order_tbl.sid')->where('cart_tbl.sid',$sid)->get();
    }
    public function get_user($table,$sid)
    {
        return DB::table($table)->where('sid',$sid)->get();
    }
    public function update_pwd($table,$data,$sid)
    {
       DB::table($table)->where('sid',$sid)->update($data);
    }
    public function get_address($table,$sid)
    {
        return DB::table($table)->where('sid',$sid)->get();
    }
    public function update_address($table,$data,$sid)
    {
        DB::table($table)->where('sid',$sid)->update($data);
    }

}
