<div class="db-breadcrumb">
    <h4 class="breadcrumb-title">{{ $text1 }}</h4>
    <ul class="db-breadcrumb-list">
    <li><a href="{{ $link1 }}"><i class="fa fa-tachometer"></i>{{ $text2 }}</a></li>
    <li><a href="{{ $link2 }}">{{ $text3 }}</a></li>
    @if($text4 != null)
    <li><a href="{{ $link3 }}">{{ $text4 }}</a></li>
    @endif
    @if($text5 != null)
    <li><a href="{{ $link4 }}">{{ $text5 }}</a></li>
    @endif
    </ul>
</div>
