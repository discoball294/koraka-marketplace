@extends('store-front.layouts.master')

@section('page-title')
    <title>Contact - Koraka</title>
@endsection
@section('title-section')

@endsection
@section('content')
    <section class="p0">
        <div class="map-holder pt160 pb160">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3149.4086040735224!2d144.976411!3d-37.87412599999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad66889faebddf1%3A0xcc68084b44a30620!2sRiva+St+Kilda!5e0!3m2!1sen!2sau!4v1427779902899"></iframe>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5">
                    <h4 class="uppercase">Get In Touch</h4>
                    <p>
                        At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum
                        deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non
                        provident,
                    </p>
                    <hr>
                    <p>
                        The CEO Building, Lt 12
                        <br> Jln. TB Simatupang No. 18c
                        <br> Jakarta Selatan, 12430, Indonesia
                    </p>
                    <hr>
                    <p>
                        <strong>E:</strong> cs@koraka.id
                        <br>
                        <strong>P:</strong> +628 3948 2726 11
                        <br>
                    </p>
                </div>
                <div class="col-sm-6 col-md-5 col-md-offset-1">
                    <form class="form-email" data-success="Thanks for your submission, we will be in touch shortly."
                          data-error="Please fill all fields correctly.">
                        <input type="text" class="validate-required" name="name" placeholder="Your Name">
                        <input type="text" class="validate-required validate-email" name="email"
                               placeholder="Email Address">
                        <textarea class="validate-required" name="message" rows="4" placeholder="Message"></textarea>
                        <button type="submit">Send Message</button>
                    </form>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection
