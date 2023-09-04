@extends("main")
@section("content")
<div class="row">
    <div class="col-12 border mt-5">
        <h3 class="text-center mt-3">Register Page</h3>
        <form action="{{ route('registerpage') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter Name" class="form-control">
                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control">
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="mobilenumber">Mobile Number</label>
                <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Enter Mobile Number" class="form-control">
                <span class="text-danger">@error('mobilenumber'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <input type="submit" value="Register" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
            <span>Create New Account ? <a href="{{ route('login') }}">Sign In</a></span>
        </form>
    </div>
</div>
@endsection