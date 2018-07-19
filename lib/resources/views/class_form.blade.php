<!DOCTYPE html>
<html>
<head>
	<title>
		{{ isset($item) ? 'Sửa' : 'Thêm'}} Class
	</title>
</head>
<body>
	<a href="{{ asset('class') }}">Danh sách khóa học</a>
	<h2>{{ isset($item) ? 'Sửa' : 'Thêm'}} Class</h2>
	<form method="post">
		<input type="text" name="name" value="{{ isset($item) ? $item->name : ' '}}">
		<input type="submit" name="sbm" value="{{ isset($item) ? 'Sửa' : 'Thêm'}}">

		{{ csrf_field() }}
	</form>

</body>
</html>