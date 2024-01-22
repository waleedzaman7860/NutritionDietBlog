<div class="shadow bg-white">
    <nav class="navbar navbar-expand-md">
        <div class="container mt-4">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                {{ config('app.name', 'Eating Well') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item border-end pe-2 me-2">
                        <a class="nav-link"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </li>
                    <li class="nav-item border-end pe-2 me-2 d-flex align-items-center">
                        <a class="nav-link" href="#"><i
                                class="fa-solid fa-circle-user fs-6 me-2"></i>{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item border-end pe-2 me-2">
                        <a class="nav-link" href="#">{{ __('Newsletter') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('Sweepstakes') }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-md">
        <div class="container d-flex p-0">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item fw-semibold p-2">
                        <a class="nav-link text-uppercase text-dark" href="#">{{ __('healthy recipes') }}</a>
                    </li>
                    <li class="nav-item fw-semibold p-2">
                        <a class="nav-link text-uppercase text-dark" href="#">{{ __('special diet') }}</a>
                    </li>
                    <li class="nav-item fw-semibold p-2">
                        <a class="nav-link text-uppercase text-dark" href="#">{{ __('diabetes') }}</a>
                    </li>
                    <li class="nav-item fw-semibold p-2">
                        <a class="nav-link text-uppercase text-dark" href="#">{{ __('meal plan') }}</a>
                    </li>
                    <li class="nav-item fw-semibold p-2">
                        <a class="nav-link text-uppercase text-dark" href="#">{{ __('news') }}</a>
                    </li>
                    <li class="nav-item fw-semibold p-2">
                        <a class="nav-link text-uppercase text-dark" href="#">{{ __('healthy eating') }}</a>
                    </li>
                    <li class="nav-item fw-semibold p-2">
                        <a class="nav-link text-uppercase text-dark" href="#">{{ __('healthy lifestyle') }}</a>
                    </li>
                    <li class="nav-item fw-semibold p-2">
                        <a class="nav-link text-uppercase text-dark" href="#">{{ __('about us') }}</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</div>
