
<!DOCTYPE html>
<html>

<head>
  	<meta charset="UTF-8">
  	<title>Oops! Something Went Wrong</title>
  	<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>

<body>

	&nbsp
	&nbsp
  	<div class="row text-center">
  	<h3>Oops.. Something Went Wrong!</h3>
  		<img src="<?=base_url() ?>img/404.jpg" alt="Page Not Found (404).">
  	</div>
	&nbsp
	&nbsp
	<div class="row">
	  	<div class="col-md-2 col-md-offset-5">
	  		<button class="btn btn-success btn-block" onclick="goBack()">Go Back !!</button>
	  	</div>
  	</div>

  	


<script>
	function goBack() {
	    window.history.back()
	}
</script>
</body>

</html>
<!-- Performance optimized by W3 Total Cache. Learn more: http://www.w3-edge.com/wordpress-plugins/

Page Caching using memcached
Object Caching 1075/1093 objects using memcached
Fragment Caching 0/0 fragments using memcached
Content Delivery Network via cdn.css-tricks.com

 Served from: css-tricks.com @ 2014-10-16 10:42:02 by W3 Total Cache -->