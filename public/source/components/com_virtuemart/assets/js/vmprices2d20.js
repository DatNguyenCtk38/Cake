if (typeof Virtuemart === "undefined")
	var Virtuemart = {};


Virtuemart.setproducttype = function(form, id) {
	form.view = null;
	var datas = form.serialize();
	var prices = form.parent(".productdetails").find(".product-price");
	if (0 == prices.length) {
		prices = jQuery("#productPrice" + id);
	}
	datas = datas.replace("&view=cart", "");

	prices.fadeTo("fast", 0.75);
    jQuery.ajax({
        type: "POST",
        cache: false,
        dataType: "json",
        url: window.vmSiteurl + "index.php?&option=com_virtuemart&view=productdetails&task=recalculate&format=json&nosef=1" + window.vmLang,
        data: datas
    }).done(
        function (data, textStatus) {
            prices.fadeTo("fast", 1);
            // Remove previous messages generated by this AJAX call:
            jQuery( "#system-message-container #system-message div.vmprices-message").remove();
            // refresh price
            for (var key in data) {
                var value = data[key];
                // console.log('my datas',key,value);
                if ( key=='messages' ) {
                    // Extract the messages from the returned string, add the vmprices-message class (so the next ajax call
                    // can remove them again) and then move the messages to the original message container.
                    // Things are complicated by the fact that no #system-message element exists if no messages were printed so far
                    var newmessages = jQuery( data[key] ).find("div.alert").addClass("vmprices-message");
                    if (!jQuery( "#system-message-container #system-message").length && newmessages.length) {
                        jQuery( "#system-message-container" ).append( "<div id='system-message'></div>" );
                    }
                    newmessages.appendTo( "#system-message-container #system-message");
                } else { // prices
                    if (value!=0) prices.find("span.Price"+key).show().html(value);
                    else prices.find(".Price"+key).html(0).hide();
                }
            }
        }
    );

	return false; // prevent reload
}

Virtuemart.productUpdate = function() {
	// This Event Gets Fired As Soon As The New Product
	// Was Added To The Cart
	// This Way Third Party Developer Can Include Their Own
	// Add To Cart Module And Listen To The Event: "updateVirtueMartCartModule"
	jQuery('body').trigger('updateVirtueMartCartModule');
}

Virtuemart.eventsetproducttype = function (event){
    Virtuemart.setproducttype(event.data.cart,event.data.virtuemart_product_id);
}

Virtuemart.sendtocart = function (form){
	if (Virtuemart.addtocart_popup ==1) {
		Virtuemart.cartEffect(form) ;
	} else {
		form.append('<input type="hidden" name="task" value="add" />');
		form.submit();
	}
}

Virtuemart.cartEffect = function(form) {
	var $ = jQuery ;

	var dat = form.serialize();

	if(usefancy){
        jQuery.fancybox.showActivity();
	}

    jQuery.ajax({
        type: "POST",
        cache: false,
        dataType: "json",
        url: window.vmSiteurl + "index.php?option=com_virtuemart&nosef=1&view=cart&task=addJS&format=json"+vmLang,
        data: dat
    }).done(

	function(datas, textStatus) {

		if(datas.stat ==1){

			var txt = datas.msg;
		} else if(datas.stat ==2){
			var txt = datas.msg +"<H4>"+form.find(".pname").val()+"</H4>";
		} else {
			var txt = "<H4>"+vmCartError+"</H4>"+datas.msg;
		}
		if(usefancy){
            jQuery.fancybox({
					"titlePosition" : 	"inside",
					"transitionIn"	:	"fade",
					"transitionOut"	:	"fade",
					"changeFade"    :   "fast",
					"type"			:	"html",
					"autoCenter"    :   true,
					"closeBtn"      :   false,
					"closeClick"    :   false,
					"content"       :   txt
				}
			);
		} else {
            jQuery.facebox.settings.closeImage = closeImage;
            jQuery.facebox.settings.loadingImage = loadingImage;
			//$.facebox.settings.faceboxHtml = faceboxHtml;
            jQuery.facebox({ text: txt }, 'my-groovy-style');
		}


		Virtuemart.productUpdate();
	});

}

