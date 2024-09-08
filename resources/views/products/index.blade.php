<x-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 p-6">
        @foreach ($products as $product)
            <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                <!-- Image -->
                <img src="{{ asset($product->image) }}" alt="Product Image" class="w-full h-48 object-cover">

                <!-- Content -->
                <div class="p-4">
                    <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $product->name }}</h2>
                    <p class="text-sm text-gray-600 mb-2">{{ $product->category }}</p>
                    <p class="text-gray-700 mb-2">{{ $product->description }}</p>
                    <p class="text-lg font-bold text-gray-900 mb-2">${{ number_format($product->price, 2) }}</p>
                    <p class="text-sm text-gray-600 mb-2">Quantity: {{ $product->quantity }}</p>
                    <p class="text-sm text-gray-600 mb-2">Condition: {{ $product->condition }}</p>

                    <!-- Pre-order Badge -->
                    @if ($product->pre_order)
                        <span
                            class="inline-block bg-yellow-200 text-yellow-800 text-xs font-medium py-1 px-2 rounded-full">Pre-Order</span>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
