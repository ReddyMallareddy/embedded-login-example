<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="salesforce-community" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>">
	<meta name="salesforce-mode" content="<?php echo getenv('SALESFORCE_MODE');?>-callback">
	<meta name="salesforce-save-access-token" content="true">
	<meta name="salesforce-allowed-domains" content="<?php echo getenv('SALESFORCE_HEROKUAPP_URL');?>">
	<meta name="salesforce-server-starturl" content="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/services/oauth2/authorize?response_type=token&&
client_id=<?php echo getenv('SALESFORCE_CLIENT_ID');?>&
redirect_uri=https://<?php echo getenv('SALESFORCE_HEROKUAPP_URL');?>/_callback.html&state=/">
	<meta name="salesforce-self-register-starturl-enabled" content="<?php echo getenv('SALESFORCE_SELF_REGISTER_STARTURL_ENABLED');?>">
	<script src="https://<?php echo getenv('SALESFORCE_COMMUNITY_URL');?>/servlet/servlet.loginwidgetcontroller?type=javascript_widget" async defer></script>
</head> 
<body></body>    
</html>
