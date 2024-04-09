
<div>

    <h1 class="mb-2 h3">Create student account</h1>
    <p class="mb-0">Already a member?<a href="{{ route('student.login') }}" wire:navigate> Log in</a></p>

    <!-- Form START -->
    <form class="mt-4 text-start">
        @csrf
        <div class="row mb-3">
            <!-- first name -->
            <div class="col-6">
                <label class="form-label">First Name</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" name="first_name">
                @error('first_name') <span class="invalid-feedback"><small><i>{{ $message }}</i></small></span> @enderror
            </div>
            <!-- last name -->
            <div class="col-6">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" name="last_name">
                @error('last_name') <span class="invalid-feedback"><small><i>{{ $message }}</i></small></span> @enderror
            </div>
        </div>
        <!-- Email -->
        <div class="mb-3">
            <label class="form-label">Enter email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email">
            @error('email') <span class="invalid-feedback"><small><i>{{ $message }}</i></small></span> @enderror
        </div>
        <!-- Password -->
        <div class="mb-4 position-relative">
            <label class="form-label">Create password</label>
            <input class="form-control fakepassword @error('password') is-invalid @enderror" type="password" id="psw-input" name="password">
            <span class="p-0 mt-3 position-absolute top-50 end-0 translate-middle-y">
                <i class="p-2 cursor-pointer fakepasswordicon fas fa-eye-slash"></i>
            </span>
            @error('password') <span class="invalid-feedback position-absolute"><small><i>{{ $message }}</i></small></span> @enderror
        </div>
        <!-- Remember me -->
        <div class="mb-3">
            <input type="checkbox" class="form-check-input" id="rememberCheck" required>
            <label class="form-check-label" for="rememberCheck">I accept the <a href="http://" wire:navigate>Terms and Conditions</a></label>
        </div>
        <!-- Button -->
        <div><button type="submit" class="mb-0 btn btn-primary w-100">Sign up</button></div>

        <!-- Divider -->
        <div class="my-4 position-relative">
            <hr>
            <p class="px-1 small position-absolute top-50 start-50 translate-middle bg-mode px-sm-2">Or sign in with</p>
        </div>

        <!-- Google and facebook button -->
        <div class="gap-3 vstack">
            <a href="#" class="mb-0 btn btn-white"><i class="fab fa-fw fa-google text-google-icon me-2"></i> Google</a>
        </div>

        <!-- Copyright -->
        <div class="mt-3 text-center text-primary-hover"> Copyrights {{date('Y')}} {{config('app.name')}}.</div>
    </form>
    <!-- Form END -->
</div>


