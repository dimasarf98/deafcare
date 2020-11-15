
<a {{ $attributes->merge(['class' => 'card rounded-xl link-style-none']) }} href="{{$url}}">
    <div class="card-body d-flex">
        <img class="rounded mr-3" src="{{$imgSrc}}" alt="..." style="width: 72px; height:72px; object-fit:cover">
        <div class="flex-fill d-flex flex-column justify-content-around">
            <p class="font-weight-bold mb-1" style="line-height:1rem">{{$title}}</p>
            <p class="mb-0" style="line-height:1rem">
                <small>{{$description}}</small>
            </p>
        </div>
    </div>
</a>