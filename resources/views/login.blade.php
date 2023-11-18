<x-layouts.main>
    <x-page-header>
        Login
    </x-page-header>


    <section class="login-register pt-6 pb-6">
        <div class="container">
            <div class="log-main blog-full log-reg w-75 mx-auto">
                <div class="row">
                    <div class="col-lg-6 pe-4">
                        <h3 class="text-center border-b pb-2">Login</h3>
                        <form method="post" action="#" name="contactform" id="contactform3">
                            <div class="form-group mb-2">
                                <input type="text" name="user_name" class="form-control" id="fullname"
                                       placeholder="User Name or Email Address">
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" name="password_name" class="form-control" id="password"
                                       placeholder="Password">
                            </div>
                            <div class="form-group mb-2">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck3">
                                <label class="custom-control-label mb-0" for="exampleCheck3">Remember me</label>
                                <a class="float-end" href="#">Lost your password?</a>
                            </div>
                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                <input type="submit" class="nir-btn" id="submit1" value="Login">
                            </div>
                            <p class="text-center">Don't have an account? <a href="register.html"
                                                                             class="theme">Register</a></p>
                        </form>
                        <hr class="log-reg-hr position-relative my-4 overflow-visible">
                        <div class="log-reg-button d-sm-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-fb w-50 me-1">
                                <i class="fab fa-facebook"></i> Login with Facebook
                            </button>
                            <button type="submit" class="btn btn-google w-50 ms-1">
                                <i class="fab fa-google"></i> Login with Google
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-4">
                        <h3 class="text-center border-b pb-2">Register</h3>
                        <form method="post" action="#" name="contactform2" id="contactform2">
                            <div class="form-group mb-2">
                                <input type="text" name="user_name1" class="form-control" id="1"
                                       placeholder="User Name">
                            </div>
                            <div class="form-group mb-2">
                                <input type="text" name="email_name" class="form-control" id="email1"
                                       placeholder="Email Address">
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" name="password_name1" class="form-control" id="password1"
                                       placeholder="Password">
                            </div>
                            <div class="form-group mb-2">
                                <input type="password" name="repassword_name" class="form-control" id="repassword"
                                       placeholder="Re-enter Password">
                            </div>
                            <div class="form-group mb-2 d-flex">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck">
                                <label class="custom-control-label mb-0 ms-1 lh-1" for="exampleCheck">I have read and
                                    accept the Terms and Privacy Policy?</label>
                            </div>
                            <div class="comment-btn mb-2 pb-2 text-center border-b">
                                <input type="submit" class="nir-btn" id="submit3" value="Register">
                            </div>
                            <p class="text-center">Already have an account? <a href="login.html" class="theme">Login</a>
                            </p>
                        </form>
                        <hr class="log-reg-hr position-relative my-4 overflow-visible">
                        <div class="log-reg-button d-sm-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-fb w-50 me-1">
                                <i class="fab fa-facebook"></i> Login with Facebook
                            </button>
                            <button type="submit" class="btn btn-google w-50 ms-1">
                                <i class="fab fa-google"></i> Login with Google
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
