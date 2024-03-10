@props(['image', 'title', 'description', 'phone'])


<div class="blog__area-item">
    <div class="blog__area-item-image">
        <img class="img__full" src="{{ asset($image) }}" alt="">
    </div>
    <div class="blog__area-item-content">
        <h4><a href="news-details.html">{{ $title }}</a></h4>
        <p>{{ $description }}</p>
    </div>
</div>
