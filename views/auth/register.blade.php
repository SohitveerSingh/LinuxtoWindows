<!DOCTYPE html>

<html lang="en" data-bs-theme="light" data-layout-mode="fluid" data-topbar-color="light" data-menu-color="dark"
    data-sidenav-size="default" data-layout-position="fixed">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <link rel="/favicon.ico" type="image/svg+xml" href="https://themes.techzaa.in/logo.svg">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Register</title>

    <link rel="stylesheet" href="{{asset('css/index-0c21f661.css')}}">

</head>

<body class="authentication-bg position-relative">
    <div id="root">
        <div class="authentication-bg position-relative">
            <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5 position-relative">
                <div class="container">
                    <div class="justify-content-center row">
                        <div class="col-xxl-8 col-lg-10">
                            <div class="overflow-hidden card">
                                <div class="g-0 row">
                                    <!-- side Img -->
                                    <div class="d-none d-lg-block p-2 col-lg-6">
                                        <img src="{{asset('images/auth-img-22f254a5.jpg')}}" alt=""
                                            class="img-fluid rounded h-100">
                                    </div>
                                    <!-- side img end -->
                                    <div class="col-lg-6">
                                        <div class="d-flex flex-column h-100">
                                            <div class="auth-brand p-4">
                                                <a href="https://themes.techzaa.in/velonic_r/auth/index.html"
                                                    class="logo-light"><img src="./login_files/logo-3711f1d8.png"
                                                        alt="logo" height="22" class="">
                                                </a>
                                                <a href="https://themes.techzaa.in/velonic_r/auth/index.html"
                                                    class="logo-dark"><img src="{{asset('images/logo-dark-503b1844.png')}}"
                                                        alt="dark logo" height="22" class="">
                                                </a>
                                            </div>
                                            <div class="p-4 my-auto ">
                                                <h4 class="fs-20">Sign Up</h4>
                                                <p class="text-muted mb-3">Enter your username and password to register.
                                                </p>

                                                <form action="{{route('register')}}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="name" class="form-label">name</label>
                                                        <input name="name" class="form-control"   >
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="email" class="form-label">email</label>
                                                        <input id="email" name="email" class="form-control" >
                                                    </div>

                                                    <div class="mb-3">

                                                        <div>
                                                            <label for="password" class="form-label">Password</label>
                                                        </div>

                                                        
                                                        <div class="mb-3 input-group">
                                                            <input name="password" class="form-control" >
                                                        
                                                        </div>

                                                          <div>
                                                            <label for="password_confirmation" class="form-label">Password</label>
                                                        </div>

                                                        
                                                        <div class="mb-3 input-group">
                                                            <input name="password_confirmation" class="form-control" >
                                                        </div>
                                                    </div>

                                                    <div class="mt-3 text-start">
                                                        <button type="submit" class="w-100 btn btn-soft-primary">
                                                            submit
                                                        </button>
                                                    </div>
                                                </form>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="text-center col-12">
                            <p class="text-dark-emphasis">Already have an account? <a
                                    class="text-dark fw-bold ms-1 link-offset-3 text-decoration-underline"
                                    href="/login"><b>Sign in</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer footer-alt fw-medium"><span class="text-dark">2025 © Velonic - Theme by Techzaa</span>
            </footer>
        </div>
    </div>
</body>

</html>