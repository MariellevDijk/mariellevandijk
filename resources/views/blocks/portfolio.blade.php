<section class="main-section paddind" style="height: 100%" id="portfolio">
    <div class="container">
        <h2>Portfolio</h2>
        <div class="portfolioFilter">
            <ul class="Portfolio-nav wow fadeIn delay-02s">
                <li><a href="#" data-filter-portfolio="*" class="current-portfolio">Alles</a></li>
                <li><a href="#" data-filter-portfolio=".backend">Backend</a></li>
                <li><a href="#" data-filter-portfolio=".frontend">Frontend</a></li>
                <li><a href="#" data-filter-portfolio=".design">Design</a></li>
            </ul>
        </div>

    </div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
        @foreach($portfolioItems as $portfolioItem)
            <div class=" Portfolio-box {{ implode(' ', $portfolioItem['types']) }}">
                <img src="{{ $portfolioItem['image'] }}" alt="{{ $portfolioItem['alt_image'] }}">
                <p class="no-style-link">
                    @if(empty($portfolioItem['url']))
                        {{ $portfolioItem['text_url'] }}
                    @else
                        <a href="{{ $portfolioItem['url'] }}">{{ $portfolioItem['text_url'] }}</a>
                    @endif
                </p>
                <h3 class="Portfolio-item-title">{{ $portfolioItem['title'] }}</h3>
            </div>
        @endforeach
    </div>
</section>