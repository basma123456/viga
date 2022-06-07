   <!-- Start Sign in Component -->

   <section>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Start The component Model-->
                <div class="modal fade" id="signin-model" aria-hidden="true" aria-labelledby="signinModelLabel"
                    tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content bg-gray">
                            <button type="button" class="btn-close ms-auto me-3 mt-3 opacity-25"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-body bg-gray text-center">
                                <div class="contanier">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <div class="d-flex justify-content-center">
                                                <div class="border border-3 border-main rounded-pill">
                                                    <i class="fa-solid fa-user-large text-third px-2"></i>
                                                </div>
                                            </div>
                                            <p class="my-0 uk-text-bold">Welcome back</p>
                                            <form action="{{route("app.loginProcess")}}" method="post">
                                                @csrf
                                                {{method_field('post')}}
                                                <div class="mt-4">
                                                    <input
                                                        class="uk-input uk-width-medium border-dark rounded-3 ps-3 d-inline-block"
                                                        type="text" name="email" placeholder="E-mail:">
                                                </div>
                                                <div class="mt-3">
                                                    <input
                                                        class="uk-input uk-width-medium border-dark rounded-3 ps-3 d-inline-block"
                                                        type="password" name="password" placeholder="Password:">
                                                </div>
                                                <div class="d-flex justify-content-end align-content-center pe-4">
                                                    <a class="text-second uk-text-small pe-2 me-1 mt-1"
                                                        href="#">Forgotten Password</a>
                                                </div>
                                                <div class="d-flex justify-content-around pt-3">
                                                    <button class="btn-logo" type="submit">
                                                        <span class="btn-body px-sm-4">Sign In</span>
                                                    </button>

                                                    <!-- Start Sign Up Button-->
                                                    <button class="btn-logo" type="button"
                                                        data-bs-toggle="modal" data-bs-target="#signup-model">
                                                        <span class="btn-body px-sm-4">Sign Up</span>
                                                    </button>
                                                    <!-- End Sign Up Button-->

                                                </div>
                                            </form>
                                        </div>

                                        <div class=" uk-flex uk-flex-middle uk-flex-center">
                                            <div class="w-100 border-bottom border-main border-3"></div>
                                            <p class="text-black w-100 text-center">Or Continue With</p>
                                            <div class="w-100 border-bottom border-main border-3"></div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-secondary"><i
                                                    class="fa-brands fa-google pe-3"></i> Google</button>
                                            <button class="btn btn-secondary"><i
                                                    class="fa-brands fa-facebook-f pe-3"></i> facebook</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Start Sign Up Modal-->
                <div class="modal fade" id="signup-model" aria-hidden="true" aria-labelledby="signupModelLabel"
                    tabindex="-1">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content bg-gray">
                            <button type="button" class="btn-close ms-auto me-3 mt-3 opacity-25"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                            <div class="modal-body bg-gray text-center">
                                <div class="contanier">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center">
                                                <div class="border border-3 border-main rounded-pill">
                                                    <i class="fa-solid fa-user-large text-third px-2"></i>
                                                </div>
                                            </div>
                                            <p class="my-0 uk-text-bold">Sign Up</p>
                                            <form action="{{ route('app.registerProcess') }}" method="POST">
                                                @csrf
                                                <div class="mt-4">
                                                    <input
                                                        class="uk-input uk-width-large border-dark rounded-3  d-inline-block"
                                                        type="email" placeholder="E-mail:" name="email" required>
                                                </div>
                                                <div class="mt-3">
                                                    <input
                                                        class="uk-input uk-width-large border-dark rounded-3  d-inline-block"
                                                        type="password" placeholder="Password:" name="password" required>
                                                </div>
                                                <div class="mt-4">
                                                    <input
                                                        class="uk-input uk-width-large border-dark rounded-3  d-inline-block"
                                                        type="text" placeholder="Full Name" name="full_name" required>
                                                </div>
                                                <div class="mt-4">
                                                    <input
                                                        class="uk-input uk-width-large border-dark rounded-3  d-inline-block"
                                                        type="text" placeholder="Country" name="country" required>
                                                </div>
                                                <div class="mt-4">
                                                    <input
                                                        class="uk-input uk-width-large border-dark rounded-3  d-inline-block"
                                                        type="text" placeholder="Mobile Number: +20##########" name="phone_number" required>
                                                </div>
                                                <div class="mt-4">
                                                    <input
                                                        class="uk-input uk-width-large border-dark rounded-3  d-inline-block"
                                                        type="text" placeholder="Street Name: Talaat Harb" name="street_name" required>
                                                </div>
                                                <div class="mt-4">
                                                    <input
                                                        class="uk-input uk-width-large border-dark rounded-3  d-inline-block"
                                                        type="text" placeholder="Building Name/no, floor, apt." name="building_name" required>
                                                </div>
                                                <div class="mt-4">
                                                    <input
                                                        class="uk-input uk-width-large border-dark rounded-3  d-inline-block"
                                                        type="text" placeholder="City/Area" name="city" required>
                                                </div>
                                                <div class="mt-4">
                                                    <input
                                                        class="uk-input uk-width-large border-dark rounded-3  d-inline-block"
                                                        type="text" placeholder="Nearest Landmark" name="landmark" required>
                                                </div>
                                                <div class="mt-4">
                                                    <p class="uk-text-left ps-5"> <span class="ps-5 ms-5">
                                                            Optional</span></p>
                                                    <input
                                                        class="uk-input uk-width-large border-dark rounded-3  d-inline-block"
                                                        type="text" name="delivery_instructions" placeholder="Add Delivery Instructions">
                                                </div>
                                                <button type="submit" class="btn-logo mt-5 px-5">
                                                    Create Account
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Sign Up Modal-->

                <!-- End The component Model-->
                <!-- Start The component button-->

                <!-- End The component button-->

            </div>

        </div>
    </div>
</section>

<!-- End Sign in Component -->
