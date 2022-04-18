@extends('USER.header');
@section('body')
<!-- Button trigger modal -->


  <button type="button" id="mycart" class="btn btn-warning" data-toggle="modal" data-target="#myModal">Buy Now</button>
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
      <form method="post" class="frm" action="/addcart">
                                    @csrf
                                 <table>
                                   <tr>
                                     
                                         <input type="hidden" name="m-uid" id="m-uid" class="form-control" value="{{session('userid')}}">
                                         <input type="hidden" name="m-pid" class="form-control" id="m-pid" value="{{$pro->pr_id}} "></td>
                                       <td> Quantity :</td>
                                       <td>  <input type="number" name="m-qnty" class="form-control" id="m-qnty" value="1" min="1">
                                    </td>
                                    <td><input type="hidden" name="m-price" class="form-control" id="m-price"></td>
                                    <td><input type="hidden" name="m-coin" class="form-control" id="m-coin" value="0"></td>

                                    </tr>
                                    <tr>
                                    <td>
                                    &nbsp; Total : </td>
                                    <td><input type="text" name="m-tot" id="m-tot" class="form-control" value="">
                                    </td>
                                 </tr>
                                 </table>
                             
                           </div>
                      <div class="modal-footer">
                   <input type="submit" class="btn btn-warning" value="ADD">
                   </form>
                      </div>
   </div>
   
  </div>
</div>
</div>
@endsection