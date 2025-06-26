@extends(config('app.layout'))

@section('content')
  <div class="row">
    @foreach($options as $option)
      <div class="col-6 col-lg-2">
        <div class="card mt-3">
          <img src="{{ $option->url_img }}" class="card-img-top" alt="{{ $option->description }}">
          <div class="card-footer text-center">
            <small class="text-muted">
              {{ $option->description }}
            </small>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection