<section class="main-section" id="werkervaring">
    <div class="container">
        <h2>Werkervaring</h2>
        <div class="experienceFilter">
            <ul class="Experience-nav wow fadeIn delay-02s">
                <li><a href="#" data-filter-experience="*" class="current-experience">Alles</a></li>
                <li><a href="#" data-filter-experience=".job">Werkgevers</a></li>
                <li><a href="#" data-filter-experience=".internship">Stages</a></li>
            </ul>
        </div>
        <div class="row werkervaring">
            <div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s ervaring">
                <div class="experienceContainer wow fadeInUp delay-04s">
                    @foreach($experiences as $experience)
                        <div class="experience-box {{ implode(' ', $experience['types']) }}">
                            <img class="experience-image" src="{{ $experience['image'] }}" alt="{{ $experience['alt_img'] }}">
                            <h3 class="experience-title">{{ $experience['title'] }}</h3>
                            <h5 class="experience-period">{{ $experience['period'] }}</h5>
                            <h6 class="experience-stack">{{ implode(', ', $experience['stack']) }}</h6>
                            <p class="experience-description">{{ $experience['description'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>