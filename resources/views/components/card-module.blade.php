<div class="square">
    <a href="{{$url}}" class="card-module card h-100 w-100 rounded-xl @if(!$bgColor) bg-danger @endif" @if($bgColor) style="background-color: {{$bgColor}}" @endif>
        <div class="card-body text-light d-flex justify-content-center align-items-center">
            <h2 class="mb-0">
                <i class="{{$iconClass}}"></i>
            </h2>
        </div>
    </a>
</div>
<p class="font-weight-bold text-dark text-uppercase small mt-2 mb-0 text-center" style="line-height: 1rem">{{$title}}</p>