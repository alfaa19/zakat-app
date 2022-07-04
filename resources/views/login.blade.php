<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Zakat App Admin</title>
    <link href="{{asset('startbootstrap/css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-teal">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header text-center">
                                    <img src="{{asset('startbootstrap/assets/img/Logo-UNSIL.png')}}" width="100px" alt="">
                                    <h3>Zakat App</h3>
                                </div>
                            <div class="card-body">
                                <form action="/login" method="post">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" placeholder="name@example.com" required autofocus >
                                        <label for="email">Email address</label>
                                        @error('email') <div class="invalid-feedback">
                                            {{$message}}
                                        </div> @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" name="password" id="password" type="password" placeholder="Password" />
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                        <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="password.html">Forgot Password?</a>
                                        <button class="btn btn-primary" type="submit" >Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-teal mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Zakat App 2022</div>

                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{asset('startbootstrap/js/scripts.js')}}"></script>
</body>
</html>