Virtuemart.incrQuantity = (function(event) {
    var rParent = jQuery(this).parent().parent();
    quantity = rParent.find('input[name="quantity[]"]');
    virtuemart_product_id = rParent.find('input[name="virtuemart_product_id[]"]').val();
    var Qtt = parseInt(quantity.val());
    var maxQtt = parseInt(quantity.attr("max"));
    Ste = parseInt(quantity.data("step"));
    if (!isNaN(Qtt)) {
        quantity.val(Qtt + Ste);
        if(!isNaN(maxQtt) && quantity.val()>maxQtt){
            quantity.val(maxQtt);
        }
        Virtuemart.setproducttype(event.data.cart,virtuemart_product_id);
    }
});

Virtuemart.decrQuantity = (function(event) {
    var rParent = jQuery(this).parent().parent();
    quantity = rParent.find('input[name="quantity[]"]');
    virtuemart_product_id = rParent.find('input[name="virtuemart_product_id[]"]').val();
    var Qtt = parseInt(quantity.val());
    var minQtt = parseInt(quantity.data("init"));
    Ste = parseInt(quantity.data("step"));

    if (!isNaN(Qtt) && Qtt>Ste) {
        quantity.val(Qtt - Ste);
        if(!isNaN(minQtt) && quantity.val()<minQtt){
            quantity.val(minQtt);
        }
    } else quantity.val(minQtt);
    Virtuemart.setproducttype(event.data.cart,virtuemart_product_id);
});

Virtuemart.addtocart = function (e){
    e.preventDefault();
    var target = e.target || e.srcElement; //cross browser support
    if (jQuery(e.originalEvent.target).prop("type") == "submit") {
        Virtuemart.sendtocart(e.data.cart);
        return false;
    }
};

Virtuemart.product = function(carts) {
	carts.each(function(){
		var cart = jQuery(this),

		quantityInput=cart.find('input[name="quantity[]"]'),
		plus   = cart.find('.quantity-plus'),
		minus  = cart.find('.quantity-minus'),
		select = cart.find('select:not(.no-vm-bind)'),
		radio = cart.find('input:radio:not(.no-vm-bind)'),
		virtuemart_product_id = cart.find('input[name="virtuemart_product_id[]"]').val(),
		quantity = cart.find('.quantity-input');

		var Ste = parseInt(quantityInput.data("step"));

		//Fallback for layouts lower than 2.0.18b
		if(isNaN(Ste)){
			Ste = 1;
		}

        jQuery(plus).off('click', Virtuemart.incrQuantity);
        jQuery(plus).on('click', {cart:cart}, Virtuemart.incrQuantity);

        jQuery(minus).off('click', Virtuemart.decrQuantity);
        jQuery(minus).on('click', {cart:cart},Virtuemart.decrQuantity);

        jQuery(select).off('change', Virtuemart.eventsetproducttype);
        jQuery(select).on('change', {cart:cart,virtuemart_product_id:virtuemart_product_id},Virtuemart.eventsetproducttype);

        jQuery(radio).off('change', Virtuemart.eventsetproducttype);
        jQuery(radio).on('change', {cart:cart,virtuemart_product_id:virtuemart_product_id},Virtuemart.eventsetproducttype);

        jQuery(quantity).off('keyup', Virtuemart.eventsetproducttype);
        jQuery(quantity).on('keyup', {cart:cart,virtuemart_product_id:virtuemart_product_id},Virtuemart.eventsetproducttype);

        this.action ="#";
        //this.preventDefault();
        //addtocart = cart.find('input.addtocart-button'),
        addtocart = cart.find('input[name="addtocart"]');
       // console.log("Execute bind to addtocart",addtocart);
        jQuery(addtocart).off('click',Virtuemart.addtocart);
        jQuery(addtocart).on('click',{cart:cart},Virtuemart.addtocart);

	});
}

Virtuemart.checkQuantity = function (obj,step,myStr) {
    // use the modulus operator "%" to see if there is a reminder
    reminder=obj.value % step;
    quantity=obj.value;

    if (reminder  != 0) {
        //myStr = "'.vmText::_ ('COM_VIRTUEMART_WRONG_AMOUNT_ADDED').'";
        alert(myStr.replace("%s",step));
        if(quantity!=reminder && quantity>reminder){
            obj.value = quantity-reminder;
        } else {
            obj.value = step;
        }
        return false;
    }
    return true;
}

jQuery.noConflict();
/*jQuery(document).ready(function($) {
	Virtuemart.product(jQuery("form.product"));

	/*$("form.js-recalculate").each(function(){
		if ($(this).find(".product-fields").length && !$(this).find(".no-vm-bind").length) {
			var id= $(this).find('input[name="virtuemart_product_id[]"]').val();
			Virtuemart.setproducttype($(this),id);

		}
	});*/
//});
