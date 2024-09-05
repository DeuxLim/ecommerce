<x-layout>
    <form action="/register" method="POST">
        @csrf
        <div class="flex flex-col">
            <div>
                <label for="first_name">First Name</label>
                <input type="text" name="first_name">
                @error('first_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name">
                @error('last_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="username">Username</label>
                <input type="text" name="username">
                @error('username')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" name="email">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password">Password</label>
                <input type="text" name="password">
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="password_confirmation">Confirm Password</label>
                <input type="text" name="password_confirmation">
                @error('password_confirmation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <button>Submit</button>
            </div>
        </div>
    </form>
</x-layout>
