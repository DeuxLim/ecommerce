<nav class="sticky h-10 top-0 bg-emerald-500">
    <div class="flex justify-between items-center h-full">
        <div>
            <img src="" alt="LOGO HERE">
        </div>

        <div>
            <input type="text" placeholder="Search...">
        </div>

        <div>
            <ul class="flex gap-4">
                @guest
                <!--Guest-->
                <li><a href="{{ route('register') }}">SIGN UP</a></li>
                <li>SIGN IN</li>
                @endguest

                @auth
                <!--User-->
                <li>Cart</li>
                <li>Favorites</li>
                <li>User</li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit">logout</button>
                    </form>
                </li>
                @endauth

                <!--Seller-->
                {{-- <li>Orders</li>
                <li>Inventory</li> --}}
            </ul>
        </div>
    </div>
</nav>
