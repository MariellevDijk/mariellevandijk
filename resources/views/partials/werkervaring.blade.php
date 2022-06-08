<section id="werkervaring" data-scroll-index="2" class="service-area theme-bg p-tb-100">
    <div class="container">
        <div class="row pb-90 pt-90">
            <div class="col-xl-7">
                <div class="seaction-heading">
                    <h2>{{ @trans('general.experience') }}<span></span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <ul class="werkervaring-nav">
                    <li id="werkgevers">{{ @trans('general.employers') }}</li>
                    <li id="internship">{{ @trans('general.internships') }}</li>
                    <li id="all">{{ @trans('general.all') }}</li>
                </ul>
            </div>
        </div>
        <div class="row">
            @foreach($experiences as $experience)
                <div class="col-xl-4 col-lg-4 col-md-6 {{ implode(' ', $experience['types']) }}">
                    <div class="single-service">
                        <img src="{{ $experience['image'] }}" alt="{{ $experience['alt_image'] }}" >
                        <h3 class="company-name">{{ @trans('general.' . $experience['company'] . '.title') }}</h3>
                        <span class="date-worked">{{ @trans('general.' . $experience['company'] . '.period') }}</span><br>
                        <span class="tech-stack">Stack: {{ @trans('general.' . $experience['company'] . '.stack') }}</span>
                        <p>{{ @trans('general.' . $experience['company'] . '.description') }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
