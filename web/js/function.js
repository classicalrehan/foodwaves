var URL = "http://localhost/foodwaves/";
function addToCart(id,price){
	var qty = jQuery("#qty-"+id).val();
	var route = URL+"product/addToCart";
	jQuery.ajax({
	  url: route,
	  type: "post",
	  data: {'id':id, 'qty':qty, 'price':price,'_token':jQuery('input[name=_token]').val()},
	  success: function(data){
		renderCartItem(data,'add')
	  }
	});    
}

function removeItemFromCart(id){
	var route = URL+"product/removeFromCart";
	jQuery.ajax({
	  url: route,
	  type: "post",
	  data: {'id':id,'_token':jQuery('input[name=_token]').val()},
	  success: function(data){
		jQuery("#"+id).remove();
		renderCartItem(data,'remove');
	  }
	});  
}
/**
 * [renderCartItem description]
 * @param  {[type]} data [description]
 * @return {[type]}      [description]
 */
function renderCartItem(data,type){
	var html ="";
		var length = data.cart['cartItem'].length;

		
		for(var x in data.cart['cartItem']){
				if(x >=0){
				var first =(x==0 ? "first":"");
				var last = (x==(length - 1) ? "last":"");
				html +='<li class="item '+first+''+last+'" id='+data.cart['cartItem'][x].cart_id+'><div class="item-inner"><a class="product-image" title="'+data.cart['cartItem'][x].name+'" href="#l"><img src="'+data.cart['cartItem'][x].image+'"/></a><div class="product-details"><div class="access"><a class="btn-remove1" title="Remove This Item" onClick="return removeItemFromCart('+data.cart['cartItem'][x].cart_id+');">Remove</a> <a class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span class="hidden">Edit item</span></a></div><!--access--><strong>'+data.cart['cartItem'][x].qty+'</strong> x <span class="price">Rs.'+data.cart['cartItem'][x].price+'</span><p class="product-name"><a href="'+URL+'product/details/'+data.cart['cartItem'][x].id+'">'+data.cart['cartItem'][x].name+'</a></p></div></div></li>';
				}
			
		}
		jQuery('.fl-mini-cart-content .block-subtitle').html('<div class="top-subtotal">'+data.cart.cartItems+' items, <span class="price">Rs.'+data.cart.totalPrice+'</span> </div>');
		jQuery("#cartItemTotal").html(data.cart.cartItemCount);
		jQuery(".mini-products-list").html(html);
		if(type=="add"){
			jQuery('#addToCartResponse').modal('show');
			jQuery(".btn-checkout").show();	
		}
		if(type=="remove" && data.cart.cartItems==0){
			jQuery(".btn-checkout").hide();
		}else{
			jQuery(".btn-checkout").show();
		}
		
}

function showProductInGrid(){
	jQuery(".button-grid").addClass("button-active");
	jQuery(".button-list").removeClass("button-active");	
	jQuery(".products-grid").show();
	jQuery(".products-list").hide();
	
	/*
	*	Magic with URL
	*/
	var pathname = window.location.href;
	var splitUrl = pathname.split("?");
   // window.location.href = splitUrl[0]+"?view=grid";  
}

function showProductInList(){
	jQuery(".button-list").addClass("button-active");
	jQuery(".button-grid").removeClass("button-active");
	jQuery(".products-grid").hide();
	jQuery(".products-list").show();
	/*
	*	Magic with URL
	*/
	/*
	*	Magic with URL
	*/
	var pathname = window.location.href;
	var splitUrl = pathname.split("?");
    //window.location.href = splitUrl[0]+"?view=list";
}
window.onload = function() {

  // Check for LocalStorage support.
  if (localStorage) {

  
      // Get the value of the name field.
      var name ="rehan";

      // Save the name in localStorage.
      localStorage.setItem('name', name);
   

  }

}
function HideMe()
    {
        jQuery('.popup1').hide();
        jQuery('.popup2').hide();
        jQuery('#fade2').hide();
        jQuery('#fade').hide();
    }
    function forgetPassword()
    {
        jQuery('.popup1').show();
        jQuery('#fade').show();
    }
	function showSupplierInfo()
    {
        jQuery('.popup2').show();
        jQuery('#fade2').show();
    }
	function increaseQty(id, iden){
		
		var result = document.getElementById(iden+id); 
		var qty = result.value; 
		if( !isNaN( qty )) result.value++;return false;
	}

	function decreaseQty(id, iden){
		var result = document.getElementById(iden+id); 
		var qty = result.value; 
		if(qty > 1){
			if( !isNaN( qty )) result.value--;return false;
		}
	}
	function checkout(){
		/*if(jQuery('.radio').is(':checked')) { 
		 	alert("it's checked"); 
		}else{
			alert("Please choose Checkout as a Guest or Register")
		}*/
	}