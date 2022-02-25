<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Eva App</title>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
{{--        <link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    </head>
    <body class="antialiased">
    {{-- start new html --}}
    <!-- Header -->
    <section id="header">
        <div class="col-lg-12">
            <img src="assets/images/logo-green-transparent-small@2x.png" class="img-responsive header-logo">
        </div>
    </section>

    <!-- hero Section -->
    <section id="hero">
        <div class="col-lg-12">
            <div class="hero-container">
                <h1>Living Room</h1>
            </div>
        </div>
    </section>

    <!-- Hero Heading Section -->
    <section id="hero-heading">
        <div class="col-lg-12 mv-5">
            <div class="hero-container">
                <h3 class="text-center primary-color">Living room furniture designed to suit every home.<br>Browse Eva's range of sofas, coffee tables, and bedside<br>tables. </h3>
            </div>
        </div>
    </section>

    <!-- New offer Section -->
    <section id="offer-section">
        <div class="container">
            <div class="row new-offer">
                <div class="col col-lg-4 primary-bg-color content">
                    <h1>All Day Sofa</h1>
                    <p>We have designed the perfect sofa for everyone., Per-friendly fabrix for your funny freidsn, a hardwood frame to withstand.</p>
                    <button src="">shop now</button>
                </div>
                <div class="col col-lg-8 carousel">
                    <img class="img-responsive" src="assets/images/ads-1.jpg">
                </div>
            </div>

            <div class="row mt-5">
                <div class="col col-lg-3 offer-content">
                    <h3 class="primary-color">Hideaway Coffee Table</h3>
                    <p class="primary-color">made to last and with plenty of storage, our square and long table are heroes of any living space.</p>
                    <button class="primary-button primary-bg-color">shop now</button>
                </div>
                <div class="col col-lg-3 offer-image">
                    <img src="assets/images/1.jpg">
                </div>
                <div class="col col-lg-3 offer-content">
                    <h3 class="primary-color">Hideaway Side Table</h3>
                    <p class="primary-color">Made to last and with plenty of storage, the Hideaway Side Table perfectly complements your bed frame or sofa.</p>
                    <button class="primary-button primary-bg-color">shop now</button>
                </div>
                <div class="col col-lg-3 offer-image">
                    <img src="assets/images/2.jpg">
                </div>
            </div>
        </div>
    </section>

    <!-- EVA FAQS -->
    <section id="faqs">
        <div class="container">
            <h1>Your Top Questions Answered</h1>
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Accordion Item #1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Accordion Item #2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Full height item section -->
    <section id="full-height">
        <div class="full-height-container">
            <div class="col col-lg-3 content">
                <h1>Designed for a lifetime of comfort</h1>
                <button class="primary-button primary-bg-color">Shop Now</button>
            </div>
        </div>
    </section>

    <!-- Page footer-->
    <section id="footer">
        <div class="col-lg-12">
            <img src="assets/images/logo-green-transparent-small@2x.png" class="img-responsive header-logo">
        </div>
    </section>


    {{--    end new --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
