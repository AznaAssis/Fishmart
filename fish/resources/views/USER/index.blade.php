
    @extends('USER.header')<!--including header page -->
    @section('body')<!-- content inside section will be displayed in @yeild-->
    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <a href=""><img src="images/banner1.jpg" alt=""></a>
                
            </li>
            <li class="text-center">
              <a href="">  <img src="images/banner2.jpg" alt=""></a>
                
            </li>
            <li class="text-center">
               <a href=""> <img src="images/banner3.jpg" alt=""></a>
                
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
           <div class="latest-blog">
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                 <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Categories</h1>
                    </div>
                </div>
                @foreach($data as $value)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="{{asset('/upload/image/'.$value->image1)}}" alt="" style="height:300px;width: 300px;" />
                        <a class="btn hvr-hover" href="/product_user/{{$value->cid}}">{{$value->category}}</a>
                    </div>
                </div>
                @endforeach
               
            </div>
        </div>
    </div>
</div>
    <!-- End Categories -->
	
	<!-- <div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/add-img-01.jpg" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/add-img-02.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
 -->
    <!-- Start Products  -->
     <div class="latest-blog">
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Products</h1>
                    </div>
                </div>
            </div>
            <div class="row special-list">
                 @foreach($data1 as $value1) 
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            
                           <a href="/shop-detail/{{$value1->pid}}"> <img src="{{asset('upload/image/'.$value1->image2)}}" class="img-fluid" alt="Image" style="height: 300px;width: 300px;"></a>
                            
                        </div>
                        <div class="why-text">
                         <h4> {{$value1->p_name}}<br></h4>
                            <b>  Whole Price: &#8377;
                                                    {{$value1->price}}</b>
                        </div>
                        
                    </div>
                </div>
               @endforeach
            </div>
        </div>
    </div>
</div>
    <!-- End Products  -->

@endsection


   