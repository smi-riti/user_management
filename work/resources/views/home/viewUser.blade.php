@extends('home.base')
@section('content')
<div class="container mt-5">
    <div class="col-6 mx-auto">
        
        <table class="table table-bordered border-dark ">
            <tr>
                <th class="bg-primary text-white fs-4 fw-bold" colspan="4"><i class="bi bi-person-circle"></i> 
                   View {{$user->first_name}}'s Details
                </th>
            </tr>
            <tr>
                <th colspan="2" >Name</th>
                <td colspan="2" class="text-capitalize">{{$user->name}}</td>
            </tr>
            <tr>
                <th colspan="2">Email</th>
                <td colspan="2">{{$user->email}}</td>
            </tr>
            <tr>
                <th colspan="2">Contact no</th>
                <td colspan="2">{{$user->contact}}</td>
            </tr>
           
            
            
        </table>

        <a href="{{route('dashboard')}}" class="btn btn-primary text-white">Go Back</a>
    </div>
</div>
    
@endsection