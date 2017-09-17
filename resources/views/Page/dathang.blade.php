@extends('master')
@section('content')
	<div class="content-main-inner row-fluid">
	<div class="span12">
				<div id="system-message-container">
	</div>

            </div>
         		<div id="breadcrumb" class="span12">
			<!--<div class="yt-position-inner">-->
				    	<div class="module">
	    
	    	    <div class="modcontent clearfix">
		
<ul class="breadcrumb ">
<li class="active">
	<span class="divider">
		<i class="icon-home" rel="tooltip" title="You are here: "></i>
	</span>
</li>
<li>
	<a href="/templates/joomla3/sj-bakery/index.php" class="pathway">Home</a>
	<span class="divider">/</span>
</li>
<li></li><li><a href="/templates/joomla3/sj-bakery/index.php/virtuemart/other-pages/shopping-cart/cart" class="pathway">Shopping Cart</a></li><li></li></ul>
	    </div>
		
	   
	</div>
    
			<!--</div>-->
		</div>
		          <div id="yt_component" class="span12">
            <div class="component-inner"><div class="component-inner2">
                
<div class="cart-view">
	<div class="vm-cart-header-container">
		<div class="width50 floatleft vm-cart-header">
			<h1>Giỏ hàng</h1>
			<div class="payments_signin_button"></div>
		</div>
				<div class="width50 floatleft right vm-continue-shopping">
			<a class="continue_link" href="/templates/joomla3/sj-bakery/index.php/specialty-cake">Continue Shopping</a>		</div>
		<div class="clear"></div>
	</div>
	@php
		
		if (Auth::check()){
			 $name = Auth::user()->full_name ;
			 $gender =  Auth::user()->gender ;
			 $email =  Auth::user()->email ;
			 $address =  Auth::user()->address ;
			 $phone =  Auth::user()->phone ;
		}
		else{
			 $name = "";
			 $gender =  "";
			 $email = "" ;
			 $address =  "" ;
			 $phone =  "" ;
			}
		
	@endphp
	    <form id="com-form-login" action="{{route('chuyenhang')}}" method="post" >
	    	<input type="hidden" name="_token" value="{{csrf_token()}}">
    <fieldset class="userdata">
	     <div>
	     	<p>Địa chỉ giao hàng của quý khách</p>
	     <p class="width10 floatleft" id="name">
            Họ tên
		</p>

        <p class="width30 floatleft" id="name">
            <input required style="margin-bottom: 20px;width: 130%" type="text" value="{!! $name !!}" name="name" class="inputbox" size="18" placeholder="Họ tên">
		</p>
		<div class="clear"></div>
		<!--Giới tính-->
		 <p class="width10 floatleft" id="gender">
            Giới tính
		</p>
        <p class="width30 floatleft" id="gender">
           <div class="form-block"  style="margin-bottom: 20px">
							
							<input id="gender" type="radio" class="input-radio" name="gender" value="nam" 
								@if ( $gender ==0)
									checked="checked" 
								@endif
							 style="width: 5%">Nam</span>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" 
								@if ( $gender ==1 )
									checked="checked" 
								@endif
							style="width: 5%"><span>Nữ</span>
										
						</div>
		</p>
        <!-- Email-->
        <div class="clear"></div>
         <p class="width10 floatleft" id="email">
            Email
		</p>
        <p class="width30 floatleft" id="email">
            <input required value="{!! $email !!}" style="margin-bottom: 20px;width: 130%" type="text" name="email" class="inputbox" size="18" placeholder="Email@gmail.com">
		</p>
		<!--Địa chỉ-->
		<div class="clear"></div>
		 <p class="width10 floatleft" id="address">
            Địa chỉ
		</p>
        <p class="width30 floatleft" id="address">
            <input required value="{!! $address !!}" style="margin-bottom: 20px;width: 130%" type="text" name="address" class="inputbox" size="18" placeholder="Địa chỉ">
		</p>
		<!--Điện thoại-->
		<div class="clear"></div>
		 <p class="width10 floatleft" id="phone">
            Số điện thoại
		</p>
        <p class="width30 floatleft" id="phone">
            <input required value="{!! $phone !!}" style="margin-bottom: 20px;width: 130%" type="text" name="phone" class="inputbox" size="18" placeholder="Số điện thoại">
		</p>
		<!--Ghi chú-->
		<div class="clear"></div>
		 <p class="width10 floatleft" id="notes">
            Ghi chú
		</p>
        <p class="width30 floatleft" id="notes">
            <input style="margin-bottom: 20px;width: 130%" type="text" name="notes" class="inputbox" size="18" placeholder="Ghi chú">
		</p>
		<div class="clear"></div>
		<!--Giới tính-->
		 <p class="width10 floatleft" id="gender">
            <h1>Phương thức thanh toán</h1>
		</p>
        <p class="width50 floatleft" id="payment_method">
           <div class="form-block"  style="margin-bottom: 20px">
							
							<div style="margin-bottom: 3%">
								<input id="payment_method" type="radio" class="input-radio" name="payment_method" value="COD" checked="checked" style="width: 5%"><span style="
									    font-size: 17px;
									    font-weight: bold;
									    color: #00abff;
									">Thanh toán trực tiếp</span>
							</div>
							
							<p style="background-color: #f8f8f8;padding-left: 5%;padding:10px;width: auto;margin-left: 5%" class="width100 floatleft">Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho nhân viên giao hàng</p>
							<br>
							<div style="margin-top: 5%" >
								<input id="payment_method" type="radio" class="input-radio" name="payment_method" value="ATM" style="width: 5%"><span style="
									    font-size: 17px;
									    font-weight: bold;
									    color: #00abff;
									">Chuyển khoản</span>
							</div>
							<p style="background-color: #f8f8f8;padding-left: 5%;padding:10px;width: auto;margin-left: 5%;margin-bottom: 3%;margin-top:3%" class="width100 floatleft">Quý khách vui lòng gửi vào số tài khoản 23101992847887 hoặc 124578999.</p>
										
						</div>
		</p>
	     </div>
        <div class="clr"></div>

        <div class="clr"></div>

		<input type="hidden" name="task" value="user.login">
        <input type="hidden" name="option" value="com_users">
        <input type="hidden" name="return" value="aHR0cDovL2RlbW8uc21hcnRhZGRvbnMuY29tL3RlbXBsYXRlcy9qb29tbGEzL3NqLWJha2VyeS9pbmRleC5waHAvdmlydHVlbWFydC9vdGhlci1wYWdlcy9zaG9wcGluZy1jYXJ0L2NhcnQ=">
        <input type="hidden" name="399889050d22d18e23c81a1c3a736aa4" value="1">    



