@extends('layouts.main')

@section('content')

    @include('components.hero')

    <div class="container-fluid container-home">
        <div class="row">
            <div class="col-md-4 jumbo-card">
                <div id="jumbo-1" class="jumbo-content">
                    <h1 class="text-center">Test Jumbo Card</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

            <div id="jumbo-2" class="col-md-4 jumbo-card">
                <div class="jumbo-content">
                    <h1 class="text-center">Test Jumbo Card</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

            <div id="jumbo-3" class="col-md-4 jumbo-card">
                <div class="jumbo-content">
                    <h1 class="text-center">Test Jumbo Card</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container container-home">

        <div class="row sales-row">
            <div class="col-sm-3">
                <img class="sales-image" src="/images/circle_hat.png">
            </div>
            <div class="col-sm-9 sales-content-column">
                <div class="sales-content-wrapper">
                    <div class="sales-content">
                        <h1>Home Editable Title</h1>
                        <p>Home Editable Content</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row sales-row">
            <div class="col-sm-9 sales-content-column">
                <div class="sales-content-wrapper">
                    <div class="sales-content">
                        <h1>Home Editable Title</h1>
                        <p>Home Editable Content</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <img class="sales-image" src="/images/circle_clipboard.png">
            </div>
        </div>

        <div class="row sales-row">
            <div class="col-sm-3">
                <img class="sales-image" src="/images/circle_brighton.png">
            </div>
            <div class="col-sm-9 sales-content-column">
                <div class="sales-content-wrapper">
                    <div class="sales-content">
                        <h1>Home Editable Title</h1>
                        <p>Home Editable Content</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row text-center testimonials">
            <h2>Testimonials</h2>

            <div class="col-sm-4">
                <h3>Random Testimonial Name</h3>
                <h4>Testimonial Level/Subject</h4>
                <p>"Testimonial Body"</p>
            </div>

            <div class="col-sm-4">
                <h3>Random Testimonial Name</h3>
                <h4>Testimonial Level/Subject</h4>
                <p>"Testimonial Body"</p>
            </div>

            <div class="col-sm-4">
                <h3>Random Testimonial Name</h3>
                <h4>Testimonial Level/Subject</h4>
                <p>"Testimonial Body"</p>
            </div>
        </div>

    </div> --}}
@endsection
