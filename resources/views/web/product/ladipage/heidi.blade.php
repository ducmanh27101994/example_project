@extends('/web/index')
@section('content')

<link rel="stylesheet"
    href="{{ asset('home/css/ladiframe.css') }}" />
<link rel="stylesheet"
    href="{{ asset('home/css/style_ladi.css') }}" />





<main>
    <section class="hero-section">
        <div class="hero-main">
            <div class="hero-background"></div>
            <div class="hero-kv">
                <div class="kv-light"></div>
                <div id="s-motion" class="kv-animation"></div>
                <div class="kv-scooter"></div>
            </div>
        </div>
        <div class="hero-copy">
            <div>
                <div class="subtitle">Built to Surpass</div>
                <div class="title">Gogoro <span>S1</span></div>
                <a href="/press/updates/" target="_blank" class="btn-cta">INTERESTED</a>
            </div>
        </div>
    </section>

    <section class="section section-break-a progressive-image">
        <div class="break-a-duration"></div>
        <div class="animation-layer">
            <div class="break-spotlight"></div>
            <div class="break-scooter"></div>
            <div class="break-words">
                <canvas></canvas>
            </div>
        </div>
    </section>

    <section class="section section-fast progressive-image">
        <div class="section-content">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="dash-line">
                        <div class="dash-line-top"></div>
                        <div class="dash-line-bottom"></div>
                    </div>
                    <h3 class="section-title section-title--animation">Sensational</h3>
                    <p class="section-description">Pure power in an instant. Super fast. Ultra smooth. Unbelievably
                        nimble. Infinitely more refined. This is riding on an entirely new level.</p>
                </div>
            </div>
        </div>

        <div class="key-number-wrapper">
            <div class="key-number-list">
                <div class="key-number__bg">
                    <div class="key-number-sizer"></div>
                </div>
                <div class="key-number-item">
                    <div class="key-number-sizer">
                        <div class="key-number d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-end">
                                <div class="key-number__value">3.7</div>
                                <div class="key-number__unit">SEC<br>0-50 KM/H<sup>*</sup></div>
                            </div>
                            <div class="key-number__content">Max Acceleration</div>
                        </div>
                    </div>
                </div>
                <div class="key-number-item">
                    <div class="key-number-sizer">
                        <div class="key-number d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-end">
                                <div class="key-number__value">7.2</div>
                                <div class="key-number__unit">kW @<br>5,000 RPM</div>
                            </div>
                            <div class="key-number__content">Motor Output</div>
                        </div>
                    </div>
                </div>
                <div class="key-number-item">
                    <div class="key-number-sizer">
                        <div class="key-number d-flex flex-column justify-content-between">
                            <div class="d-flex align-items-end">
                                <div class="key-number__value">202</div>
                                <div class="key-number__unit">NM<br>at the wheel</div>
                            </div>
                            <div class="key-number__content">Max Torque</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-colors">
        <input type="radio" id="color-gallery-ice" class="d-none" name="color-gallery" checked>
        <input type="radio" id="color-gallery-grey" class="d-none" name="color-gallery">
        <div class="section-colors-bg"></div>
        <div class="section-content">
            <div class="d-lg-flex justify-content-between align-items-center">
                <div class="color-gallery-content">
                    <h3 class="section-title section-title--animation">Simply Inspire</h3>
                    <div class="section-description">
                        <div class="color-gallery-captions">
                            <div class="color-gallery-caption color-gallery-caption--ice">
                                <p>Icy Grey breaks through the S Performance’s black tone, and it’s inspired by the
                                    polishing process of glacier, every detail has been dressed to stun. It’s a
                                    precision look that can’t be missed.</p>
                            </div>
                            <div class="color-gallery-caption color-gallery-caption--grey">
                                <p>Graphite Grey is inspired by the coolness of shadow and graphite’s muted texture,
                                    only for the most obvious reason. Enhance your cool look no matter which path you
                                    choose to take on.</p>
                            </div>
                        </div>
                        <div class="color-gallery-tabs">
                            <label class="color-gallery-tabs__btn color-gallery-tabs__btn--ice"
                                for="color-gallery-ice">Icy Grey</label>
                            <label class="color-gallery-tabs__btn color-gallery-tabs__btn--grey"
                                for="color-gallery-grey">Graphite Grey</label>
                        </div>
                    </div>
                </div>
                <div class="color-gallery-images">
                    <div class="color-gallery-image color-gallery-image--ice"></div>
                    <div class="color-gallery-image color-gallery-image--grey"></div>
                </div>
            </div>

        </div>
    </section>

    <section class="section section-design progressive-image">
        <div class="design-bg"></div>
        <div class="section-content">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="dash-line">
                        <div class="dash-line-top"></div>
                        <div class="dash-line-bottom"></div>
                    </div>
                    <h3 class="section-title section-title--animation">Perfectly Stealth</h3>
                    <p class="section-description">Every surface has been poured-over, polished, and crafted to elevate
                        you beyond the everyday. Built for the few who are constantly seeking more.</p>
                </div>
            </div>

            <div class="design-topics">
                <div class="design-topic">
                    <div class="design-topic__image">
                        <div class="image-design image-design--dashboard"></div>
                    </div>
                    <div class="design-topic__content">
                        <div>
                            <h4 class="subhead">Infinity Dashboard</h4>
                            <p>By unifying every surface in a suite of all-black finishes, it delivers even greater
                                focus on the brilliant full-spectrum display.</p>
                        </div>
                    </div>
                </div>
                <div class="design-topic">
                    <div class="design-topic__image">
                        <div class="image-design image-design--seat"></div>
                    </div>
                    <div class="design-topic__content">
                        <div>
                            <h4 class="subhead">S Performance Seat</h4>
                            <p>Dual-texture design featuring high grip material gives you even greater control during
                                the most aggressive racing maneuvers.</p>
                        </div>
                    </div>
                </div>
                <div class="design-topic">
                    <div class="design-topic__image">
                        <div class="image-design image-design--floor"></div>
                    </div>
                    <div class="design-topic__content">
                        <div>
                            <h4 class="subhead">S Performance Aluminum Floor Guard</h4>
                            <p>Premium Titanium-Black aluminum floor guard provides extra traction during the most
                                intense riding maneuvers.</p>
                        </div>
                    </div>
                </div>
                <div class="design-topic">
                    <div class="design-topic__image">
                        <div class="image-design image-design--wheel"></div>
                    </div>
                    <div class="design-topic__content">
                        <div>
                            <h4 class="subhead">Mirror Black Rims</h4>
                            <p>6-spoke rims in high-gloss Mirror Black finish captures the fluid reflections of every
                                streetlight it blurs past.</p>
                        </div>
                    </div>
                </div>
                <div class="design-topic design-topic--full">
                    <a target="_blank" href="https://shop.gogoro.com/collections/s-performance">You can build your own
                        Gogoro S1 with S Performance accessory.</a>
                </div>
            </div>
        </div>

    </section>
  
    <section class="section section-performance progressive-image">
        <div class="section-content">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <h3 class="section-title section-title--animation">Be First</h3>
                    <p class="section-description">We’ve performance-tuned our entire drive train to unleash torque like
                        never before. Specialized G1-S Performance motor and racing-grade carbon belts make it faster,
                        more efficient. Pure power just turn green lights into your launch pads.</p>
                </div>
            </div>
        </div>
        <div class="performance-header-bg"></div>
        <div class="performance-gallery">
            <div class="performance performance--caliper">
                <div class="performance-bg performance-bg--caliper"></div>
                <div class="performance-content">
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">Race-Level 4 Piston Calipers</h4>
                            <p>With a bigger brake disk and a double-acting 4-piston front caliper to deliver unmatched
                                stopping force for an even shorter braking distance. This is racing gear for the city.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="performance performance--f-suspension">
                <div class="performance-bg performance-bg--f-suspension"></div>
                <div class="performance-content">
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">Adjustable Front Suspension</h4>
                            <p>Inspired by aircraft landing gear, our aluminum Inverted Single Piston Front Suspension
                                can be tuned to your exact specification. Giving you even greater confidence and control
                                during the most demanding maneuvers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="performance performance--r-suspension">
                <div class="performance-bg performance-bg--r-suspension"></div>
                <div class="performance-content">
                    <div class="section-content">
                        <div class="performance-content-sizer">
                            <h4 class="subhead">Adjustable Rear Suspension</h4>
                            <p>Inspired by race car, multi-link suspension design let you tune for both agility and
                                control. This enables you stay in constant contact with the road, and perfectly on your
                                line, no matter the conditions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-app progressive-image">
        <input type="radio" name="app-slide" id="app-slide-update" class="d-none app-slide-radio" checked>
        <input type="radio" name="app-slide" id="app-slide-security" class="d-none app-slide-radio">
        <input type="radio" name="app-slide" id="app-slide-dashboard" class="d-none app-slide-radio">

        <div class="section-content">
            <div class="container">
                <h3 class="section-title">Ready For What’s Next.</h3>
                <p class="section-description">Use the Gogoro® App not only to luck up your bike, use it to tailor your
                    Gogoro’s performance and look.</p>
            </div>
        </div>

        <div class="app-slides">
            <div class="app-slide">
                <figure class="image-app image-app--update"></figure>
                <label class="app-slide-dot" for="app-slide-update"></label>
                <div class="app-slide__content">
                    <h4 class="app-subhead">iQ System® Update</h4>
                    <p>Gogoro continuously updates the firmware to keep your ride future-facing.</p>
                </div>
            </div>
            <div class="app-slide">
                <figure class="image-app image-app--security"></figure>
                <label class="app-slide-dot" for="app-slide-security"></label>
                <div class="app-slide__content">
                    <h4 class="app-subhead">Theft-Proof<sup>*</sup></h4>
                    <p>Keep your scooter secure with facial recognition, fingerprint sensors and a passcode. This is
                        security redefined.</p>
                </div>
            </div>
            <div class="app-slide">
                <figure class="image-app image-app--dashboard"></figure>
                <label class="app-slide-dot" for="app-slide-dashboard"></label>
                <div class="app-slide__content">
                    <h4 class="app-subhead">Personalized Style</h4>
                    <p>Tweak the color of your Smart Dash and play with the sound your Gogoro makes when it turns
                        on-there’s countless ways to make your Gogoro S1 your own.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-swap progressive-image">
        <div class="section-content">
            <div class="row justify-content-between align-items-center">
                <div class="col-xl-7 col-md-8">
                    <h2 class="section-title">Quick, Swap, Go!</h2>
                    <p class="section-description"><span data-number="rackCount"></span> GoStation® racks<sup
                            class="sosumi-mark">*</sup> at your service.</p>
                </div>
                <div class="col-md-auto">
                    <a class="cta-btn cta-btn--hollow" href="/tw/findus" target="_blank">
                        FIND US
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section class="section section-gallery">
        <div class="easter-egg-layer">

        </div>
        <button class="gallery-btn gallery-btn--left"></button>
        <button class="gallery-btn gallery-btn--right"></button>
        <canvas class="gallery-canvas">
        </canvas>
    </section>

    <section class="section section-build progressive-image">
        <div class="section-content">
            <input type="radio" name="model" class="d-none model-toggle" id="model-standard" checked>
            <input type="radio" name="model" class="d-none model-toggle" id="model-lite">

            <div class="models">
                <div class="model-container">
                    <input type="radio" name="model-color-ack" class="d-none model-color-toggle"
                        id="model-color-ack-white" checked>
                    <input type="radio" name="model-color-ack" class="d-none model-color-toggle"
                        id="model-color-ack-black">

                    <div class="model-images">
                        <figure class="image-model image-model--white">
                            <div class="model-color-badge model-color-badge--white">Icy Grey</div>
                        </figure>
                        <figure class="image-model image-model--black">
                            <div class="model-color-badge model-color-badge--black">Graphite Grey</div>
                        </figure>
                    </div>


                    <div class="model-product-name-wrapper">
                        <label for="model-ack" class="model-product-name">
                            Gogoro <span class="model-name">S1</span>
                        </label>
                    </div>

                    <div class="model-body">

                        <div class="model-color-picker">
                            <label class="model-color-btn model-color-btn--white" for="model-color-ack-white"></label>
                            <label class="model-color-btn model-color-btn--black" for="model-color-ack-black"></label>
                        </div>

                        <a class="cta-btn cta-btn--hollow" target="_blank" href="/press/updates/">INTERESTED</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>


<script src="//cdnjs.cloudflare.com/ajax/libs/bodymovin/5.6.4/lottie.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/binary-toolbox@1.3.0"></script>
<script src="{{ asset('home/js/ladi_heidi.js') }}"></script>



@endsection