<table class="cart-summary" cellspacing="0" cellpadding="0" border="0" width="100%">
<tbody><tr>
	<th align="left">Tên sản phẩm</th>
	<th style="min-width:70px;width:5%;align:right;text-align:center" align="left">Hình ảnh</th>
	<th style="min-width:70px;width:5%;align:right;text-align:center">Giá</th>
	<th style="min-width:120px;width:10%;align:right;text-align:center">Số lượng		/ Xóa</th>


		<th style="min-width:76px;width:5%;align:right;text-align:center"><span class="priceColor2">Thuế</span></th>
		<th style="min-width:76px;width:5%;align:right;text-align:center"><span class="priceColor2">Giảm giá</span></th>
	<th style="min-width:80px;width:5%;align:right;text-align:center">Tổng giá</th>
</tr>

@if(Session::has('cart'))

	@foreach($product_cart as $cart)
					<!-- end one item -->				
	<tr id="row_{{$cart['item']['id']}}" valign="top" class="sectiontableentry1">

	<input type="hidden" name="cartpos[]" value="0">
	<td align="left">
				<span class="cart-images">
						 						</span>
				<a href="/templates/joomla3/sj-bakery/index.php/fruits-cake/dika-lote-case-detail">{{$cart['item']['name']}}</a><div class="vm-customfield-cart"></div>
	</td>
	<td align="center" style="width: 23%">
		<img width="92%" src="public/source/images/stories/virtuemart/product/{{$cart['item']['image']}}" alt="" class="pull-left">
	</td>
	<td align="right">
        <div class="PricesalesPrice vm-display vm-price-value"><span class="vm-price-desc"></span><span " class="PricesalesPrice">@if ($cart['item']['promotion_price']>0)
        	{{number_format($cart['item']['promotion_price'])}}
        @else
        	{{number_format($cart['item']['unit_price'])}}
        @endif ₫</span></div>        
        
	</td>
	<td align="center">
		<input min="1" max="5" id="gh_sl_{{$cart['item']['id']}}" onchange="changecart({{$cart['item']['id']}},
			@if ($cart['item']['promotion_price']==0)
				{{$cart['item']['unit_price']}}
			@else
				{{$cart['item']['promotion_price']}}
			@endif

		)" type="number" title="Update Quantity In Cart" class="quantity-input js-recalculate" size="3"  name="quantity[0]" value="{{$cart['qty']}}">
			<a type="button" onclick="deletecart({{$cart['item']['id']}})" style="background-image: url('public/source/images/stories/virtuemart/product/icons8-Delete Bin-20.png');" type="submit" class="vmicon vm2-remove_from_cart" name="delete.0" title="Delete Product From Cart"><i class="fa fa-trash-o"></i></button>
	</td>

		<td align="right"><span class="priceColor2"></span>    </td>
		<td align="right"><span class="priceColor2"></span></td>
	<td colspan="1" align="right">
		<div class="PricesalesPrice vm-display vm-price-value"><span class="vm-price-desc"></span><span id="gh_tt_{{$cart['item']['id']}}" class="PricesalesPrice">{{number_format($cart['price'])}} ₫</span></div></td>
	</tr>
	@endforeach
