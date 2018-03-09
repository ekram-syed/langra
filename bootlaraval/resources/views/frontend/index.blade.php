@extends('layouts.frontend') @section('content')
<section id="hero" class="jumbotron text-center rounded-0 mb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-middle text-left">
                <h2 class="jumbotron-heading">
                    The convenient and fast way to get things done with the LIVE touch of Experts
                </h2>
                <p class="lead text-muted my-5">
                    Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too
                    short so folks don't simply skip over it entirely. Getting a quick job done has never been easier
                </p>
                <p class="my-5">
                    <a href="#" class="btn btn-outline-primary my-2">
                        <i class="fas fa-user-plus"></i> Get Stated</a>
                    <a href="#" class="btn btn-outline-info my-2">
                        <i class="fas fa-book"></i> Learn More</a>
                    <a href="#" class="btn btn-outline-success my-2">
                        <i class="fas fa-graduation-cap"></i> Im an Expert</a>
                </p>
            </div>
            <div class="col">
                <img src="img/jumbotron.png" class="img-fluid w-75" alt="A generic square placeholder image with rounded corners in a figure.">
            </div>
        </div>
</section>


<section id="featured-categories">
    <div class="container py-5 border-top text-center">
        <h2>Find someone perfect for your needs</h2>
        <div class="input-group my-3">
            <input type="text" class="form-control border-secondary" placeholder="What do you need to get done?" aria-label="Recipient's username"
                aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fas fa-search"></i> Search</button>
            </div>
        </div>
        <h3 class="text-muted">Whats popular</h3>
        <div class="card-columns">
            <a href="#" class="card  list-group-item-action border-light ">
                <div class="card-body">
                    <h5 class="card-title"> Guitar</h5>
                    <h6 class="card-subtitle mb-2 text-muted">5 Experts</h6>
                    <p class="card-text">
                        <img src="img/guitar.png">
                    </p>
                </div>
            </a>
            <a href="#" class="card  list-group-item-action border-light">
                <div class="card-body">
                    <h5 class="card-title"> Chainies</h5>
                    <h6 class="card-subtitle mb-2 text-muted">5 Experts</h6>
                    <p class="card-text">
                        <img src="img/translator.png">
                    </p>
                </div>
            </a>
            <a href="#" class="card  list-group-item-action border-light ">
                <div class="card-body">
                    <h5 class="card-title"> Math</h5>
                    <h6 class="card-subtitle mb-2 text-muted">5 Experts</h6>
                    <p class="card-text">
                        <img src="img/maths.png">
                    </p>
                </div>
            </a>
            <a href="#" class="card  list-group-item-action border-light ">
                <div class="card-body">
                    <h5 class="card-title"> Yoga</h5>
                    <h6 class="card-subtitle mb-2 text-muted">5 Experts</h6>
                    <p class="card-text">
                        <img src="img/yoga.png">
                    </p>
                </div>
            </a>
            <a href="#" class="card  list-group-item-action border-light">
                <div class="card-body">
                    <h5 class="card-title"> Cooking</h5>
                    <h6 class="card-subtitle mb-2 text-muted">5 Experts</h6>
                    <p class="card-text">
                        <img src="img/chef.png">
                    </p>
                </div>
            </a>
            <a href="#" class="card  list-group-item-action border-light">
                <div class="card-body">
                    <h5 class="card-title"> Piano</h5>
                    <h6 class="card-subtitle mb-2 text-muted">5 Experts</h6>
                    <p class="card-text">
                        <img src="img/piano.png">
                    </p>
                </div>
            </a>
            <a href="#" class="card  list-group-item-action border-light">
                <div class="card-body">
                    <h5 class="card-title"> Singing</h5>
                    <h6 class="card-subtitle mb-2 text-muted">95 Experts</h6>
                    <p class="card-text">
                        <img src="img/microphone.png">
                    </p>
                </div>
            </a>
            <a href="#" class="card  list-group-item-action border-light">
                <div class="card-body">
                    <h5 class="card-title"> Drawing</h5>
                    <h6 class="card-subtitle mb-2 text-muted">45 Experts</h6>
                    <p class="card-text">
                        <img src="img/pencil.png">
                    </p>
                </div>
            </a>
            <a href="#" class="card  list-group-item-action border-light">
                <div class="card-body">
                    <h5 class="card-title"> Care</h5>
                    <h6 class="card-subtitle mb-2 text-muted">500 Experts</h6>
                    <p class="card-text">
                        <img src="img/care.png">
                    </p>
                </div>
            </a>
        </div>

        <a href="#" class="btn btn-secondary my-2">
            <i class="fab fa-wpexplorer"></i> Explore More</a>
    </div>
</section>

<section id="how-it-works">
    <div class="container py-5 border-top text-center">
        <h2 class="mb-5">How it works</h2>
        <div class="row">
            <div class="col-sm-4 col-lg-3 col-lg-offset-0 col-sm-offset-1">
                <article class="text-block">
                    <header>
                        <img src="img/spy.png" alt="">
                        <hr>
                    </header>
                    <h3 data-qa="name" class="text-uppercase m-b-40">
                        FIND
                    </h3>
                    <p data-qa="details" class="lead">Browse profiles, reviews, and proposals to find the expert best match for your topic.</p>
                </article>
            </div>
            <div class="m-b-80 col-sm-4 col-lg-3 col-lg-offset-0 col-sm-offset-2">
                <article class="text-block">
                    <header>
                        <img src="img/human-resources.png" class="hiw-icon" alt="">
                        <hr>
                    </header>
                    <h3 data-qa="name" class="text-uppercase m-b-40">
                        HIRE
                    </h3>
                    <p data-qa="details" class="lead">Contact, Schedule, Talk and Hire the favorite.</p>
                </article>
            </div>
            <div class="clearfix visible-sm visible-md"></div>
            <div class="m-b-80 col-sm-4 col-lg-3 col-lg-offset-0 col-sm-offset-1">
                <article class="text-block">
                    <header>
                        <img src="img/online.png" class="hiw-icon" alt="">
                        <hr>
                    </header>
                    <h3 data-qa="name" class="text-uppercase m-b-40">
                        Learn
                    </h3>
                    <p data-qa="details" class="lead">Start private live sessions with your provider, ask questions, be awesome</p>
                </article>
            </div>
            <div class="m-b-80 col-sm-4 col-lg-3 col-lg-offset-0 col-sm-offset-2">
                <article class="text-block">
                    <header>
                        <img src="img/handshake.png" class="hiw-icon" alt="">
                        <hr>
                    </header>
                    <h3 data-qa="name" class="text-uppercase m-b-40">
                        PAY
                    </h3>
                    <p data-qa="details" class="lead">Pay with our secured platform, be happy.</p>
                </article>
            </div>
            <div class="clearfix visible-sm visible-md"></div>
        </div>
    </div>
</section>
@endsection