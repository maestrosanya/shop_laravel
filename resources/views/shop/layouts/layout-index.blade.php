<!doctype html>
<html lang="ru"> 
<head>
	<meta charset="UTF-8">
	<script type="text/javascript" src="js/functions.js"></script>
	<!--[if lt IE 9]>
	<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="{{ asset(env('THEME').'/css/style.css') }}" />
	<title>Untitled Document</title>
</head>

<body>
	@include('shop.layouts.header')

	{{-- START CONTENT --}}
	@section('content')
		@include('shop.layouts.layout-content')
	@endsection
	@yield('content')
	{{-- END CONTENT --}}

    {{-- START LEFT-SIDEBAR --}}
	@section('left-sidebar')
		@include('shop.layouts.left-sidebar')
	@endsection
	@yield('left-sidebar')
	{{-- END LEFT-SIDEBAR --}}

    {{-- START RIGHT-SIDEBAR --}}
	@section('right-sidebar')
		@include('shop.layouts.right-sidebar')
	@endsection
	@yield('right-sidebar')
	{{-- END RIGHT-SIDEBAR --}}

	{{-- START FOOTER --}}
	@section('footer')
		@include('shop.layouts.footer')
	@endsection
	@yield('footer')
	{{-- END FOOTER --}}

</body>
</html>
