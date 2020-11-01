@props([
    'label' => null,
    'name',
    'id' => 'xInput'.Str::random(8),
    'class' => null,
    'required' => false,
    'placeholder' => null,
    'optionValues',
    'optionNames',
    'value' => null,
    'search' => false,
    'multiple' => false,
])

<div class="form-group d-flex flex-column">
    @if($label)
        <label class="font-weight-bold" for="{{ $id }}">{{ $label }} @if($required) <span class="text-danger">*</span> @endif</label>
    @endif
    <select {{ $attributes->merge([
        'class' => ($class ?? ' ').' form-control selectpicker '. ($errors->has($name) ? ' is-invalid' : ''),
        'name' => ($multiple ? $name.'[]' : $name),
        'id' => $id,
    ]) }} title="{{$placeholder ?? null}}"
            data-live-search="{{$search}}"
            @if($multiple) multiple @endif
            @if($required) required @endif>
        @foreach ($optionValues as $index => $optionValue)
            <option @if((collect(old($name))->contains($optionValue))) selected @elseif(collect($value)->contains($optionValue)) selected @endif value="{{$optionValue}}">{{$optionNames[$index]}}</option>
        @endforeach
    </select>
    @error($name)
    <small class="invalid-feedback" role="alert">
        {{ $message }}
    </small>
    @enderror
</div>
