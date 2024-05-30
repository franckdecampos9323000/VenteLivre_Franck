<!--begin::Breadcrumb-->
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0">
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="{{ $link1 }}" class="text-muted text-hover-primary">{{ $text1 }}</a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="{{ $link2 }}" class="text-muted text-hover-primary">{{ $text2 }}</a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-400 w-5px h-2px"></span>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="{{ $link3 }}" class="text-muted text-hover-primary">{{ $text3 }}</a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    @if($text4 != null)
    <li class="breadcrumb-item">
        <span class="{{ $separator }}"></span>
    </li>
    @endif
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="{{ $link4 }}" class="text-muted text-hover-primary">{{ $text4 }}</a>
    </li>
    <!--end::Item-->
    <!--begin::Item-->
    @if($text5 != null)
    <li class="breadcrumb-item">
        <span class="{{ $separator }}"></span>
    </li>
    @endif
    <!--end::Item-->
    <!--begin::Item-->
    <li class="breadcrumb-item text-muted">
        <a href="{{ $link5 }}" class="text-muted text-hover-primary">{{ $text5 }}</a>
    </li>
    <!--end::Item-->
</ul>
<!--end::Breadcrumb-->
</div>
