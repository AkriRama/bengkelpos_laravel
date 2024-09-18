<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel | Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<style>
    .card-custom{
        border-radius : 20px 20px 20px 20px;
    }

    .card-custom2 input{
        border-radius : 20px 0px 20px 0px;
    }
</style>
<body>
    <div class="container-fluid" style="background-color: #605B5B;">
        
    <div class="container d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <div class="row">
            
            <div class="col">
                
                <div class="text text-center">
                    <h1>LOGO</h1>
                </div>
                <div class="mt-5">
                    @if(session('message'))
                        <div class="alert alert-danger">
                            {{ session('message') }}
                        </div>
            
                    @endif
                </div>
                <div class="card card-custom">
                    <div class="card-body mt-2 mb-2" style="width: 25rem;">

                            
                        <form action="" method="post">
                            @csrf
        
                            <div class="form-group row mb-3">
                                <div class="col-md card-custom2">
                                    <input id="username" type="text" class="form-control" name="username" placeholder="username"  required>
                                </div>
                            </div>
        
                            <div class="form-group  card-custom2">        
                                <div class="col-md">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Kata Sandi" required>
                                </div>
                            </div>
                            
                            <div class="form-text">
                                <h6>Lupa Kata Sandi?</h6>
                            </div>
        
                            
                            <button type="submit" class="btn btn-primary form-control">
                                LOGIN
                            </button>
                        </form>
                    </div>
                </div>
                
                <div class="d-flex justify-content-center mt-3">
                    </div>

                    <div class="text text-center">Belum Punya Akun?
                        <a href="register">Daftar</a>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>