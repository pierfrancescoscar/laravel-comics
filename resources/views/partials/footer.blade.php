<footer>
    <section class="container-fluid footer-bg p-4">
        <div class="container">
            <div class="row">
                {{-- Sign Up Button --}}
                <div class="col-6">
                    <button class="text-uppercase footer-button py-1 px-3">
                        Sign-up Now
                    </button>
                </div>
                {{-- Social Media Buttons --}}
                <div class="col-6 d-flex align-items-center">
                    <span class="text-uppercase follow-us pe-3">
                        Follow us
                    </span>

                    <div class="">
                        <img src="{{ asset('images/footer-facebook.png') }}" class="pe-2" alt="">
                        <img src="{{ asset('images/footer-twitter.png') }}" class="pe-2" alt="">
                        <img src="{{ asset('images/footer-youtube.png') }}" class="pe-2" alt="">
                        <img src="{{ asset('images/footer-pinterest.png') }}" class="pe-2" alt="">
                        <img src="{{ asset('images/footer-periscope.png') }}" class="pe-2" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
</footer>