<div class="navbar bg-base-100">
    <div class="navbar-start">
        <a href="/" class="btn btn-ghost text-xl">ESSENTIALS</a>
    </div>

    <div class="navbar-center lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li>
                <details>
                    <summary>Men</summary>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details>
                    <summary>Women</summary>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </details>
            </li>
            <li>
                <details>
                    <summary>Brands</summary>
                    <ul class="p-2">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </details>
            </li>
        </ul>
    </div>

    <div class="navbar-end">
        @guest
            <ul class="menu menu-horizontal px-1">
                <li>
                    <a href="{{ route('register') }}"
                        class="{{ Route::is('register') ? 'btn btn-primary' : 'btn btn-ghost' }}">
                        Sign up
                    </a>
                </li>
                <li>
                    <a href="{{ route('login') }}" class="{{ Route::is('login') ? 'btn btn-primary' : 'btn btn-ghost' }}">
                        Login
                    </a>
                </li>
            </ul>
        @endguest

        @auth
            {{-- cart --}}
            <div class="menu menu-horizontal px-1">
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                        <div class="indicator">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                            <span class="badge badge-sm indicator-item">8</span>
                        </div>
                    </div>

                    <div tabindex="0" class="card card-compact dropdown-content bg-base-100 z-[1] mt-3 w-52 shadow">
                        <div class="card-body">
                            <span class="text-lg font-bold">8 Items</span>
                            <span class="text-info">Subtotal: $999</span>
                            <div class="card-actions">
                                <button class="btn btn-primary btn-block">View cart</button>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Profile - dropdown --}}
                <div class="dropdown dropdown-end">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component"
                                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                        </div>
                    </div>

                    <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                        <li>
                            <a href="{{ route('user.address.edit') }}">
                                Setup Contact Details
                            </a> 
                        </li>

                        {{-- Check if user is not verified --}}
                        @if (!auth()->user()->hasVerifiedEmail())
                        <!-- Form to resend verification email -->
                        <li>
                            <form id="resend-verification-form" action="{{ route('verification.send') }}" method="POST">
                                @csrf
                                <a class="justify-between">
                                    <button>Verify Email</button>
                                </a>
                            </form>
                        </li>
                        @endif


                        @can('create', App\Models\Product::class)
                            <li>
                                <a href="{{ route('product.create') }}">Post a product listing</a>
                            </li>
                        @endcan
                        <li><a>Settings</a></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @endauth
    </div>
</div>
