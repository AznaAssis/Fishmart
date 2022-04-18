   @extends('USER.header')
   @section('body')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Services</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Gallery  -->
    <form method="post" action="/add_cart">
        @csrf
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Our Products</h1>
                        <p>Select from our wide variety range of fishes.....</p>
                    </div>
                </div>
            </div>
            <div class="row">
                
            @foreach($data as $value)
            <div class="col-sm-3">
              <h1 style="color: red;">{{$value->category}}</h1>
              <img src="{{asset('upload/image/'.$value->image2)}}" style="height: 200px;width:200px;"> 
              <h3 style="color: green;">{{$value->p_name}}</h3>
              <h3>{{$value->price}} &nbsp;Rupees</h3>
             @if($value->avail_stock1> 0 )
              <h3 style="color: red;">Available</h3>
              <!--<h3><b><label>Required Weight</label></b></h3>
              <div class="form-group">
                <input type="text" name="weight_needed1"  class="form-control" placeholder="Weight"> <input type="text" name="weight_needed2" placeholder="kg/gm" class="form-control">
              </div>-->
              <a href="/shop-detail/{{$value->pid}}" class="btn btn-primary">View Details </a>
              <!--<a href="/add_cart/{{$value->pid}}" class="btn btn-primary">ADD TO CART</a>-->
            @else
              <h3 style="color: red;">Not Available</h3>
              <input type="submit" name="submit" value="BUY NOW"disabled="disabled" class="btn btn-danger">
              <input type="submit" name="submit" value="ADD TO CART"disabled="disabled" class="btn btn-primary">
              @endif
          </div>
              @endforeach
              </div>

             
        </div>
    </div>
    </form>
   
    <!-- End Gallery  -->

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