<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create new product</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="{{ route('product.store') }}" method="POST">
		@csrf <!-- chong tan cong xss -->
		<table>
			<tbody>
				<tr>
					<td>Name: </td>
					<td><input type="text" name="name"></td>
				</tr>
				<tr>
					<td>Description: </td>
					<td><input type="text" name="description"></td>
				</tr>
			</tbody>
		</table>
		<input type="submit" value="Save">
	</form>
</body>
</html>