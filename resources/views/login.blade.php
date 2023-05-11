<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Internship | Login</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="/img/LOGO BMKG.png" rel="icon">
    <link href="/img/LOGO BMKG.png" rel="apple-touch-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i"
        rel="stylesheet">
    <link href="/vendor/login/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/login/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/css/login.css" rel="stylesheet">
</head>
{{-- PANDU ATE NGPSUHS --}}

<body>
    <main id="main">
        <!-- ======= LOGIN ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <br><br>
                    <h1>LOGIN</h1>
                </div>
                <!-- Jendela Login -->
                <div class="col-lg-7" style="width:400px;margin:0 auto;">
                    <p>

                        @if (Session::has('registrasisuccess'))
                            <p class="alert alert-info">{{ Session::get('registrasisuccess') }}</p>
                        @endif
                    </p>
                    <p> Yang telah login adalah {{ $name }} </p>
                    <form action="/login" method="post" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <br><br>
                                <div>
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" id="email"
                                        placeholder="Your Email" required><br>
                                </div>
                                <div>
                                    <label>Password</label>
                                    <input type="password" name="password" class="form-control" id="password"
                                        placeholder="Your Password" required><br>
                                </div>
                                <div class="text-center"><button type="submit">LOGIN</button></div>
                                <div class="text-center">
                                    <a class="small" href="/register">Create an Account!</a>
                                </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- END LOGIN -->
    </main>


    <script src="/vendor/login/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/js/login.js"></script>

</body>

</html>
