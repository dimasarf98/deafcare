@props([
'label' => null,
'name',
'id' => 'xInput'.Str::random(8),
'class' => null,
'rows' => 3,
'value' => null,
'required' => false,
'placeholder' => null
])

<div class="form-group">
    @if($label)
        <label class="font-weight-bold" for="{{ $id }}">{{ $label }} @if($required) <span class="text-danger">*</span> @endif</label>
    @endif
    <textarea {{ $attributes->merge([
        'class' => ($class ?? ' ').' form-control'.($errors->has($name) ? ' is-invalid' : ''),
        'name' => $name,
        'id' => $id,
        'rows' => $rows,
        'placeholder' => ($placeholder ?? '')
    ]) }} >{{ old($name) ?? ($value ?? '') }}</textarea>
    @error($name)
    <small class="invalid-feedback" role="alert">
        {{ $message }}
    </small>
    @enderror
</div>
