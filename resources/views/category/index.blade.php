<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V03</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="category/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="category/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="categoryfonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="category/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="category/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="category/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="category/css/util.css">
	<link rel="stylesheet" type="text/css" href="category/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
                <a href="categories/create">Create Category</a>
				<!-- Search form -->
				<div class="md-form mb-3 mt-0">
				<form method="GET" action="/search">
    			@csrf
				<input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
				</form>

				</div>
				<div class="table100 ver1 m-b-110">
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column2" data-column="column2">ID</th>
								<th class="column100 column2" data-column="column2">Images</th>
								<th class="column100 column3" data-column="column3">Name</th>
								<th class="column100 column4" data-column="column4">Show </th>
								<th class="column100 column4" data-column="column4">Action</th>
							</tr>
						</thead>
						<tbody>
                            @foreach ($categories as $category)
							<tr class="row100">
								<td class="column100 column2" data-column="column2">{{ $category->id }}</td>
								<td class="column100 column3" data-column="column3">
									<img src="{{ asset('storage/' . $category->image) }}" alt="" width="100px" height="50px" >
								</td>
								<td class="column100 column3" data-column="column3">{{ $category->name }}</td>
                                <td class="column100 column4" data-column="column4"><a href="/categories/{{ $category->id }}">Show</a>
								<td class="column100 column4" data-column="column4"><a href="/categories/{{ $category->id }}/edit">Update</a>
									<form method="POST" action="/categories/{{ $category->id }}">
									@csrf
									@method('DELETE')
									<input type="submit" value="Delete">
									</form>
                                    </td>
                            </tr>
                            @endforeach
						</tbody>
					</table>
					<br>
					<!--  -->
				</div>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
