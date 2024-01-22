@extends('layouts.app')

@section('content')
    <section class="hero-section position-relative mb-5">
        <video class="bg-video" autoplay muted loop>
            <source src="{{ asset('assets/img/bg-video.webm') }}" type="video/mp4">
        </video>
        <div class="card card-video border-0 bg-white">
            <div class="card-body">
                <span class="card-title fs-6 mb-2 text-muted">Mediterranean Diet Center</span>
                <h4 class="card-subtitle mt-2 fw-bold">The New Mediterranean Diet</h4>
                <p class="card-text mt-2 fw-medium">In this spotlight, we share recipes and nutrition advice that represent a
                    more inclusive interpretation of this celebrated eating pattern.</p>
                <a href="#" class="card-link">By EatingWell Editors</a>
            </div>
        </div>
    </section>

    <section class="top-page container mb-5">
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="card border-0">
                    <img src="{{ asset('assets/img/img-1.webp') }}" class="card-img-top" alt="image-top">
                    <div class="card-body p-0 mt-2">
                        <span class="card-title fs-6 mb-2 text-muted">Mediterranean Diet Center</span>
                        <h4 class="card-subtitle mt-2 fw-bold">I'm a Dietitian with Syrian Roots—This Is the Mediterranean
                            Diet That I
                            Know and Love</h4>
                        <p class="card-text mt-2 fw-medium">The Mediterranean diet extends beyond a list of foods and
                            includes many
                            cultures. That's the Mediterranean diet I know and love and want to share with you.</p>
                        <a href="#" class="card-link">{{ __('By Rahaf Al Bochi, RDN, LD') }}</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 p-0">
                <div class="slider">
                    <h2 class="text-center mb-4 fw-bold">The New Mediterranean Diet:</h2>
                    <div class="card-body p-0 mt-2 d-flex align-items-center">
                        <img src="{{ asset('assets/img/card-img1.webp') }}" alt="" class="me-2 image-placeholder">
                        <div>
                            <p class="mb-0 fw-bold">3 Amazing Things That Happen to Your Brain When You Follow the
                                Mediterranean Diet</p>
                            <p class="mb-0 text-muted">By Jessica Migala</p>
                        </div>
                    </div>

                    <div class="card-body p-0 mb-4 d-flex align-items-center">
                        <video class="me-2 image-placeholder" autoplay muted loop>
                            <source src="{{ asset('assets/img/card-img2.webm') }}" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                        <div>
                            <p class="mb-0 fw-bold">Charred Cabbage Wedges with Cashew Cream Showcases a Staple of the
                                African
                                Diaspora</p>
                            <p class="mb-0 text-muted">By Dawn Burrell</p>
                        </div>
                    </div>
                    <div class="card-body p-0 mb-4 d-flex align-items-center">
                        <video class="me-2 image-placeholder" autoplay muted loop>
                            <source src="{{ asset('assets/img/card-img2.webm') }}" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                        <div>
                            <p class="mb-0 fw-bold">Charred Cabbage Wedges with Cashew Cream Showcases</p>
                            <p class="mb-0 text-muted">By Dawn Burrell</p>
                        </div>
                    </div>
                    <div class="card-body p-0 d-flex align-items-center">
                        <video class="me-2 image-placeholder" autoplay muted loop>
                            <source src="{{ asset('assets/img/card-img2.webm') }}" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                        <div>
                            <p class="mb-0 fw-bold">Charred Cabbage Wedges with Cashew Cream Showcases</p>
                            <p class="mb-0 text-muted">By Dawn Burrell</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section mb-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 d-flex justify-content-center">
                    <h2 class="fs-1 fw-bold mb-0">{{ __('News') }}</h2>
                    <i class="fa-arrow-right fa-solid fs-3 m-2" style="color: #006646;"></i>
                </div>
            </div>

        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/news-card-img1.webp') }}" class="card-img-top mb-2" alt="CardImage">
                        <div class="card-body p-0">
                            <span class="card-title fs-6 text-muted">Kitchen Essentials</span>
                            <h4 class="card-subtitle mt-2 mb-2 fw-bold">Whoa, This Editor-Loved Le Creuset Dutch Oven Is 35%
                                Off
                                in
                                Every Single Color</h4>
                            <a href="#" class="card-link">By Kristin Montemarano</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/news-card-img2.webp') }}" class="card-img-top mb-2" alt="CardImage">
                        <div class="card-body p-0">
                            <span class="card-title fs-6 text-muted">Kitchen Essentials</span>
                            <h4 class="card-subtitle mt-2 mb-2 fw-bold">Whoa, This Editor-Loved Le Creuset Dutch Oven Is 35%
                                Off
                                in
                                Every Single Color</h4>
                            <a href="#" class="card-link">By Kristin Montemarano</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/news-card-img2.webp') }}" class="card-img-top mb-2" alt="CardImage">
                        <div class="card-body p-0">
                            <span class="card-title fs-6 text-muted">Kitchen Essentials</span>
                            <h4 class="card-subtitle mt-2 mb-2 fw-bold">Whoa, This Editor-Loved Le Creuset Dutch Oven Is 35%
                                Off
                                in
                                Every Single Color</h4>
                            <a href="#" class="card-link">By Kristin Montemarano</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="meal-section mb-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 d-flex justify-content-center">
                    <h2 class="fs-1 fw-bold mb-0">{{ __('Meal Plans') }}</h2>
                    <i class="fa-arrow-right fa-solid fs-3 m-2" style="color: #006646;"></i>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/menu-card-img1.webp') }}" class="card-img-top mb-2" alt="CardImage">
                        <div class="card-body p-0">
                            <span class="card-title fs-6 text-muted">Blood Pressure Meal Plans</span>
                            <h4 class="card-subtitle mt-2 mb-2 fw-bold">7-Day No-Sugar Anti-Inflammatory Meal Plan for High
                                Blood Pressure</h4>
                            <a href="#" class="card-link">By Breana Lai Killeen, M.P.H., RD</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0">
                        <video class="me-2 image-placeholder mb-2" autoplay muted loop>
                            <source src="{{ asset('assets/img/menu-card-img2.webm') }}" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                        <div class="card-body p-0">
                            <span class="card-title fs-6 text-muted">ThePrep</span>
                            <h4 class="card-subtitle mt-2 mb-2 fw-bold">Easy No-Cook Dinners Packed with Antioxidants -
                                Weekly Plan & Shopping List!</h4>
                            <a href="#" class="card-link">By Maria Laura Haddad-Garcia</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0">
                        <video class="me-2 image-placeholder mb-2" autoplay muted loop>
                            <source src="{{ asset('assets/img/menu-card-img2.webm') }}" type="video/webm">
                            Your browser does not support the video tag.
                        </video>
                        <div class="card-body p-0">
                            <span class="card-title fs-6 text-muted">ThePrep</span>
                            <h4 class="card-subtitle mt-2 mb-2 fw-bold">Easy No-Cook Dinners Packed with Antioxidants -
                                Weekly Plan & Shopping List!</h4>
                            <a href="#" class="card-link">By Maria Laura Haddad-Garcia</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="dibaetes-section slider mb-5">
        <div class="row align-items-center m-4">
            <div class="col-md-12 d-flex justify-content-center">
                <h2 class="fs-1 fw-bold mb-0">{{ __('Diabetes Diet Center') }}</h2>
                <i class="fa-arrow-right fa-solid fs-3 m-2" style="color: #006646;"></i>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card-body p-0 mt-4 d-flex align-items-center">
                        <img src="{{ asset('assets/img/diet-card-img1.webp') }}" alt="diet-image"
                            class="me-2 image-placeholder">
                        <div>
                            <p class="mb-2 fw-bold">Can You Drink Juice If You Have Diabetes?</p>
                            <p class="mb-0 text-muted">By Elizabeth Shaw, M.S., RDN, CPT</p>
                        </div>
                    </div>

                    <div class="card-body p-0 mt-4 d-flex align-items-center">
                        <img src="{{ asset('assets/img/diet-card-img1.webp') }}" alt="diet-image"
                            class="me-2 image-placeholder">
                        <div>
                            <p class="mb-2 fw-bold">Can You Drink Juice If You Have Diabetes?</p>
                            <p class="mb-0 text-muted">By Elizabeth Shaw, M.S., RDN, CPT</p>
                        </div>
                    </div>

                    <div class="card-body p-0 mt-4 d-flex align-items-center">
                        <img src="{{ asset('assets/img/diet-card-img1.webp') }}" alt="diet-image"
                            class="me-2 image-placeholder">
                        <div>
                            <p class="mb-2 fw-bold">Can You Drink Juice If You Have Diabetes?</p>
                            <p class="mb-0 text-muted">By Elizabeth Shaw, M.S., RDN, CPT</p>
                        </div>
                    </div>

                    <div class="card-body p-0 mt-4 d-flex align-items-center">
                        <img src="{{ asset('assets/img/diet-card-img1.webp') }}" alt="diet-image"
                            class="me-2 image-placeholder">
                        <div>
                            <p class="mb-2 fw-bold">Can You Drink Juice If You Have Diabetes?</p>
                            <p class="mb-0 text-muted">By Elizabeth Shaw, M.S., RDN, CPT</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card border-0 slider">
                        <img src="{{ asset('assets/img/meal-img.webp') }}" class="card-img-top" alt="image-top">
                        <div class="card-body p-0 mt-2">
                            <span class="card-title fs-6 mb-2 text-muted">Mediterranean Diet Center</span>
                            <h4 class="card-subtitle mt-2 fw-bold">I'm a Dietitian with Syrian Roots—This Is the
                                Mediterranean
                                Diet That I
                                Know and Love</h4>
                            <p class="card-text mt-2 fw-medium">The Mediterranean diet extends beyond a list of foods and
                                includes many
                                cultures. That's the Mediterranean diet I know and love and want to share with you.</p>
                            <a href="#" class="card-link">{{ __('By Rahaf Al Bochi, RDN, LD') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section mb-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 d-flex justify-content-center">
                    <h2 class="fs-1 fw-bold mb-0">{{ __('Healthy Lifestyle') }}</h2>
                    <i class="fa-arrow-right fa-solid fs-3 m-2" style="color: #006646;"></i>
                </div>
            </div>

        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/lifestyle-card-1.webp') }}" class="card-img-top mb-2" alt="CardImage">
                        <div class="card-body p-0">
                            <span class="card-title fs-6 text-muted">Best Healthy Foods</span>
                            <h4 class="card-subtitle mt-2 mb-2 fw-bold">8 Target Dupes That Are Better Than the Original
                            </h4>
                            <a href="#" class="card-link">By Danielle DeAngelis</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/lifestyle-card-1.webp') }}" class="card-img-top mb-2" alt="CardImage">
                        <div class="card-body p-0">
                            <span class="card-title fs-6 text-muted">Best Healthy Foods</span>
                            <h4 class="card-subtitle mt-2 mb-2 fw-bold">8 Target Dupes That Are Better Than the Original
                            </h4>
                            <a href="#" class="card-link">By Danielle DeAngelis</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/img/lifestyle-card-1.webp') }}" class="card-img-top mb-2" alt="CardImage">
                        <div class="card-body p-0">
                            <span class="card-title fs-6 text-muted">Best Healthy Foods</span>
                            <h4 class="card-subtitle mt-2 mb-2 fw-bold">8 Target Dupes That Are Better Than the Original
                            </h4>
                            <a href="#" class="card-link">By Danielle DeAngelis</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="health-section position-relative mb-5">
        <img src="{{ asset('assets/img/bg-img.webp') }}" class="bg-image" alt="background image">
        <div class="card card-image shadow-sm border-0 bg-white">
            <div class="card-body">
                <span class="card-title fs-6 mb-2 text-muted">Healthy Salad Recipes</span>
                <h4 class="card-subtitle mt-2 fw-bold">Padma Lakshmi's Tandoori Chicken Salad Checks All the Boxes</h4>
                <p class="card-text mt-2 fw-medium">Padma Lakshmi's tandoori salad features chicken marinated in yogurt and
                    plenty of spices, along with lots of crunchy vegetables including cucumber, cabbage, jicama and
                    radishes.</p>
                <a href="#" class="card-link">By Padma Lakshmi</a>
            </div>
        </div>
    </section>

    <section class="recipe-section mb-5">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 d-flex justify-content-center">
                    <h2 class="fs-1 fw-bold mb-0">{{ __('Healthy Recipe') }}</h2>
                    <i class="fa-arrow-right fa-solid fs-3 m-2" style="color: #006646;"></i>
                </div>
            </div>

        </div>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-4 mt-4 d-flex align-items-center">
                        <img src="{{ asset('assets/img/lifestyle-card-1.webp') }}" alt=""
                            class="me-4 image-placeholder">
                        <div class="card-body p-0">
                            <span class="card-title fs-6 text-muted">Ceviche Recipes</span>
                            <h4 class="card-subtitle mt-2 mb-2 fw-bold">This Refreshing Tangerine Ceviche Transports Me to
                                the Beach</h4>
                            <a href="#" class="card-link">By María Lara Bregatta</a>
                        </div>
                    </div>
                    <div class="block-border m-0"></div>


                    <div class="mb-4 mt-4 d-flex align-items-center">
                        <img src="{{ asset('assets/img/lifestyle-card-1.webp') }}" alt=""
                            class="me-4 image-placeholder">
                        <div class="card-body p-0">
                            <span class="card-title fs-6 text-muted">Ceviche Recipes</span>
                            <h4 class="card-subtitle mt-2 mb-2 fw-bold">This Refreshing Tangerine Ceviche Transports Me to
                                the Beach</h4>
                            <a href="#" class="card-link">By María Lara Bregatta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
