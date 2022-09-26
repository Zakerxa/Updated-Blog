<x-layout>
    <div class="row justify-content-center m-0">
        <div class="col-11 col-md-8 col-lg-4 pt-5 pb-5 mb-5 mt-4">
            <div class="card shadow p-4 pb-5">
                <h3 class="text-center p-2 pb-3">Create Account</h3>
                <p class="text-danger">{{$errors->first()}}</p>
                <form method="POST">
                    @csrf
                    <div class="form-floating mb-3">
                        <input type="text" name="username" value="{{old('username')}}" class="form-control" id="name" placeholder="Username">
                        <label for="name">Username</label>
                      </div>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" value="{{old('email')}}" class="form-control" id="floatingInput" placeholder="name@gmail.com">
                        <label for="floatingInput">Email address</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                    <button type="submit" class="btn btn-dark text-center w-100 mt-4 fw-bold">Register</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
