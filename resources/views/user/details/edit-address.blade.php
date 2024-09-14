<x-layout>
    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col w-full">
            <div class="card bg-base-100 w-full max-w-md shrink-0 shadow-2xl">
                <form class="card-body" action="{{ route('user.address.update') }}" method="POST">
                    @csrf
                    @method('PUT') 
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Address Line 1</span>
                        </label>
                        <input type="text" placeholder="Address Line 1" name="address_line_1"
                            class="input input-bordered @error('address_line_1') input-error @enderror"
                            value="{{ old('address_line_1', $user->address->address_line_1 ?? '') }}" required />
                        @error('address_line_1')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Address Line 2</span>
                        </label>
                        <input type="text" placeholder="Address Line 2 (Optional)" name="address_line_2"
                            class="input input-bordered @error('address_line_2') input-error @enderror"
                            value="{{ old('address_line_2', $user->address->address_line_2 ?? '') }}" />
                        @error('address_line_2')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">City</span>
                        </label>
                        <input type="text" placeholder="City" name="city"
                            class="input input-bordered @error('city') input-error @enderror"
                            value="{{ old('city', $user->address->city ?? '') }}" required />
                        @error('city')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">State</span>
                        </label>
                        <input type="text" placeholder="State" name="state"
                            class="input input-bordered @error('state') input-error @enderror"
                            value="{{ old('state', $user->address->state ?? '') }}" required />
                        @error('state')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Country</span>
                        </label>
                        <input type="text" placeholder="Country" name="country"
                            class="input input-bordered @error('country') input-error @enderror"
                            value="{{ old('country', $user->address->country ?? '') }}" required />
                        @error('country')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Postal Code</span>
                        </label>
                        <input type="text" placeholder="Postal Code" name="postal_code"
                            class="input input-bordered @error('postal_code') input-error @enderror"
                            value="{{ old('postal_code', $user->address->postal_code ?? '') }}" required />
                        @error('postal_code')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Phone</span>
                        </label>
                        <input type="text" placeholder="Phone (Optional)" name="phone"
                            class="input input-bordered @error('phone') input-error @enderror"
                            value="{{ old('phone', $user->address->phone ?? '') }}" />
                        @error('phone')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Set as Default Address</span>
                        </label>
                        <input type="checkbox" name="is_default" class="checkbox"
                            {{ old('is_default', $user->address->is_default ?? false) ? 'checked' : '' }} />
                        @error('is_default')
                            <span class="text-error mt-1">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-control mt-6">
                        <button type="submit" class="btn btn-primary">Save Address</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
