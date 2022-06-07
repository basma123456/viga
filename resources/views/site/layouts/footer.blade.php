<footer class="text-black bg-gray fs-2">
    <div class="container py-4">
        <div class="row">
            <div class="col-6 col-md-4">
                <ul class="list-unstyled">
                    <li>About Us</li>
                    <li>Return Policy</li>
                    <li>Contact Us</li>
                    <li>Privacy & Policy</li>
                    <li>Terms & Conditions</li>
                </ul>
            </div>
            <div class="col-6 col-md-4">
                <ul class="list-unstyled">
                    <li>
                        <span>
                         E-mail
                        </span>
                        <p class="fs-5 text-third">
                            {{ $settings->email }}
                        </p>
                    </li>
                    <li>
                        <span>
                          phone Number
                        </span>
                        <p class="fs-5 text-third">
                            {{ $settings->phone }}
                        </p>
                    </li>
                    <li>
                        <span>
                          Location
                        </span>
                        <p class="fs-5 text-third">
                            {{ $settings->location }} Cairo Egypt.
                        </p>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-unstyled">
                    <li>
                        <span>
                            Social Media
                        </span>
                        <p class="fs-5">
                            <i class="fa-brands fa-facebook"></i>
                            <i class="fa-brands fa-instagram"></i>
                            <i class="fa-brands fa-twitter"></i>
                        </p>
                    </li>
                    <li>
                        <span>
                            Payments Methods:
                        </span>
                        <p class="fs-5">
                            <i class="fa-brands fa-cc-visa"></i>
                            <i class="fa-brands fa-cc-mastercard"></i>
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
