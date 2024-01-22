@extends('layouts.app')

@section('content')
    <section class="top-page">

        {{-- @foreach ($blog as $key => $blog) --}}
        <div class="container mt-4">
            <div class="row">

                <div class="col-md-12">
                    <h1 class="fw-bold">

                        {{ $blog->name ?? 'Blog not found' }}

                    </h1>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>
                        {{ __('Dinners in 4 steps or less to keep the prep as easy as possible and tame inflammation.') }}
                        {{-- {{ $blog->description }} --}}

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <span class="card-subtitle fw-bold border-end pe-2 me-2">
                        {{ __('By') }}
                        {{ $blog->created_by->name }}

                    </span>
                    <span class="card-subtitle">
                        {{ __('Published on ') }}
                        {{ $blog->created_at->format('d/m/Y') }}
                    </span>
                </div>
                <div class="col-md-6 float-end">
                    <ul class="list-unstyled d-flex">
                        <li><a href="#" class="text-dark fs-4"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#" class="p-2 text-dark fs-4"><i class="fa-brands fa-pinterest"></i></a></li>
                        <li><a href="#" class="p-2 text-dark fs-4"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#" class="p-2 text-dark fs-4"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#" class="p-2 text-dark fs-4"><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="blog-page mb-5">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="media-top">

                        <!-- Check if the blog has an image before displaying it -->
                        @if ($blog->image)
                            <img src="{{ Storage::url($blog->image) }}" alt="Blog Image">
                        @else
                            <img src="" alt="">
                        @endif

                    </div>
                    <div class="description-media mt-4">
                        {{-- <p class="fs-5"><em>Our column, ThePrep, has everything you'll need to make meal planning and --}}
                        {{-- meal prep
                                as easy as
                                can --}}
                        {{-- be. Sign up to get a meal plan delivered to your inbox every Saturday!</em></p> --}}
                        <p class="fs-5 justified-paragraph">
                            {{ strip_tags($blog->description) ?? 'Blog not found' }}

                            {{-- {!! ($blog->description) ?? 'Blog not found' !!} --}}

                        </p>
                    </div>
                    <div class="menu-media mt-4 mb-4">
                        <h2><span class="fw-bold"> Your Meal Plan </span></h2>
                        <figure>
                            <img src="{{ asset('assets/img/blog-menu-img.webp') }}" alt="Image Description"
                                class="image-placeholder">
                            <figcaption>Photographer: Jen Causey, Food Stylist: Margret Monroe Dickey, Prop Stylist:
                                Christine Keely</figcaption>
                        </figure>
                        <p class="fs-5 justified-paragraph">
                            With both of us having busy schedules, sharing daily meals with my husband is one of the ways we
                            connect. But the truth is that on a daily basis, it's pretty complicated to make a feast out of
                            each meal. And while the act of sitting together is more important than the dish itself, we like
                            to savor delicious and nutritious meals. That's where these easy dinners come in! To make sure
                            we have time to enjoy our conversations, dinners for this week are made in four steps or less to
                            keep the prep as easy as possible.</p>

                        <div class="mt-2">
                            <p class="fs-5 m-0"><span class="fw-bold me-2">Sunday:</span><a href="#">Sheet-Pan Chicken
                                    Thighs with
                                    Brussels
                                    Sprouts & Gnocchi</a></p>
                            <p class="fs-5 m-0"><span class="fw-bold me-2">Monday:</span><a href="#">Quinoa Chili with
                                    Sweet
                                    Potatoes</a></p>
                            <p class="fs-5 m-0"><span class="fw-bold me-2">Tuesday:</span><a href="#">Grilled Salmon &
                                    Vegetables with
                                    Charred Lemon-Garlic Vinaigrette</a></p>
                            <div class="btn mt-4 list-btn"><span class="fw-bold p-3 text-uppercase">Printable Shopping
                                    List</span></div>
                        </div>

                    </div>
                    <div class="sipon-media mt-4 mb-4">
                        <h2><span class="fw-bold mb-4"> Something to Sip On </span></h2>
                        <img src="{{ asset('assets/img/sip-on-img.jpg') }}" alt="Image Description"
                            class="image-placeholder">
                        <p class="fs-5 justified-paragraph">
                            With both of us having busy schedules, sharing daily meals with my husband is one of the ways we
                            connect. But the truth is that on a daily basis, it's pretty complicated to make a feast out of
                            each meal. And while the act of sitting together is more important than the dish itself, we like
                            to savor delicious and nutritious meals. That's where these easy dinners come in! To make sure
                            we have time to enjoy our conversations, dinners for this week are made in four steps or less to
                            keep the prep as easy as possible.</p>

                        <div class="mt-2">
                            <p class="fs-5 m-0"><span class="fw-bold me-2">Get the Recipe:</span><a
                                    href="#">Elderberry Elixir Mocktail</a></p>
                        </div>

                    </div>
                    <div class="weekly-media mt-4 mb-4">
                        <h2><span class="fw-bold mb-4">What's Inspiring Me This Week</span></h2>
                        <figure>
                            <img src="{{ asset('assets/img/blog-menu-img.webp') }}" alt="Image Description"
                                class="image-placeholder">
                            <figcaption>Photographer: Jen Causey, Food Stylist: Margret Monroe Dickey, Prop Stylist:
                                Christine Keely</figcaption>
                        </figure>
                        <p class="fs-5 justified-paragraph">
                            With both of us having busy schedules, sharing daily meals with my husband is one of the ways we
                            connect. But the truth is that on a daily basis, it's pretty complicated to make a feast out of
                            each meal. And while the act of sitting together is more important than the dish itself, we like
                            to savor delicious and nutritious meals. That's where these easy dinners come in! To make sure
                            we have time to enjoy our conversations, dinners for this week are made in four steps or less to
                            keep the prep as easy as possible.</p>

                        <div class="mt-2">
                            <p class="fs-5 m-0"><span class="fw-bold me-2">Get the Recipe:</span><a
                                    href="#">Elderberry Elixir Mocktail</a></p>
                        </div>

                    </div>
                </div>
                <div class="col-md-2">
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
                        <img src="{{ asset('assets/img/article-card-image.jpg') }}" class="card-img-top"
                            alt="alt image">
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
                        <img src="{{ asset('assets/img/article-card-image.jpg') }}" class="card-img-top"
                            alt="alt image">
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
