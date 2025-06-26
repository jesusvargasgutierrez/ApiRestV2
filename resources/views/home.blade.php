@extends(config('app.layout'))

@section('content')
	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
			<img src="https://dummyimage.com/1710x400/000/fff.png&text=cover1" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			<img src="https://dummyimage.com/1710x400/000/fff.png&text=cover2" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
			<img src="https://dummyimage.com/1710x400/000/fff.png&text=cover3" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
	<div class="mt-5">
		<div class="row">
			<div class="col-6 text-center ">
				<a href="#" class="btn btn-primary">
					<i class="ki-duotone ki-graph-3 fs-2x">
						<span class="path1"></span><span class="path2"></span>
					</i>
					<span class="">
						<span class="fs-3 fw-bold">Estado de cuenta</span>
					</span>
				</a>
			</div>
			<div class="col-6 text-center">
				<a href="{{ route('homeview') }}" class="btn btn-primary">
					<i class="ki-duotone ki-graph-3 fs-2x">
						<span class="path1"></span><span class="path2"></span>
					</i>
					<span class="">
						<span class="fs-3 fw-bold">Clases y reservaciones</span>
					</span>
				</a>
			</div>
		</div>
	</div>
@endsection