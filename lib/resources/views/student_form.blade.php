<!DOCTYPE html>
<html>
<head>
	<title>
		{{ isset($item) ? 'Sửa' : 'Thêm'}} Học Sinh
	</title>
</head>
<body>
	<a href="{{ asset('class/detail/'.$items->id) }}">Danh sách học sinh trong lớp {{ $items->name }}</a>
	<h2>{{ isset($item) ? 'Sửa' : 'Thêm'}} Học Sinh</h2>
	<form method="post">
		Tên
		<input type="text" name="name" value="{{ isset($item) ? $item->name : ' '}}" placeholder="tên">
		Mã SV
		<input type="text" name="rollNumber" value="{{ isset($item) ? $item->rollNumber : ' '}}" placeholder="mã SV">
		<input type="submit" name="sbm" value="{{ isset($item) ? 'Sửa' : 'Thêm'}}">
		{{ csrf_field() }}
	</form>

</body>
</html>