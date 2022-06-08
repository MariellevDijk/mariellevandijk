<section id="werkervaring" data-scroll-index="1" class="about-area theme-bg p-tb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="about-content">
                    <h2>{{ @trans('general.aboutme') }}<span></span></h2>
                    <p style="font-size: 20px">
                    {{ @trans('general.aboutme-text') }}<br>
                    {{ @trans('general.aboutme-text2') }}<br>
                    {{ @trans('general.aboutme-text3') }}
                    </p>
                    <div class="about-personal-info">
                        <ul>
                            <li>
                                <span class="info-title">{{ @trans('general.name') }}:</span>
                                <span class="info-details">{{ @trans('general.myName') }}</span>
                            </li>
                            <li>
                                <span class="info-title">Email:</span>
                                <span class="info-details">{{ @trans('general.email') }}</span>
                            </li>
                            <li>
                                <span class="info-title">Github:</span>
                                <span class="info-details"><a>{{ @trans('general.github') }}</a></span>
                            </li>
                            <li>
                                <span class="info-title">{{ @trans('general.location') }}:</span>
                                <span class="info-details">{{ @trans('general.locationPlace') }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="about-btn">
                        <a href="https://www.linkedin.com/in/mariellevdijk/" class="single-btn mr-3 white-btn">{{ @trans('general.linkedin') }}</a>
                        <a href="mailto:hireme@marielle.dev" class="single-btn red-btn">{{ @trans('general.hireme') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-6">
                <div class="about-img-content">
                    <div class="about-img">
                        <img src="img/about/marielle.png" alt="About Section">
                    </div>
                </div>
            </div>
        </div>
{{--        @include('partials/skill-experience')--}}
    </div>
</section>
