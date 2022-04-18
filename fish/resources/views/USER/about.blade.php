
   @extends('USER.header')
   @section('body')
    <!-- Start About Page  -->
   <form>
    <div class="about-box-main"> 
    <div class="latest-blog">   
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    @foreach($data as $value)
                    <p>
                        <b>{{$value->about_us}}</b></p>
                         
					<!-- <a class="btn hvr-hover" href="#">Read More</a> -->
                </div>
                <div class="col-sm-6 col-lg-6">
                    
                    <div class="banner-frame"> <img class="img-fluid" src="{{asset('upload/image/'.$value->image4)}}" alt="" >
                   @endforeach 
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
           
           <div class="latest-blog">
             <div class="container">
              <div class="row">
                <div class="col-sm-12">
                   <center> <h2 class="noo-sh-title">Meet Our Team</h2></center>
                </div>
                @foreach($data as $value)
                <div class="col-sm-4 col-lg-4">
                    <div class="hover-team">
                        <div class="our-team"> <img src="{{asset('/upload/image/'.$value->image5)}}" alt="" style="height: 400px;width: 400px;" />
                            <div class="team-content">
                                <h3 class="title">{{$value->team_detail1}}</h3></div>
                        </div>
                        <hr class="my-0"> </div>
                </div>

                <div class="col-sm-4 col-lg-4">
                    <div class="hover-team">
                        <div class="our-team"> <img src="{{asset('/upload/image/'.$value->image6)}}" alt="" style="height: 400px;width: 400px;" />
                            <div class="team-content">
                                <h3 class="title">{{$value->team_detail2}}</h3></div>
                        </div>
                        
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-4 col-lg-4">
                    <div class="hover-team">
                        <div class="our-team"> <img src="{{asset('/upload/image/'.$value->image7)}}" alt="" style="height: 400px;width: 400px;" />
                            <div class="team-content">
                                <h3 class="title">{{$value->team_detail3}}</h3></div>
                        </div>
                        @endforeach
                      
                        <hr class="my-0"> </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- End About Page -->

   @endsection