@endif
	<!--Begin of SubTotal, Tax, Shipment, Coupon Discount and Total listing -->
<tr class="sectiontableentry1">
	<td colspan="4" align="right">Tổng tiền</td>

		<td align="right"><span class="priceColor2"></span></td>
		<td align="right"><span class="priceColor2"></span></td>
	<td align="right"><div class="PricesalesPrice vm-display vm-price-value"><span class="vm-price-desc"></span><span id="totalPrice" class="PricesalesPrice">{{number_format($totalPrice)}} ₫</span></div></td>
</tr>

</tbody>
</table>
</fieldset>



	 <div class="checkout-button-top"> <button type="submit" id="checkoutFormSubmit" name="checkout" value="1" class="vm-button-correct"><span>Đặt hàng</span> </button></div>

				<input type="hidden" name="order_language" value="en-GB">
		<input type="hidden" name="task" value="updatecart">
		<input type="hidden" name="option" value="com_virtuemart">
		<input type="hidden" name="view" value="cart">
	</form>
</div>





<script id="box_js" type="text/javascript"> //<![CDATA[
	jQuery(document).ready(function($) {
		$('div#full-tos').hide();
		var con = $('div#full-tos').html();
		$('a#terms-of-service').click(function(event) {
			event.preventDefault();
			$.fancybox ({ div: '#full-tos', content: con });
		});
	});

//]]> </script>
<script id="autoShipment_js" type="text/javascript">//<![CDATA[ 
radiobtn = document.getElementById("shipment_id_1");
				if(radiobtn!==null){ radiobtn.checked = true;} //]]>
</script>
<script id="vm.STisBT_js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready(function($) {

		if ( $('#STsameAsBTjs').is(':checked') ) {
			$('#output-shipto-display').hide();
		} else {
			$('#output-shipto-display').show();
		}
		$('#STsameAsBTjs').click(function(event) {
			if($(this).is(':checked')){
				$('#STsameAsBT').val('1') ;
				$('#output-shipto-display').hide();
			} else {
				$('#STsameAsBT').val('0') ;
				$('#output-shipto-display').show();
			}
			var form = jQuery('#checkoutFormSubmit');
			document.checkoutForm.submit();
		});
	}); //]]>
</script>
<script id="vm.checkoutFormSubmit_js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready(function($) {
		jQuery(this).vm2front("stopVmLoading");
		jQuery("#checkoutFormSubmit").bind("click dblclick", function(e){
			jQuery(this).vm2front("startVmLoading");
			e.preventDefault();
			jQuery(this).attr("disabled", "true");
			jQuery(this).removeClass( "vm-button-correct" );
			jQuery(this).addClass( "vm-button" );
			jQuery(this).fadeIn( 400 );
			var name = jQuery(this).attr("name");
			$("#checkoutForm").append("<input name=\""+name+"\" value=\"1\" type=\"hidden\">");
			$("#checkoutForm").submit();
		});
	}); //]]>
</script>
<script id="autocheck_js" type="text/javascript">//<![CDATA[ 
jQuery(document).ready(function(){

    jQuery(".output-shipto").find(":radio").change(function(){
        var form = jQuery("#checkoutFormSubmit");
		document.checkoutForm.submit();
    });
    jQuery(".required").change(function(){
    	var count = 0;
    	var hit = 0;
    	jQuery.each(jQuery(".required"), function (key, value){
    		count++;
    		if(jQuery(this).attr("checked")){
        		hit++;
       		}
    	});
        if(count==hit){
        	var form = jQuery("#checkoutFormSubmit");
        	//document.checkoutForm.task = "checkout";
			document.checkoutForm.submit();
        }
    });
}); //]]>
</script>
<script id="keepAliveTime_js" async="async" type="text/javascript">//<![CDATA[ 
var sessMin = 15;var vmAliveUrl = "index.php?option=com_virtuemart&view=virtuemart&task=keepalive";var maxlps = "4";var minlps = "1" //]]>
</script>


            </div></div>
        </div>
		 </div>
@endsection