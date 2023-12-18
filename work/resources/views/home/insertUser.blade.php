@extends('home.base')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">


                
                <div class="card">
                    <div class="card-header"><i class="bi bi-person-fill-add"></i> Add New User Details</div>
                    <div class="card-body">
                        <form action="{{route('home.user.store')}}" method="post">
                            @csrf
                            <div class="mb-2">
                                <label for="" class="text-info h5"> Name</label>
                                <input type="text" name="name" value="{{ old('name') }}"
                                    class="form-control ">
                                @error('name')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
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
                                <label for="" class="text-info h5">Contact No</label>
                                <input type="number" name="contact" value="{{ old('contact') }}"
                                    class="form-control ">
                                @error('contact')
                                    <p class="text-danger small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <input type="submit" value="Add User" class="btn btn-info w-100 text-white fw-bold fs-5">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
   
@endsection
