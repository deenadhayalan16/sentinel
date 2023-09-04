@extends("main")
@section("content")
<div class="row">
    <div class="col-12 border mt-5">
        <h3 class="text-center mt-3">Login Page</h3>

        @if(Session::has('error'))
        <div class="alert alert-danger">
            {{Session::get('error')}}
        </div>
        @endif

        <form action="{{ route('loginpage') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter Email" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
            <span>Create New Account ? <a href="{{ route('register') }}">Sign Up</a></span>
        </form>
    </div>
</div>
@endsection