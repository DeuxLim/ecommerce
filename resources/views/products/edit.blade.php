<x-layout>
    <div class="max-w-3xl mx-auto p-6 bg-gray-50 border border-gray-200 rounded-lg shadow-lg">
        <h1 class="text-4xl font-bold text-gray-800 mb-6">Edit Product</h1>

        <form action="{{ route('product.update', ['product' => $product->id]) }}" method="POST"
            enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Image Upload -->
            <div>
                <label for="image" class="block text-sm font-medium text-gray-700 mb-2">Product Image</label>
                <input type="file" id="image" name="image"
                    class="block w-full text-gray-500 border-gray-300 rounded-lg">
                @if ($product->image)
                    <img src="{{ asset($product->image) }}" alt="Current Product Image"
                        class="mt-4 w-32 h-auto object-cover rounded-lg">
                @endif
            </div>

            <!-- Product Name -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Product Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}"
                    class="block w-full p-3 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Category -->
            <div>
                <label for="category" class="block text-sm font-medium text-gray-700 mb-2">Category</label>
                <input type="text" id="category" name="category" value="{{ old('category', $product->category) }}"
                    class="block w-full p-3 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('category')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Description -->
            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
                <textarea id="description" name="description" rows="4"
                    class="block w-full p-3 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">{{ old('description', $product->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Price -->
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price ($)</label>
                <input type="number" step="0.01" id="price" name="price"
                    value="{{ old('price', $product->price) }}"
                    class="block w-full p-3 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('price')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Quantity -->
            <div>
                <label for="quantity" class="block text-sm font-medium text-gray-700 mb-2">Quantity</label>
                <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $product->quantity) }}"
                    class="block w-full p-3 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('quantity')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Product Condition -->
            <div>
                <label for="condition" class="block text-sm font-medium text-gray-700 mb-2">Condition</label>
                <input type="text" id="condition" name="condition"
                    value="{{ old('condition', $product->condition) }}"
                    class="block w-full p-3 border-gray-300 rounded-lg shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
                @error('condition')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <!-- Pre-Order Option -->
            <div>
                <label for="pre_order" class="inline-flex items-center">
                    <input type="checkbox" id="pre_order" name="pre_order" value="1"
                        {{ old('pre_order', $product->pre_order) ? 'checked' : '' }}
                        class="form-checkbox h-5 w-5 text-blue-600">
                    <span class="ml-2 text-sm text-gray-700">Pre-Order</span>
                </label>
            </div>

            <!-- Submit Button -->
            <div>
                <button type="submit"
                    class="px-6 py-3 bg-blue-500 text-white font-semibold rounded-lg shadow-sm hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-500 focus:ring-opacity-50">Update
                    Product</button>
            </div>
        </form>

        <!-- Back Button -->
        <div class="mt-6">
            <a href="{{ route('product.show', ['product' => $product->id]) }}"
                class="inline-block px-4 py-2 bg-gray-300 text-gray-700 rounded-lg">Back to Product</a>
        </div>
    </div>
</x-layout>
