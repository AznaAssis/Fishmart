
 @extends('USER.header')
 @section('body')
    <!-- Start All Title Box -->
    
    <form action="/insert_order" method="post">
        @csrf
        

    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                                @if(session()->has('message'))
                                 <div class="alert alert-success" style="color: red;font-size:20px;font-family: serif;">
                                    {{session()->get('message')}}

                                </div>
                                @endif
                            </thead>
                            <tbody>
                                @php
                                $tot=0;
                                @endphp
                                @foreach($data as $value)
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href="#">
									<img class="img-fluid" src="{{asset('/upload/image/'.$value->image2)}}" alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href="#">
                                            <input type="text" name="p_name" value=" {{$value->p_name}}" hidden="hidden">
									 {{$value->p_name}}
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <input type="text" name="price" value="{{$value->price}}" hidden="hidden">
                                        <p>{{$value->price}}/kg</p>
                                    </td>
                                    
                                    <input type="text" name="weight_needed1" value="{{$value->weight_needed1}}" hidden="hidden">
                                    <input type="text" name="weight_needed2" value="{{$value->weight_needed2}}" hidden="hidden">
                                    <input type="text" name="avail_stock1" value="{{$value->avail_stock1}}" hidden="hidden">
                                    <input type="text" name="pid" value="{{$value->pid}}" hidden="hidden">
                                     
                                    <td class="quantity-box"><p>{{$value->weight_needed1}}{{$value->weight_needed2}}</p></td>
                                    <td class="total-pr">
                                        <input type="text" name="grand_amt" value="{{$value->amt_to_pay}}" hidden="hidden">
                                        <p>{{$value->amt_to_pay}}</p>
                                    </td>
                                    <td class="remove-pr">
                                        <a href="/delete_cart/{{$value->cart_id}}" id="a_link">
									<i class="fas fa-times"></i>
								</a>
                                    </td>
                                    <td>
                                        <input type="text" name="tot_amt"  id="tot_amt" value="{{$tot=$tot+$value->amt_to_pay}}" hidden="hidden">

                                    </td>
                                    
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3>Order summary</h3>
                        
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"> <input type="text" name="grand_amt1" value="{{$tot}}" disabled="disabled"></div>
                        </div>
                        <div class="ml-auto h5"> <input type="text" name="grand_amt" value="{{$tot}}" hidden="hidden"></div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><input type="submit" name="submit" value="checkout" class="ml-auto btn btn-danger"></div>
            </div>

        </div>
    </div>
   </form>
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