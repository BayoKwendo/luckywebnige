<html> 
<body onload='document.form_one.submit()'> 
<div align='center'> 
<h3> 
Please Wait. Payment Gateway is loading.<br/> 
</h3> 
</div>
<div class="iframe-loading" style='background:url(https://luckybox.ng/images/spinner.svg) center center no-repeat;'>
<iframe width='100%' height='85%' border='0' name='frame' id='frame'></iframe>
</div>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const site_redirect_url = "https://api.supaplayer.com:5004/luckybox/confirm_deposit";
    
    let amount = urlParams.get('amount')
    let phonenumber = urlParams.get('msisdn')
    let txn_ref = urlParams.get('txn_ref')
    let webview_hash = urlParams.get('hash')
    let customer_name = urlParams.get('name')
    
    function openInNewTab(url,data) {
    
    	var form = document.createElement('form');
    	form.target = 'frame';
    	form.method = 'POST';
    	form.name = 'form_one';
    	form.action = url;
    
    	for (var key in data) {
    		var input = document.createElement('input');
    		input.type = 'hidden';
    		input.name = key;
    		input.value = data[key];
    		form.appendChild(input);
    	}
    
    	document.body.appendChild(form);
    };
    
    openInNewTab('https://webpay.interswitchng.com/paydirect/pay',{
    	product_id: '7585',
    	pay_item_id : '101',
    	amount : amount,
    	currency : '566',
    	site_redirect_url : site_redirect_url,
    	txn_ref : txn_ref,
    	cust_id : phonenumber,
    	site_name :'Lucky Box Nigeria',
    	cust_name : customer_name,
    	hash :webview_hash,
    });
</script>
</form> 
</body> 
</html> 