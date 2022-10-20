<div class="d-md-flex half login-register-template">

    <!-- //=== BG IMAGE -->
    <div class="bg bg-content" style="background-image: url('images/bg_garden_min.jpg');">
        <div class="bg-content-inner">
            <h2 class="login-bg-text">You choose what to grow leave rest on us!</h2>
        </div>
    </div>

    <div class="contents">
        <div class="container h-100">
            <div class="row h-100 align-items-md-center justify-content-center">
                <div class="col-md-12">
                    <div class="form-block mx-auto">
                        <!-- //=== FORM HEAD -->
                        <div class="text-center mb-3 mb-lg-4">
                            {{ $logo }}
                        </div>

                        <!-- //=== FORM TITLE -->
                        <div class="text-center mt-3 mb-3">
                            <h4 class="section-title">
                                <span class="section-title-text text-success font-weight-bold">Login</span>
                            </h4>
                        </div>

                        <!-- //=== LOGIN FORM -->
                        <div class="form-wrapper form-login">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
