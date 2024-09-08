<x-layout>
    <div class="container mx-auto p-4">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">Create New Product</h1>

            <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf

                <div class="form-control">
                    <label for="name" class="label">
                        <span class="label-text">Product Name</span>
                    </label>
                    <input type="text" id="name" name="name" class="input input-bordered w-full"
                        value="{{ old('name') }}" required>
                    @error('name')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="image" class="label">
                        <span class="label-text">Product Image</span>
                    </label>
                    <input type="file" id="image" name="image" class="file-input file-input-bordered w-full">
                    @error('image')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="category" class="label">
                        <span class="label-text">Category</span>
                    </label>
                    <input type="text" id="category" name="category" class="input input-bordered w-full"
                        value="{{ old('category') }}" required>
                    @error('category')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="description" class="label">
                        <span class="label-text">Description</span>
                    </label>
                    <textarea id="description" name="description" class="textarea textarea-bordered w-full">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="price" class="label">
                        <span class="label-text">Price</span>
                    </label>
                    <input type="number" id="price" name="price" class="input input-bordered w-full"
                        step="0.01" value="{{ old('price') }}" required>
                    @error('price')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="quantity" class="label">
                        <span class="label-text">Quantity</span>
                    </label>
                    <input type="number" id="quantity" name="quantity" class="input input-bordered w-full"
                        value="{{ old('quantity') }}" required>
                    @error('quantity')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="pre_order" class="label">
                        <span class="label-text">Pre-Order</span>
                    </label>
                    <input type="checkbox" id="pre_order" name="pre_order" class="checkbox" value="1"
                        {{ old('pre_order') ? 'checked' : '' }}>
                    @error('pre_order')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="condition" class="label">
                        <span class="label-text">Condition</span>
                    </label>
                    <select id="condition" name="condition" class="select select-bordered w-full" required>
                        <option value="brandnew" {{ old('condition') == 'brandnew' ? 'selected' : '' }}>Brand New
                        </option>
                        <option value="used" {{ old('condition') == 'used' ? 'selected' : '' }}>Used</option>
                    </select>
                    @error('condition')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary mt-4">Create Product</button>
            </form>
        </div>
    </div>
</x-layout>
