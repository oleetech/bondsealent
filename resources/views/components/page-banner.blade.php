@props(['image', 'activePage', 'pageLinks'])


<div class="page__banner" data-background="{{ asset($image) }}">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page__banner-title">
                    <h1>{{ $activePage }}</h1>
                    <div class="page__banner-title-menu">
                        <ul>
                            @php
                                $i = 0
                            @endphp
                            @foreach ($pageLinks as $key => $pageLink)
                                <li>
                                    @if($i != 0)
                                        <span>-</span>
                                    @endif

                                    @if($i < count($pageLinks) - 1)
                                        <a href="{{ route($key) }}"> {{ $pageLink }} </a>
                                    @else
                                        {{ $pageLink }}
                                    @endif
                                </li>
                                @php
                                    $i++
                                @endphp
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
