@props([
    'label' => null,
    'name',
    'type' => 'text',
    'id' => 'xInput'.Str::random(8),
    'class' => null,
    'required' => false,
    'value' => null,
])

<div class="form-group">
    @if($label)
        <label class="font-weight-bold" for="{{ $id }}">{{ $label }} @if($required) <span class="text-danger">*</span> @endif</label>
    @endif
    <input {{ $attributes->merge([
        'class' => 'form-control '.($class ?? ' '). ($errors->has($name) ? ' is-invalid' : ''),
        'type' => $type,
        'name' => $name,
        'id' => $id,
        'value' => (old($name) ?? ($value ?? ''))
    ]) }}
           @if($required) required @endif/>
    @error($name)
    <small class="invalid-feedback" role="alert">
        {{ $message }}
    </small>
    @enderror
</div>
