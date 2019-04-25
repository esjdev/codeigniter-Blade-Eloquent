<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title') | Codeigniter Blade</title>
</head>
<body>

	<h1>@yield('title')</h1>

	@include('side')

	@yield('content')
	
</body>
</html>