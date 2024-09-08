
@props(['title', 'label', 'type', 'placeholder', 'isRequired' => false, 'placeholder' => ''])
<div>
    <label for="{{ $label }}">{{ $title }}</label>

    <input
        type="{{ $type }}"
        name="{{ $label }}"
        {{ $attributes->merge(['placeholder' => $placeholder]) }}
        value={{ old($label) }}
    >

    @error($label)
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
