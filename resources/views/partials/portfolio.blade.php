<section id="portfolio" data-scroll-index="3" class="portfolio-area theme-bg p-tb-100">
    <div class="container">
        <div class="row pb-90 pt-90">
            <div class="col-xl-7">
                <div class="seaction-heading">
                    <h2>Portfolio <span></span></h2>
                </div>
            </div>
        </div>
        <div class="row gallery">
            @foreach($portfolioItems as $portfolioItem)
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-portfolio">
                        <div class="flip-card">
                            <div class="flip-card-inner portfolio-img">
                                <div class="flip-card-front">
                                    <img height="200px;" src="{{ $portfolioItem['image'] }}"
                                         alt="{{ $portfolioItem['alt_image'] }}">
                                </div>
                                <div class="flip-card-back">
                                    <h3>{{ $portfolioItem['title'] }}</h3>
                                    <p>Stack: {{ $portfolioItem['stack'] }}</p>
                                    @if(!empty($portfolioItem['url']))
                                        <a href="{{ $portfolioItem['url'] }}" target="_blank">
                                            <i class="ion-earth link"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
