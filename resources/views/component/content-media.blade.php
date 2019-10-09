@php
    $id = uniqid();
@endphp

<div id="content-media-{{$id}}">
    {!! $slot !!}
</div>

@push('footer')
    <script>
        // LazyLoad and FancyBox support
        $("#content-media-{{$id}}").find("img").each(function () {
            @if($fancybox ?? false)
            $(this).wrap('<a data-fancybox="gallery" href="' + $(this).attr('src') + '"></a>');
            @endif
            @if($lazyload ?? false)
            $(this).attr('data-original', $(this).attr('src'));
            $(this).removeAttr('src');
            @endif
        });
        @if($lazyload ?? false)
        $("img").lazyload({effect: "fadeIn"});
        @endif
    </script>
@endpush