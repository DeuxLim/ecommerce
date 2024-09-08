<x-layout>
    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col w-full">
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                <form class="card-body " action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">First Name</span>
                        </label>
                        <input type="text" placeholder="First name" name="first_name"
                            class="input input-bordered @error('first_name') input-error @enderror"
                            value="{{ old('first_name') }}" required />
                        @error('first_name')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Last Name</span>
                        </label>
                        <input type="text" placeholder="Last name" name="last_name"
                            class="input input-bordered @error('last_name') input-error @enderror"
                            value="{{ old('last_name') }}" required />
                        @error('last_name')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Username</span>
                        </label>
                        <input type="text" placeholder="Last name" name="username"
                            class="input input-bordered @error('username') input-error @enderror"
                            value="{{ old('username') }}" required />
                        @error('username')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" placeholder="email" name="email"
                            class="input input-bordered @error('email') input-error @enderror" required />
                        @error('email')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="password" name="password"
                            class="input input-bordered @error('password') input-error @enderror" required />
                        @error('password')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Confirm Password</span>
                        </label>
                        <input type="password" placeholder="Confirm password" name="password_confirmation"
                            class="input input-bordered @error('password_confirmation') input-error @enderror"
                            required />
                        @error('password_confirmation')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control pt-4">
                        <label class="label">
                            <span class="label-text">Are you also selling products?</span>
                            <input type="checkbox" name="is_seller" class="checkbox" />
                        </label>
                        @error('is_seller')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Create Account</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
