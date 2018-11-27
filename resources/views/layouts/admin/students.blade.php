@section('head')
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
	rel="stylesheet">

	<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
	rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="{{ asset(admin_data/css/vendors.css) }}">

	<link rel="stylesheet" type="text/css" href="{{ asset(admin_data/vendors/css/tables/datatable/datatables.min.css) }}">

	<link rel="stylesheet" type="text/css" href="{{ asset(admin_data/vendors/css/tables/extensions/responsive.dataTables.min.css) }}">

	<link rel="stylesheet" type="text/css" href="{{ asset(admin_data/vendors/css/tables/extensions/colReorder.dataTables.min.css) }}">

	<link rel="stylesheet" type="text/css" href="{{ asset(admin_data/vendors/css/tables/extensions/buttons.dataTables.min.css) }}">

	<link rel="stylesheet" type="text/css" href="{{ asset(admin_data/vendors/css/tables/datatable/buttons.bootstrap4.min.css) }}">

	<link rel="stylesheet" type="text/css" href="{{ asset(admin_data/vendors/css/tables/extensions/fixedHeader.dataTables.min.css) }}">

	<!-- END VENDOR CSS-->
	<!-- BEGIN MODERN CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset(admin_data/css/app.css) }}">
	<!-- END MODERN CSS-->
	<!-- BEGIN Page Level CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset(admin_data/css/core/menu/menu-types/horizontal-menu.css) }}">

	<link rel="stylesheet" type="text/css" href="{{ asset(admin_data/css/core/colors/palette-gradient.css) }}">
	<!-- END Page Level CSS-->
	<!-- BEGIN Custom CSS-->
	<link rel="stylesheet" type="text/css" href="{{ asset(admin_data/style.css) }}">
@stop

@section('content-body')
	<h1>This is Students Page....</h1>
@stop