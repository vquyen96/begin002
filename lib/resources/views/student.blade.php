<!DOCTYPE html>
<html>
<head>
	<title>Student of class -- {{$items->name}}</title>
</head>
<body>
	<a href="{{ asset('class') }}">Quay lại</a>
	<br>
	<a href="{{ asset('class/detail/'.$items->id.'/add') }}">Thêm học sinh</a>
	<h3>Danh sách lớp học</h3>

	<table>
		<tr>
			<th>Tên Học Sinh</th>
			<th>Mã Sinh Viên</th>
			<th>Trạng thái</th>
			<th>Sửa</th>
			<th>Xóa</th>
			<th>Chi tiết</th>
		</tr>
		@foreach($items->student as $item)
		<tr>
			<td>{{ $item->name }}</td>
			<td>{{ $item->rollNumber }}</td>
			<td>{{ $item->status }}</td>
			<td>
				<a href="{{ asset('class/detail/'.$items->id.'/edit/'.$item->id) }}">Sửa</a>
			</td>
			<td>
				<a href="{{ asset('class/detail/'.$items->id.'/delete/'.$item->id) }}">Xóa</a>
			</td>
			{{-- <td>
				<a href="{{ asset('class/detail/'.$items->id.'/delete/'.$item->id) }}">Chi tiết</a>
			</td> --}}
		</tr>
		@endforeach
	</table>
</body>
</html>