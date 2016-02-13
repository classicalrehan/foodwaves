

<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="en" id="top" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" id="top" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" id="top" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" id="top" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" id="top" class="no-js"> <!--<![endif]-->

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Order # 100000002</title>
<meta name="description" content="Default Description" />
<meta name="keywords" content="Magento, Varien, E-commerce" />
<meta name="robots" content="*" />
<link rel="icon" href="http://localhost/magento/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="http://localhost/magento/skin/frontend/base/default/favicon.ico" type="image/x-icon" />
<!--[if lt IE 7]>
<script type="text/javascript">
//<![CDATA[
    var BLANK_URL = 'http://localhost/magento/js/blank.html';
    var BLANK_IMG = 'http://localhost/magento/js/spacer.gif';
//]]>
</script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="http://localhost/magento/skin/frontend/rwd/default/css/styles.css" media="all" />
<link rel="stylesheet" type="text/css" href="http://localhost/magento/skin/frontend/base/default/css/widgets.css" media="all" />
<link rel="stylesheet" type="text/css" href="http://localhost/magento/skin/frontend/base/default/css/print.css" media="print" />
<script type="text/javascript" src="http://localhost/magento/js/prototype/prototype.js"></script>
<script type="text/javascript" src="http://localhost/magento/js/mage/translate.js"></script>
<script type="text/javascript" src="http://localhost/magento/js/lib/ccard.js"></script>
<script type="text/javascript" src="http://localhost/magento/js/prototype/validation.js"></script>
<script type="text/javascript" src="http://localhost/magento/js/varien/js.js"></script>
<script type="text/javascript" src="http://localhost/magento/js/varien/weee.js"></script>
<!--[if lt IE 8]>
<link rel="stylesheet" type="text/css" href="http://localhost/magento/skin/frontend/base/default/css/styles-ie.css" media="all" />
<![endif]-->
<!--[if lt IE 7]>
<script type="text/javascript" src="http://localhost/magento/js/lib/ds-sleight.js"></script>
<![endif]-->
<script type="text/javascript">//<![CDATA[
        var Translator = new Translate([]);
        //]]></script></head>
<body class="page-print sales-order-print">
<div>
    <div class="print-head">
        {!! Html::image('web/images/logo.png','Foodwaves')!!}
            </div>
    <h1>Order #100000002</h1>
<p class="order-date">Order Date: February 6, 2016</p>
<div class="col2-set">
        <div class="col-1">
        <h2>Shipping Address</h2>
        <address>mohd rihan ansari<br/>
Naukri<br />
D-92<br />



Delhi,  Delhi, 110096<br/>
India<br/>
T: 1234567890

</address>
    </div>
    <div class="col-2">
            <h2>Billing Address</h2>
        <address>mohd rihan ansari<br/>
Naukri<br />
D-92<br />



Delhi,  Delhi, 110096<br/>
India<br/>
T: 1234567890

</address>
    </div>
</div>
<div class="col2-set">
    <div class="col-1">
        <h2>Shipping Method</h2>
         Flat Rate - Fixed    </div>
    <div class="col-2">
        <h2>Payment Method</h2>
        <p>Check / Money order</p>
    </div>
</div>
<h2>Items Ordered</h2>
<table class="data-table" id="my-orders-table">
    <col />
    <col width="1" />
    <col width="1" />
    <col width="1" />
    <col width="1" />
    <thead>
        <tr>
            <th>Product Name</th>
            <th>SKU</th>
            <th class="a-right">Price</th>
            <th class="a-center">Qty</th>
            <th class="a-right">Subtotal</th>
        </tr>
    </thead>
    <tfoot>
                <tr class="subtotal">
        <td colspan="4" class="a-right">
                        Subtotal                    </td>
        <td class="last a-right">
                        <span class="price">$1,222.00</span>                    </td>
    </tr>
            <tr class="shipping">
        <td colspan="4" class="a-right">
                        Shipping &amp; Handling                    </td>
        <td class="last a-right">
                        <span class="price">$5.00</span>                    </td>
    </tr>
            <tr class="grand_total">
        <td colspan="4" class="a-right">
                        <strong>Grand Total</strong>
                    </td>
        <td class="last a-right">
                        <strong><span class="price">$1,227.00</span></strong>
                    </td>
    </tr>
        </tfoot>
                    <tbody>
        <tr class="border" id="order-item-row-2">
    <td><h3 class="product-name">Test Product</h3>
                                                                </td>
    <td data-rwd-label="SKU">test</td>
    <td class="a-right" data-rwd-label="Price">
                    <span class="price-excl-tax">
                                                    <span class="cart-price">
                
                                            <span class="price">$1,222.00</span>                    
                </span>


                            </span>
            <br />
                    </td>
    <td class="a-right" data-rwd-label="Qty">
        <span class="nobr">
                            Ordered: <strong>1</strong><br />
                                        </span>
    </td>
    <td class="a-right" data-rwd-label="Subtotal">
                    <span class="price-excl-tax">
                                                    <span class="cart-price">
                
                                            <span class="price">$1,222.00</span>                    
                </span>


                            </span>
            <br />
                    </td>
    <!--
        <th class="a-right"><span class="price">$1,222.00</span></th>
            -->
</tr>
    </tbody>
        </table>
<script type="text/javascript">decorateTable('my-orders-table', {'tbody' : ['odd', 'even'], 'tbody tr' : ['first', 'last']})</script>
<script type="text/javascript">window.print();</script>
    <div class="buttons-set">
        <button type="button" title="Close Window" class="button" onclick="window.close();"><span><span>Close Window</span></span></button>
    </div>
    </div>
</body>
</html>
