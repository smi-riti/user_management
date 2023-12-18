<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</head>

<body class="bg-dark">
    <div class="container bg-dark shadow-lg mt-5">
        <div class="row mt-5">
            <div class="col-6">
                <img src="{{asset('images/login-bro.png')}}" class="rounded-3" width="100%" height="100%" alt="">
            </div>
            <div class="col-6 mt-5 mx-auto ">
                <div class="container mt-5">
                    <div class="card bg-dark shadow-lg">
                        <div class="card-header  text-info h3 "><i class="bi bi-person-check-fill"></i> Login
                            Here
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="text-info h5">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control ">
                                    @error('email')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="" class="text-info h5">Password</label>
                                    <input type="password" name="password" value="{{ old('password') }}"
                                        class="form-control text-info">
                                    @error('password')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-3">

                                    <input type="submit" value="Login"
                                        class="btn btn-info w-100 text-white fw-bold fs-5">
                                </div>
                                <a href="{{route('signup')}}" class="text-info">Not registered yet?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
