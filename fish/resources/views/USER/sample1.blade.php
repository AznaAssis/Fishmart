          @extends('USER.header')
          @section('body')
                <form>
                	@foreach($data as $value)
                	<table class="table">
                		<tr>
                			<th>Product Image</th>
                			<td>{{asset('/upload/image/'.$value->image2)}}</td>
                		</tr>
                	@endforeach	
                  <a href="#" id="main_category" >Category</a>
                	<a id="category_link"></a>
                	<ul>
                	<a href="#" id="product_link">
                		
                	</a>
                	
                	 <li id="product_link1"></li>
                	</ul>
                	<script type="text/javascript">
                		$(document).ready(function()
                		{
                          $('#main_category').click(function()
                          {	
                             $.ajax({
                                    type:'get',
                                    url:'/get_category/',
                                    success:function(result)
                                    {	
                                      alert(result);
                                      $('#category_link').html(result);

                                    }
                            });
                             });
                          });
                           </script>
                           <script type="text/javascript">
                            $(document).ready(function()
                    {
                             $('#category_link').click(function(){

                               var cid=$('#text1').attr('value');
                             	alert(cid);
                               $.ajax({
                                        type:'get',
                                        url:'/get_product/'+cid,
                                        success:function(result1)
                                        {
                                        	alert(result1);
                                        	$('#product_link').html(result1);
                                        }
                               });
                          });
                		});
                	</script>
                	</table>
                		
                <!-- 	$(".qnty").on('change',function() {
     
    // Get the row containing the input
    var row = $(this).closest('tr');
    // var p = $('#price').val();
    var pid = parseInt(row.find("#pid").val());  -->
                </form>
                @endsection