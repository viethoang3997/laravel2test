<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Show</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<p>{{ $product->id }}</p>
	<p>{{ $product->name }}</p>
	<p>{{ $product->description }}</p>
	<a href="{{ route('product.index') }}">Back</a>
</body>
</html>