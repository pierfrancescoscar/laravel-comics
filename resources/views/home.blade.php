@extends ('layouts.main')

@section('main-content')
<section class="container-fluid dark-bg p-5">
        <div class="container">
            {{-- Comic Cards --}}
            <nav>
                <ul class="d-flex flex-wrap">
                        @foreach ($comics as $comic)
                    <li class="col-2 pb-5">
                        <img src="{{ $comic['thumb'] }}" class="pb-3" alt="{{ $comic['title'] }}">
                        <a href="/" class="comic-title">{{ $comic['series'] }}</a>
                    </li>
                        @endforeach
                </ul>
            </nav>
        {{-- Button --}}
            <div class="d-flex justify-content-center">
                <button class="text-uppercase comic-button py-1 px-4">
                    Load More
                </button>
            </div>
        </div>
    </div>
</section>
@endsection