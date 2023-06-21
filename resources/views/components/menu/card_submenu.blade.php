<div class="col-12 col-md-4 mb-3">
	<div class="card shadow h-100">
		<div class="card-body text-center" style="background-color: {{$bg_color ? $bg_color : '#333333'}}; color: white; ">
			<i class="{{$clase_icono}} display-1"></i>
			<div class="py-2"></div>
			<div class="text-center h1">{{ucfirst($titulo)}}</div>
			<div class="d-grid gap-2" role="group" align="center">
				@foreach($urls as $url)
				<a href="{{$url['url']}}" class="btn btn-outline-light">{{$url['nombre']}}</a>
				@endforeach
			</div>
		</div>
	</div>		
</div>