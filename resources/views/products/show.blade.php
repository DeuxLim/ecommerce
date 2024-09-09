<x-layout>
    <div class="max-w-4xl mx-auto p-6">
        <!-- Product Image and Details -->
        <div class="flex flex-col lg:flex-row">
            <!-- Image Section -->
            <div class="lg:w-1/2 mb-6 lg:mb-0">
                <img src="{{ asset($product->image) }}" alt="Product Image"
                    class="w-full h-auto object-cover rounded-lg shadow-md">
            </div>

            <!-- Details Section -->
            <div class="lg:w-1/2 lg:pl-6">
                <h1 class="text-3xl font-semibold text-gray-800 mb-4">{{ $product->name }}</h1>
                <p class="text-lg text-gray-600 mb-2">Category: {{ $product->category }}</p>
                <p class="text-gray-700 mb-4">{{ $product->description }}</p>
                <p class="text-2xl font-bold text-gray-900 mb-4">${{ number_format($product->price, 2) }}</p>
                <p class="text-sm text-gray-600 mb-2">Quantity: {{ $product->quantity }}</p>
                <p class="text-sm text-gray-600 mb-4">Condition: {{ $product->condition }}</p>

                <!-- Pre-order Badge -->
                @if ($product->pre_order)
                    <span
                        class="inline-block bg-yellow-200 text-yellow-800 text-xs font-medium py-1 px-2 rounded-full">Pre-Order</span>
                @endif

                <!-- Action Buttons -->
                <div class="mt-6">
                    <button class="px-4 py-2 bg-blue-500 text-white rounded-lg">Add to Cart</button>
                    <button class="px-4 py-2 bg-red-500 text-white rounded-lg ml-4">Like</button>

                    {{-- @if (Auth::user()->isSeller()) --}}
                    <!-- Assuming you have a method to check if the user is a seller -->
                    <div class="mt-4">
                        <a href="{{ route('product.edit', ['product' => $product->id]) }}">
                            <button class="px-4 py-2 bg-green-500 text-white rounded-lg">Edit Product</button>
                        </a>
                        <button class="px-4 py-2 bg-gray-500 text-white rounded-lg ml-4">Delete Product</button>
                    </div>
                    {{-- @endif --}}
                </div>
            </div>
        </div>

        <!-- Reviews Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Customer Reviews</h2>
            <!-- Example reviews; replace with dynamic content -->
            <div class="bg-white border rounded-lg shadow-md p-4 mb-4">
                <h3 class="font-semibold text-gray-800">John Doe</h3>
                <p class="text-gray-600 mb-2">★★★★☆</p>
                <p class="text-gray-700">Great product! Really loved the quality.</p>
            </div>
            <div class="bg-white border rounded-lg shadow-md p-4">
                <h3 class="font-semibold text-gray-800">Jane Smith</h3>
                <p class="text-gray-600 mb-2">★★★☆☆</p>
                <p class="text-gray-700">Good, but it could be improved.</p>
            </div>
        </div>

        <!-- Related Products Section -->
        <div class="mt-12">
            <h2 class="text-2xl font-semibold text-gray-800 mb-4">Related Products</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($relatedProducts as $relatedProduct)
                    <a href="{{ route('product.show', ['product' => $relatedProduct->id]) }}"
                        class="bg-white border rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                        <!-- Image -->
                        <img src="{{ asset($relatedProduct->image) }}" alt="Product Image"
                            class="w-full h-48 object-cover">

                        <!-- Content -->
                        <div class="p-4">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $relatedProduct->name }}</h3>
                            <p class="text-gray-700 mb-2">${{ number_format($relatedProduct->price, 2) }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="{{ route('product.index') }}"
                class="inline-block px-4 py-2 bg-blue-500 text-white rounded-lg">Back to Products</a>
        </div>
    </div>
</x-layout>
