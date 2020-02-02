<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title', 'Default') | Panel de Administración</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	@include('admin.layouts.link')
</head>


@include('admin.layouts.partials.navbar')
@include('admin.layouts.partials.sidebar_l')

<body class="hold-transition skin-red">

	<div class="wrapper" style="height: auto; min-height: 100%;">
		<div class="content-wrapper">


			@yield('content')


		</div>
		
	</div>
	@include('admin.layouts.partials.footer')
	@include('admin.layouts.partials.sidebar_r')




	@include('admin.layouts.script')	


</body>

</html>