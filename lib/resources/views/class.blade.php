<!DOCTYPE html>
<html>
<head>
	<title>Class</title>
</head>
<body>
	<a href="{{ asset('class/add') }}">Thêm  khóa học</a>
	<h3>Danh sách lớp học</h3>

	<table>
		<tr>
			<th>Tên Lớp</th>
			<th>Trạng thái</th>
			<th>Sửa</th>
			<th>Xóa</th>
			<th>Chi tiết</th>
		</tr>
		@foreach($items as $item)
		<tr>
			<td>{{ $item->name }}</td>
			<td>{{ $item->status }}</td>
			<td>
				<a href="{{ asset('class/edit/'.$item->id) }}">Sửa</a>
			</td>
			<td>
				<a href="{{ asset('class/delete/'.$item->id) }}">Xóa</a>
			</td>
			<td>
				<a href="{{ asset('class/detail/'.$item->id) }}">Chi tiết</a>
			</td>
		</tr>
		@endforeach
	</table>
</body>
</html>