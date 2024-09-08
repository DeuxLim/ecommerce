<x-layout>
    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col w-full">
            <div class="card bg-base-100 w-full max-w-sm shrink-0 shadow-2xl">
                <h1 class="text-3xl font-bold text-center mt-8">BRANDNAME</h1>
                <form class="card-body " action="{{ route('login') }}" method="POST">
                    @csrf
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
                        <label class="label">
                            <a href="#" class="label-text-alt link link-hover">Forgot password?</a>
                            <a href="{{ route('register') }}" class="label-text-alt link link-hover">Create an
                                account</a>
                        </label>
                        @error('password')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
