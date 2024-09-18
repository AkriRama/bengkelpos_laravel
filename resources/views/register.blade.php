<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel | Registrasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid" style="background-color: #605B5B;">
        <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
            <div class="row">
                <div class="col">
                    
                    <div class="text text-center">
                        <h1>LOGO</h1>
                    </div>

                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if(session('status'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                    @endif

                    <div class="card card-custom">
                        <div class="card-body mt-2 mb-2" style="width: 25rem">
                            <form action="" method="post">
                                @csrf

                                <div class="form-group row mb-3">
                                    <div class="col-md card-custom2">
                                        <input type="username" class="form-control" name="username" placeholder="Nama" value="" >
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-3">
                                    <div class="col-md card-custom2">
                                        <input type="password"  class="form-control" name="password" placeholder="Kata Sandi" value="" >
                                    </div>
                                </div>
                                
                                <div class="form-group row mb-3">
                                    <div class="col-md card-custom2">
                                        <input type="tel"  class="form-control" name="phone" placeholder="No Telepon" value="" required>
                                    </div>
                                </div>

                                <div class="form-group row mb-3">
                                    <div class="col-md card-custom2">
                                        <textarea type="address" class="form-control" name="address"rows="5" required></textarea>
                                    </div>
                                </div>
                                
                                <!-- <div class="form-group row mb-3">
                                    <div class="col-md card-custom2">
                                        <input type="email" class="form-control" name="email" placeholder="Email" value="" required>
                                    </div>
                                </div> -->

                                
                                
                                <!-- <div class="form-group row mb-3">
                                    <div class="col-md card-custom2">
                                        <input type="password"  class="form-control" name="password" placeholder="Konfirmasi Kata Sandi" value="" required>
                                    </div>
                                </div> -->
                                
                                <div class="d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn btn-danger">REGISTER</button>
                                </div>

                            </form>
                        </div>
                    </div>

                    <div class="text text-center">Sudah Punya Akun?
                        <a href="login">Login Disini</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>