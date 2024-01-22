@extends('layouts.app')

@section('content')
    <section class="category-top">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-bold text-center">
                        {{ __('Meal Plans') }}
                    </h1>
                    <p class="text-center fs-5">Our delicious meal plans are designed by registered dietitians and food
                        experts to help you lose
                        weight, eat more fiber, go vegan and more. Browse dozens of meal plans to find one that's right for
                        you.</p>
                </div>
            </div>
            <div class="row category-text mt-4 mb-4 text-center">
                <div class="col-md-12">
                    <a href=""><span class="text-uppercase fw-bold me-4">meal planning 101</span></a>
                    <a href=""><span class="text-uppercase fw-bold me-4">meal planning 101</span></a>
                    <a href=""><span class="text-uppercase fw-bold me-4">meal planning 101</span></a>
                    <a href=""><span class="text-uppercase fw-bold me-4">meal planning 101</span></a>
                    <a href=""><span class="text-uppercase fw-bold me-4">meal planning 101</span></a>
                    <a href=""><span class="text-uppercase fw-bold me-4">meal planning 101</span></a>
                </div>
            </div>
            <div class="row category-text mt-4 mb-4 text-center">
                <div class="col-md-12">
                    <a href=""><span class="text-uppercase fw-bold me-4">meal planning 101</span></a>
                    <a href=""><span class="text-uppercase fw-bold me-4">meal planning 101</span></a>
                    <a href=""><span class="text-uppercase fw-bold me-4">meal planning 101</span></a>
                    <a href=""><span class="text-uppercase fw-bold me-4">meal planning 101</span></a>
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-md-12">
                    <ul class="list-unstyled d-flex justify-content-center">
                        <li><a href="#" class="text-dark fs-2"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#" class="p-2 text-dark fs-2"><i class="fa-brands fa-pinterest"></i></a></li>
                        <li><a href="#" class="p-2 text-dark fs-2"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" class="p-2 text-dark fs-2"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#" class="p-2 text-dark fs-2"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="plans-section mb-5">
        <div class="container">
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
    <section class="related-page">
        <div class="container mt-4">
            <div class="row ">
                <div class="col-md-12 mb-2">
                    <h2 class="fw-bold">
                        {{ __('Related Articles') }}
                    </h2>
                </div>
            </div>
            <div class="row justify-content-between">
                <div class="col-md-3 mb-4">
                    <div class="card related-article-card">
                        <img src="{{ asset('assets/img/article-card-image.jpg') }}" class="card-img-top" alt="alt image">
                        <div class="card-body">
                            <span class="card-subtitle">Anti-Inflammatory Diet Center</span>
                            <h5 class="card-title mt-2 fw-bold">I Have Chronic Inflammation & These Are the Easy
                                Anti-Inflammatory
                                Breakfasts I Make on Repeat</h5>
                            <p class="card-text">By Danielle DeAngelis</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-3 mb-4">
                    <div class="card related-article-card">
                        <img src="{{ asset('assets/img/article-card-image.jpg') }}" class="card-img-top" alt="alt image">
                        <div class="card-body">
                            <span class="card-subtitle">Anti-Inflammatory Diet Center</span>
                            <h5 class="card-title mt-2 fw-bold">I Have Chronic Inflammation & These Are the Easy
                                Anti-Inflammatory
                                Breakfasts I Make on Repeat</h5>
                            <p class="card-text">By Danielle DeAngelis</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-3 mb-4">
                    <div class="card related-article-card">
                        <img src="{{ asset('assets/img/article-card-image.jpg') }}" class="card-img-top" alt="alt image">
                        <div class="card-body">
                            <span class="card-subtitle">Anti-Inflammatory Diet Center</span>
                            <h5 class="card-title mt-2 fw-bold">I Have Chronic Inflammation & These Are the Easy
                                Anti-Inflammatory
                                Breakfasts I Make on Repeat</h5>
                            <p class="card-text">By Danielle DeAngelis</p>
                        </div>
                    </div>
                </div>
                  <div class="col-md-3 mb-4">
                    <div class="card related-article-card">
                        <img src="{{ asset('assets/img/article-card-image.jpg') }}" class="card-img-top" alt="alt image">
                        <div class="card-body">
                            <span class="card-subtitle">Anti-Inflammatory Diet Center</span>
                            <h5 class="card-title mt-2 fw-bold">I Have Chronic Inflammation & These Are the Easy
                                Anti-Inflammatory
                                Breakfasts I Make on Repeat</h5>
                            <p class="card-text">By Danielle DeAngelis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
