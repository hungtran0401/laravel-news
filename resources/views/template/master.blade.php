<style type="text/css">
	#wraper{
		width:980px; height:auto; margin:auto;
	}
	#header{
		width:auto; height:220px; margin:auto; background: yellow;
	}
	#content{
		width:auto; height:800px; margin:auto; background: green;
	}
	#footer{
		width:auto; height:200px; margin:auto; background: blue;
	}


</style>
<body>
<div id="wraper">
	<div id="header">
		@section('menu')
			Menu A | Menu B
		@show
		
	</div>
	<div id="content">
		@yield('noidung')

	</div>
	<div id="footer"></div>
</div>
</body>