@extends('master')


@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="border col-md-4 offset-md-4 mt-5 mb-5 p-3">
            <form method="post" action="login">
            <div class="form-group">
            @csrf

                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
            <button type="submit" class="btn btn-primary my-big-btn">Submit</button>
            </form>
        </div>
    </div>
</div>


@endsection