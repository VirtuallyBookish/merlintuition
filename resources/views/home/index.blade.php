@extends('layouts.main')

@section('content')

    @include('components.hero')

    <div class="container-fluid container-home">
        <div class="row">
            <div class="col-md-4">
                <div id="hat-label" class="jumbo-card">
                    <div id="jumbo-1" class="jumbo-content">
                        <h1 class="text-center">Bespoke Tutors for You</h1>
                        <p>As a teacher I know that every student is different
                            and finding the correct tutor for you can be a
                            struggle. Personality can also make a huge
                            difference, so I meet and get to know the all of
                            the tutors personally in order to match each
                            student with their perfect tutor.</p>
                    </div>
                </div>
            </div>

            <div id="jumbo-2" class="col-md-4">
                <div id="clipboard-label" class="jumbo-card">
                    <div class="jumbo-content">
                        <h1 class="text-center">Tried and Tested Tutors</h1>
                        <p>Education can be an amazing experience, but it can
                            also be stressful, especially if you do not get on
                            with your teacher/tutor. To this end we try to
                            ensure that your tutor is not only exceptional
                            at their subject, but brings interest and
                            enthusiasm to their sessions.</p>
                    </div>
                </div>
            </div>

            <div id="jumbo-3" class="col-md-4">
                <div id="brighton-label" class="jumbo-card">
                    <div class="jumbo-content">
                        <h1 class="text-center">Brighton<br>Based</h1>
                        <p>We are always seeking out the best tutors within
                            Brighton to provide you with the best possible match.
                            Our list of tutors expands constantly, helping us
                            find the best possible tutor for you!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

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
