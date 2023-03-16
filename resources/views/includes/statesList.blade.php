<div class="container marketing mt-4">
    @foreach($states as $state)
            <div class="row container mb-5">
                <div class="col-md-7 mb-4">
                    <h2 class="heading">{{ $state->title }}</span></h2>
                    <p class="lead">{{ Illuminate\Support\Str::limit(strip_tags($state->content),400) }}</p>
                    <a class="btn btn-outline-primary" href="{{ route('state', $state->slug) }}">Подробне</a>
                </div>
                <div class="col-md-5">
                    <img class="img-fluid" src="{{ asset(config('siteOptions.imagePath') . $state->image) }}" alt="error load">
                </div>
            </div>
    @endforeach
</div>
