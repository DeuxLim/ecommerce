<x-layout>
    <form action="/register" method="POST">
        @csrf
        <div class="flex flex-col gap-6">
            <x-forms.input title="First Name" label="first_name" type="text" placeholder="John" required/>
            <x-forms.input title="Last Name" label="last_name" type="text" placeholder="Doe" required/>
            <x-forms.input title="Username" label="username" type="text" placeholder="JohnDoe" required/>
            <x-forms.input title="Email" label="email" type="email" placeholder="JohnDoe@gmail.com" required/>
            <x-forms.input title="Password" label="password" type="password" placeholder="****" required/>
            <x-forms.input title="Confirm Password" label="password_confirmation" type="password" placeholder="****" required/>
            <div>
                <button>Submit</button>
            </div>
        </div>
    </form>
</x-layout>
