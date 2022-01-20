@extends ('layouts.main')

{{-- Head Title --}}
@section ('head-title', 'Comic Detail - DC Comics')

@section('main-content')
    {{-- Jumbotron --}}
    <section class="container-fluid detail-bg">
    </section>
    {{-- Blue Separator --}}
    <section class="container-fluid blue-row p-4">
    </section>
    {{-- Comic Image Card --}}
    {{-- <div class="container">
        <div class="comic-img-container">
            <img src="{{ $comic['thumb']}}" alt="">
        </div>
    </div> --}}
    {{-- Content --}}
    <div class="container py-5">
        <div class="row">
            {{-- Left Content --}}
            <div class="col-6">
                {{-- Title --}}
                <h3 class="text-uppercase">{{ $comic['title']}}</h3>
                {{-- Price --}}
                <div class="price-and-availability d-flex">

                    <span>U.S. Price: {{ $comic['price']}}</span>
                    <span class="text-right">AVAILABLE</span>

                </div>
                {{-- Description --}}
                <div class="description">
                    <p>{{ $comic['description']}}</p>
                </div>
            </div>

            <div class="col-6">
                Test
            </div>

        </div>
        
    </div>

@endsection