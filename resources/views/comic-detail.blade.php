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
    <div class="container">
        <div class="comic-img-container">
            <img src="{{ $comic['thumb']}}" alt="">
            <div class="sub-text">
                View gallery
            </div>
            <div class="above-text">
                Comic book
            </div>
        </div>
    </div>
    {{-- Content --}}
    <div class="container py-5">
        <div class="row justify-content-center">
            {{-- Left Content --}}
            <div class="col-8">
                {{-- Title --}}
                <h3 class="text-uppercase title-color ">{{ $comic['title']}}</h3>
                {{-- Price --}}
                <div class="d-flex py-2">
                    <div class="col-8 price-and-availability d-flex align-items-center p-3">

                        <span class="flex-grow-1 green-text"><span class="text-white fs-14">U.S. Price:</span> {{ $comic['price']}}</span>
                        <span class="green-text fs-14">AVAILABLE</span>
    
                    </div>
                    <div class="col-4 price-and-availability d-flex p-3 align-items-center justify-content-center">
                        <span class="text-white fs-14 pe-2">Check Availability</span>
                        <i class="fas fa-angle-down text-white"></i>
                    </div>
                </div>
                {{-- Description --}}
                <div class="description">
                    <p class="grey-text fs-14">{{ $comic['description']}}</p>
                </div>
            </div>
            {{-- Advertising --}}
            <div class="col-4 adv pe-5">
                <h6 class="text-uppercase fs-14 grey-text text-right">Advertisement</h6>
                <img src="/images/adv.jpg" alt="">
            </div>

        </div>
        
    </div>

@endsection