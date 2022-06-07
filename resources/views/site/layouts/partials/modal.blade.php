<div id="offcanvas-flip-2" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar bg-gray">

        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <div class="text-center">
            <i class="fa-solid fa-user-large text-third p-2 border border-3 border-main rounded-pill"></i>
        </div>
        <div class="row">
            <div class="col-6">
                <button class="btn-logo" data-bs-toggle="modal" href="#signin-model">
                    <span class="btn-body px-1">Sign in</span>
                </button>
            </div>
            <div class="col-6">
                <button class="btn-logo" data-bs-toggle="modal" data-bs-target="#signup-model">
                    <span class="btn-body px-1">Sign up</span>
                </button>
            </div>
        </div>
        <div class="uk-offcanvas-body mt-3">
            <a href="{{ route('app.settings') }}">Legal & About</a>
            <div class="w-100 border-bottom border-second border-1 my-2"></div>
            <a class="d-inline" href="https://wa.me/{{ $settings->phone }}" target="_blank">Customer Service
                <i class="fa-solid fa-location-arrow text-main ms-3"></i></a>
            <div class="w-100 border-bottom border-second border-1 my-2"></div>
            <a data-bs-toggle="modal" href="#signin-model" role="button">Your Orders</a>
            <a data-bs-toggle="modal" href="#signin-model" role="button">Your Account</a>
        </div>
    </div>
</div>

@include('site.layouts.partials.sign')
