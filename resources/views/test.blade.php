<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@php
		$hinh = 'public/source/image/product/1234.jpg';
	@endphp
	<img style="padding-left: 10px; padding-top: 10px" height="120px" width="120px" 
						src="<?php echo $message->embed($hinh); ?>">
</body>
</html>