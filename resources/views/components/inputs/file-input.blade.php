@props([
    'label' => null,
    'name',
    'type' => 'text',
    'idDom' => Str::random(),
    'id' => 'xInput'.Str::random(8),
    'class' => null,
    'required' => false,
    'value' => null,
])

<div id="{{$idDom}}">
    <div class="form-group">
        <label class="font-weight-bold" for="{{ $id }}">{{ $label }} @if($required) <span class="text-danger">*</span> @endif</label>
        <div class="custom-file">
            <input type="file" class="custom-file-input {{$errors->has($name) ? ' is-invalid' : ''}}" id="{{$id}}" name="{{$name}}">
            <label class="custom-file-label text-truncate" for="{{$id}}">Choose file</label>
            @error($name)
                <small class="invalid-feedback" role="alert">
                    {{$message}}
                </small>
            @enderror
        </div>
        <div class="w-100 d-flex justify-content-center">
            <img src="{{$value ?? ''}}" class="d-none mt-3 shadow rounded" alt="Placeholder" id="previewImg" style="max-height: 300px; max-width: 100%">
        </div>
    </div>
</div>

@push('scripts')
    <script>
        let component = $("#{{$idDom}}");
        component.ready(function () {
            $('#{{$id}}').on('change',function(){
                //get the file name
                let fileName = $(this).val();
                //replace the "Choose a file" label
                $(this).next('.custom-file-label').html(fileName);

                updatePreview();
            });
            function updatePreview(){
                let file = $('.custom-file-input')[0].files[0];
                if(file){
                    let reader = new FileReader();

                    reader.onload = function(){
                        component.find("#previewImg")
                            .attr("src", reader.result)
                            .removeClass("d-none");
                    }

                    reader.readAsDataURL(file);
                }
            }
            updatePreview();
        });
    </script>
@endpush
