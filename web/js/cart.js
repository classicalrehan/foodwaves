var shoppingCart = {
	error:0,
    checkoutMethodButton: function () {
        jQuery(".a-item").addClass("hide-container");
		jQuery("#checkout-step-shipping").removeClass("hide-container");
    },
    shippingInformationButton: function () {
    	jQuery('input.required-entry[type="text"], input.required-entry[type="email"]').each(function () { 
    		if(jQuery(this).val()==""){
    			shoppingCart.error = shoppingCart.error + 1;
    			jQuery(this).addClass("error");
    		}
    	});
        
        if(shoppingCart.error<=0){
        	jQuery(".a-item").addClass("hide-container");
        	jQuery("#checkout-step-shipping_method").removeClass("hide-container");	
        }
		
    },
    shippingMethodButton: function () {
        jQuery(".a-item").addClass("hide-container");
		jQuery("#checkout-step-payment").removeClass("hide-container");
    },
    paymentInformationButton: function () {
        jQuery(".a-item").addClass("hide-container");
		jQuery("#checkout-step-review").removeClass("hide-container");
    },
    orderOverviewButton: function () {
        
    },
    checkoutMethodHeading: function () {
        jQuery(".a-item").addClass("hide-container");
		jQuery("#checkout-step-login").removeClass("hide-container");
    },
    shippingInformationHeading: function () {
        jQuery(".a-item").addClass("hide-container");
		jQuery("#checkout-step-shipping").removeClass("hide-container");
    },
    shippingMethodHeading: function () {
    	if(shoppingCart.error<=0){
        	jQuery(".a-item").addClass("hide-container");
			jQuery("#checkout-step-shipping_method").removeClass("hide-container");
		}
    },
    paymentInformationHeading: function () {
        if(shoppingCart.error<=0){
        	jQuery(".a-item").addClass("hide-container");
			jQuery("#checkout-step-payment").removeClass("hide-container");
		}
    },
    orderOverviewHeading: function () {
        if(shoppingCart.error<=0){
        	jQuery(".a-item").addClass("hide-container");
			jQuery("#checkout-step-review").removeClass("hide-container");
		}
    },

}