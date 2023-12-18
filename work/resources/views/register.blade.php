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
    <div class="container mt-3">
        <div class="row">
            <div class="col-6">
                <img src="{{asset('images/Login-bro.png')}}" height="auto" width="100%" alt="">
            </div>
            <div class="col-6  mx-auto  ">
                <div class="container ">
                    <div class="card  shadow-lg">
                        <div class="card-header  text-info h3 "><i class="bi bi-person-fill-add"></i> Sign Up
                            Here 
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf
                                <div class="row">
                                    <div class="mb-2 col">
                                        <label for="" class="text-info h5">First Name</label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}"
                                            class="form-control ">
                                        @error('first_name')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                    </div>
                                    <div class="mb-2 col">
                                        <label for="" class="text-info h5"> Last Name</label>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}"
                                            class="form-control ">
                                        @error('last_name')
                                            <p class="text-danger small">{{ $message }}</p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <label for="" class="text-info h5">Email</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="form-control ">
                                    @error('email')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="" class="text-info h5">Password</label>
                                    <input type="password" name="password" value="{{ old('password') }}"
                                        class="form-control text-info">
                                    @error('password')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="" class="text-info h5">Contact No</label>
                                    <input type="number" name="contact" value="{{ old('contact') }}"
                                        class="form-control ">
                                    @error('contact')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="" class="text-info form-check-label h5">Gender : </label>
                                    <input type="radio"  class="form-check-input" name="gender" value="male" checked>Male
                                    <input type="radio" class="form-check-input" name="gender" value="female">Female
                                    <input type="radio" class="form-check-input" name="gender" value="others">Others
                                    @error('gender')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="mb-2">
                                    <label for="" class="text-info form-check-label h5">How did you hear about this? - </label>
                                    <div class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                                        <input type="checkbox" name="source" value="Linkedim" class="btn-check" id="btn1">
                                        <label class="btn btn-outline-primary" for="btn1">Linkedin</label>
                                      
                                      
                                        <input type="checkbox" name="source" value="Friends"class="btn-check" id="btncheck2">
                                        <label class="btn btn-outline-primary" for="btncheck2">Friends</label>
                                      
                                      
                                        <input type="checkbox" class="btn-check" value="Job Portal" name="source" id="btncheck3">
                                        <label class="btn btn-outline-primary" for="btncheck3">Job Portal</label>
                                      

                                        <input type="checkbox" class="btn-check" value="Other" name="source"  id="btncheck3">
                                        <label class="btn btn-outline-primary" for="btncheck3">Others</label>
                                        @error('source')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                      </div>
                                </div>
                                <div class="form-outline mb-2">
                                    <label class="form-label text-info h5" for="">City</label>
                                    <select  name="city" id="" class="form-control" >
                                        <option value="mumbai">Mumbai</option>
                                        <option value="pune">Pune</option>
                                        <option value="ahmedabad">Ahmedabad</option>
                                        <option value="patna">Patna</option>
                                        <option value="purnia">Purnia</option>
                                    </select>
                                   
                                    @error('city')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                                </div>
                                <div class="mb-2">
                                    <label for="" class="text-info h5">State</label>
                                    <input type="text" name="state" value="{{ old('state') }}"
                                        class="form-control text-info">
                                    @error('state')
                                        <p class="text-danger small">{{ $message }}</p>
                                    @enderror
                                </div>


                                
                                <div class="mb-2">
                                    <input type="submit" value="Signup" class="btn btn-info w-100 text-white fw-bold fs-5">
                                </div>
                                <a href="{{route('login')}}" class="text-info">Already registered?</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
