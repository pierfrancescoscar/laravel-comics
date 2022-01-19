<header class="p-3 header-bg-white header-shadow">
    <section class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex align-items-center">
                    {{-- Logo --}}
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('images/dc-logo.png') }}" class="dc-logo" alt="">
                    </a>

                    {{-- Navigation Menu --}}
                    <nav>
                        <ul class="d-flex mb-0">

                            <li class="list-unstyled me-3">
                                <a href="{{ route('home') }}" class="text-uppercase text-decoration-none dc-black">Comics</a>
                            </li>

                            <li class="list-unstyled">
                                <a href="{{ route('news') }}" class="text-uppercase text-decoration-none dc-black">News</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</header>