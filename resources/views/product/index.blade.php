<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Products</title>
	<link rel="stylesheet" href="">
	<style type="text/css">
		td, tr {
			border: 1px solid #dddddd;
		}
	</style>
</head>
<body>
	<a href="{{ route('product.create') }}">New product</a>
	<br/>
	<table style="border-style: solid; border-width: 1px">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Description</td>
			<td>Action</td>
		</tr>
		@foreach($products as $product)
			<tr>
				<td>{{ $product->id }}</td>
				<td>{{ $product->name }}</td>
				<td>{{ $product->description }}</td>
				<td>
					<a href="{{ route('product.detail', $product->id) }}">detail</a>
				</td>
		</tr>
		@endforeach
	</table>
</body>
</html>