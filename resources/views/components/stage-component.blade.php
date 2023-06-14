<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="link" content="{!! $link !!}">
<link rel="stylesheet" href="{{ asset("css/stage.css") }}">
<div class="stage-list">
    {{-- 1. data dalam bentuk array untuk dijadikan stage button. Jika ada nested array maka dijadikan dropdown stage button nya --}}
    @php
        $stage_counter = 1;
        $flatten_data = collect($data)->flatten();
    @endphp
    @foreach ($data as $key => $item)
        @if (!is_array($item))
            @if ($stage_counter <= $stage)
                <a href="#" onclick="updateStage(this)" data-stage="{{$stage_counter}}" data-model="{!! $model_class !!}" data-id="{{$id}}" class="stage-button stage-is-done color-is-green">{{$item}}</a>
            @else
                <a href="#" onclick="updateStage(this)" data-stage="{{$stage_counter}}" data-model="{!! $model_class !!}" data-id="{{$id}}" class="stage-button stage-is-not-active color-is-green">{{$item}}</a>
            @endif
            @php
                $stage_counter++;
            @endphp
        @else
            @if ($stage_counter <= $stage)
                <a href="#" class="stage-button stage-is-done color-is-green" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        {{-- <span>{{$key}}</span> --}}
                        @if (count($item) >= $stage)
                            <span>{{$flatten_data[$stage - 1]}}</span>
                        @else 
                            <span>{{$flatten_data[0]}}</span>
                        @endif
                        <span>
                            <i class="bi bi-caret-down-fill text-white"></i>
                        </span>
                    </div>
                </a>
            @else
                <a href="#" class="stage-button stage-is-not-active color-is-green" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <span>{{$key}}</span>
                        <span>
                            <i class="bi bi-caret-down-fill text-white"></i>
                        </span>
                    </div>
                </a>
            @endif
                <ul class="dropdown-menu">
                    @foreach ($item as $i)
                        <li><a class="dropdown-item" href="#" onclick="updateStage(this)" data-stage="{{$stage_counter}}" data-model="{!! $model_class !!}" data-id="{{$id}}">{{$i}}</a></li>
                        @php
                            $stage_counter++;
                        @endphp
                    @endforeach
                </ul>
        @endif
    @endforeach

    {{-- 2. link untuk ngubah stage bisa di pakai di model lain --}}
    <script src="{{ asset("/assets/js/custom/stage.js") }}"></script>
</div>