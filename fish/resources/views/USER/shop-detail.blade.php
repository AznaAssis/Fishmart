@extends('USER.header')
@section('body')


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop Detail</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Detail </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
     @foreach($data as $value)
    <form method="post" action="/checkout/{{$value->pid}}">
    @csrf  
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
               
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="{{asset('/upload/image/'.$value->image2)}}" alt=""> </div>
                        </div>
                       
                        
                    </div>
                </div>
                
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <input type="text" name="avail_stock1" value="{{$value->avail_stock1}}" hidden="hidden">
                        <input type="text" name="avail_stock2" value="{{$value->avail_stock2}}" hidden="hidden">
                        @if(session()->has('message'))
                        <div class="alert alert-success" style="color: red;font-size:20px;font-family: serif;">
                         {{session()->get('message')}}
                         </div>
                        @endif
                        <h2>{{$value->p_name}}</h2>
                        <h5> {{$value->price}}&nbsp;Ruppes</h5>
                        <p class="available-stock"><span> {{$value->avail_stock1}}{{$value->avail_stock2}} /
                        {{$value->tot_stock1-$value->avail_stock1}}sold</span><p>
						
						<ul>
							<li>
								<div class="form-group">
									<label class="control-label">Quantity</label>
									<input type="number" name="weight_needed1" placeholder="weight" class="form-control" min=1  id="weight_needed1" value="{{old('weight_needed1')}}">
                                    @error("weight_needed1")
                                    <p style="color: red;font-size: 15px;font-family: serif;">
                                     {{$errors->first("weight_needed1","**REQUIRED WEIGHT")}}
                                 </p>
                                    @enderror
                                    <input type="text" name="weight_needed2" placeholder="kg/gm" class="form-control" id="weight_needed2" value="{{old('weight_needed2')}}">
                                    @error("weight_needed2")
                                     <p style="color: red;font-size: 15px;font-family: serif;">{{$errors->first("weight_needed2","**REQUIRED KG/GM")}}
                                     </p>
                                    @enderror
                               <input type="text" name="price" value="{{$value->price}}" id="price" hidden="hidden">
                               <input type="text" name="tot_amt" id="tot_amt"> 
                               <input type="text" name="pid" value="{{$value->pid}}" hidden="hidden" id="pid"> 
								</div>
                                <div class="price-box-bar">
                            
                                   <script type="text/javascript">
        $(document).ready(function(){
           $('#weight_needed1').on('change',function()
           { 
              var weight_needed1=parseInt($('#weight_needed1').val());
              var price=parseInt($('#price').val());
              //alert(price);
              var tot_amt=weight_needed1 * price;
              $('#tot_amt').val(tot_amt);
              $('#tot_amt').css("background-color","pink");
              $('#tot_amt').css("color","red");
           });
        });
    </script>
					
                    <div class="cart-and-bay-btn">
                                <input type="submit" name="submit" value="Add To Cart" class="btn btn-primary">
                                 @if(session()->has('message'))
                                 <div class="alert alert-success" style="color: red;font-size:20px;font-family: serif;">
                                    {{session()->get('message')}}

                                </div>
                                @endif
                            </form>
                                 <button type="button" id="buy_now" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Buy Now</button>
modal body
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">
 
    <!-- Modal content-->
   <div class="modal-content">
      <div class="modal-header"  >
         <h4 class="modal-title">{{$value->p_name}}</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
      <form method="post" class="frm" action="/insert_orders">
                                    @csrf
                                    <input type="text" name="avail_stock1" value="{{$value->avail_stock1}}" hidden="hidden">
                        <input type="text" name="avail_stock2" value="{{$value->avail_stock2}}" hidden="hidden">
                                 <div class="form-group">
                                    <label class="control-label">Quantity</label>
                                    <input type="number" name="weight_needed1" placeholder="weight" class="form-control" min=1  id="quantity1">
                                    @error("weight_needed1")
                                    <p style="color: red;font-size: 15px;font-family: serif;">
                                     {{$errors->first("weight_needed1","**REQUIRED WEIGHT")}}
                                 </p>
                                    @enderror
                                    <input type="text" name="weight_needed2" placeholder="kg/gm" class="form-control" id="quantity2">
                                    @error("weight_needed2")
                                     <p style="color: red;font-size: 15px;font-family: serif;">{{$errors->first("weight_needed2","**REQUIRED KG/GM")}}
                                     </p>
                                    @enderror
                               <input type="text" name="tot_amt" id="total_amount"> 
                               <input type="text" name="pid" value="{{$value->pid}}" id="pid" hidden="hidden"> 
                                </div>
                             
                                   <script type="text/javascript">
        $(document).ready(function(){
           $('#buy_now').click(function()
           { 
             var weight_needed1=parseInt($('#weight_needed1').val());
             var weight_needed2=($('#weight_needed2').val());
             var tot_amt=$('#tot_amt').val();
             $('#quantity1').val(weight_needed1);
             $('#quantity2').val(weight_needed2);
             $('#total_amount').val(tot_amt);
              });
           });
      
    </script>
                           </div>
                      <div class="modal-footer">
                   <input type="submit" class="btn btn-danger" value="Buy Now">
                   </form>
                      </div>
   </div>
   
  </div>
</div>
</div>
                                @endforeach
                                <!-- <script type="text/javascript">
                                    $(document).ready(function(){
                                        $('#buy_now').click(function(){
                                          var weight_needed1=parseInt($('#weight_needed1').val());
                                             var price=parseInt($('#price').val());
                                             var pid=$('#pid').val();
                                           alert(pid);
                                            var tot_amt=weight_needed1 * price;
                                           $('#tot_amt').val(tot_amt);
                                           alert(weight_needed1);
                                           
                                            alert(tot_amt);
                                            $.ajax({
                                                   type:'get',
                                                   url:'/insert_orders/'+pid,
                                                   data:{weight_needed1:weight_needed1,weight_needed2:weight_needed2,tot_amt:tot_amt},
                                                   success:function(result)
                                                   {
                                                    alert(result);
                                                    alert("Your Order is placed");
                                                   }
                                           });
                                        });

                                    });
                                </script> -->
                                
                            </div>
                            </div>		</li>
						</ul>
						</div>
                    </div>
                </div>
            </div>
			

        </div>
    </div>  

 
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-01.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-02.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-03.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-04.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-06.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-07.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-08.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-09.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ins-inner-box">
                    <img src="images/instagram-img-05.jpg" alt="" />
                    <div class="hov-in">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Instagram Feed  -->


    @endsection