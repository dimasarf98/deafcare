<div class="square">
    <a href="{{$url}}" class="card-module card h-100 w-100 rounded-xl @if(!$bgColor) bg-danger @endif" @if($bgColor) style="background-color: {{$bgColor}}" @endif>
        <div class="card-body text-light d-flex justify-content-center align-items-center">
            <i class="{{$iconClass}}" style="font-size: 2.5rem"></i>
        </div>
    </a>
</div>
<p class="font-weight-bold text-dark text-uppercase small mt-2 mb-0 text-center" style="line-height: 1rem">{{$title}}</p>