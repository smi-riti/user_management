@extends('home.base')
@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 mb-2">
                <div class="row">
                    <div class="col-3">
                        <h2 class=" ">Manage User</h2>

                    </div>
                    <div class="col-6">
                        <form action="{{ route('search') }}" class="d-flex" role="search" method="get">
                            <input class="form-control me-2"
                                value="@if (isset($search)) {{ $search }} @endif" type="search"
                                name="search" placeholder="Search here.." aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="col-3">
                        <a href="{{ route('home.user.add') }}" class="btn btn-dark text-white ">Add User</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-9">
                    @if (count($user) > 0)
                        
                 
                    <div class="row">
                        @foreach ($user as $item)
                            <div class="col-4">
                                <div class="card bg-info text-white ">
                                    <div class="card-body">
                                        <h4  class="text-capitalize">Name: {{ $item->name }} </h4>

                                        <h4 class="h6">Email:{{ $item->email }} </h4>
                                        <h4 class="h6">Phone no: {{ $item->contact }} </h4>
                                        <h4 class="h6">Action: </h4>
                                        <div class="btn btn-group gap-2">
                                            {{-- delete work --}}
                                            <form action="{{ route('home.user.delete') }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <input type="submit" value="Delete" class="btn btn-danger">
                                            </form>
                                            <a href="#rock{{ $loop->index }}" class="btn btn-dark rounded-2"
                                                data-bs-toggle="modal">Edit</a>
                                            {{-- modal work --}}
                                            <div class="modal fade bg-dark" id="rock{{ $loop->index }}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header text-info fw-bold fs-4">
                                                            Edit {{ $item->first_name }}'s Details
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="card ">

                                                                <div class="card-body">
                                                                    <form
                                                                        action="{{ route('home.user.update', $item->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        <div class="mb-2">
                                                                            <label for="" class="text-info h5">
                                                                                Name</label>
                                                                            <input type="text" name="name"
                                                                                value="{{ $item->name }}"
                                                                                class="form-control ">
                                                                            @error('name')
                                                                                <p class="text-danger small">
                                                                                    {{ $message }}</p>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="mb-2">
                                                                            <label for=""
                                                                                class="text-info h5">Email</label>
                                                                            <input type="email" name="email"
                                                                                value="{{ $item->email }}"
                                                                                class="form-control ">
                                                                            @error('email')
                                                                                <p class="text-danger small">
                                                                                    {{ $message }}
                                                                                </p>
                                                                            @enderror
                                                                        </div>

                                                                        <div class="mb-2">
                                                                            <label for=""
                                                                                class="text-info h5">Contact
                                                                                No</label>
                                                                            <input type="number" name="contact"
                                                                                value="{{ $item->contact }}"
                                                                                class="form-control ">
                                                                            @error('contact')
                                                                                <p class="text-danger small">
                                                                                    {{ $message }}
                                                                                </p>
                                                                            @enderror
                                                                        </div>
                                                                        <div class="mb-2">
                                                                            <input type="submit" value="Update "
                                                                                class="btn btn-info w-100 text-white fw-bold fs-5">
                                                                        </div>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <a href="{{ route('home.user.view', $item->id) }}"
                                                class="btn btn-success rounded-2">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    @else
                        <img src="{{asset('images/add_User.png')}}" width="400px" alt="">
                    @endif
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
