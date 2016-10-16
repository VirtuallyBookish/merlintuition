@extends('layouts.main')

@section('content')

    @include('components.hero')

    <div class="container container-home">

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

    </div>
@endsection
