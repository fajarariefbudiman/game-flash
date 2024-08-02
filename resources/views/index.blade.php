<x-header title="{{ $title }}"/>
@extends('layout.main')
@section('container')
{{-- Carousel Main Start --}}
<div id="carouselExampleFade" class="carousel slide carousel-fade mb-5">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/2.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image/3.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
</div>
{{-- Carousel Main End --}}

{{-- Home Content Start--}}
<div class="container-fluid">
    <div class="row">

        <div class="col-8">
            <div class="rounded bg-white border-left-primary p-3 text-uppercase">
                <span class="fw-semibold ms-5 fs-5">
                    Featured News
                </span>
            </div>

            {{-- Carousel Left Content --}}
            <div id="carouselExample" class="carousel slide mt-3">
                <div class="carousel-inner rounded">
                    <div class="carousel-item active zoom-content">
                        <a href="#">
                            <img src="image/2.png" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <div class="carousel-item carousel-content">
                        <a href="#">
                            <img src="image/1.png" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <div class="carousel-item carousel-content">
                        <a href="#">
                            <img src="image/3.png" class="d-block w-100" alt="...">
                        </a>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            {{-- End --}}

            {{-- Card Content --}}
            <div class="d-flex mt-4 justify-content-between flex-wrap">

              <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card zoom-content" style="width: 100%;">
                        <a href="">
                            <img src="image/1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card zoom-content" style="width: 100%;">
                        <a href="">
                            <img src="image/yoyo.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card zoom-content" style="width: 100%;">
                        <a href="">
                            <img src="image/1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card zoom-content" style="width: 100%;">
                        <a href="">
                            <img src="image/1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card zoom-content" style="width: 100%;">
                        <a href="">
                            <img src="image/1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card zoom-content" style="width: 100%;">
                        <a href="">
                            <img src="image/1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card zoom-content" style="width: 100%;">
                        <a href="">
                            <img src="image/1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card zoom-content" style="width: 100%;">
                        <a href="">
                            <img src="image/1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card zoom-content" style="width: 100%;">
                        <a href="">
                            <img src="image/1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card zoom-content" style="width: 100%;">
                        <a href="">
                            <img src="image/1.png" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>

              </div>

            </div>
            {{-- End --}}
        </div>

     <div class="col">

         {{-- Sosmed Button --}}
        <div class="d-flex text-uppercase sosmed-detail">
                <a href="" class="col bg-primary text-center fw-semibold text-decoration-none text-white rounded d-flex flex-column align-items-center justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook mb-2" viewBox="0 0 16 16">
                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                </svg>
                Like Our Facebook Page
            </a>
            <a href="" class="col bg-secondary mx-2 text-center fw-semibold text-decoration-none text-white rounded d-flex flex-column align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="currentColor" class="bi bi-twitter mb-2" viewBox="0 0 16 16">
                    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
                </svg>
                Follow Us On Twitter
            </a>
            <a href="" class="col bg-info text-center fw-semibold text-decoration-none text-white rounded d-flex flex-column align-items-center justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-discord mb-2" viewBox="0 0 16 16">
                    <path d="M13.545 2.907a13.2 13.2 0 0 0-3.257-1.011.05.05 0 0 0-.052.025c-.141.25-.297.577-.406.833a12.2 12.2 0 0 0-3.658 0 8 8 0 0 0-.412-.833.05.05 0 0 0-.052-.025c-1.125.194-2.22.534-3.257 1.011a.04.04 0 0 0-.021.018C.356 6.024-.213 9.047.066 12.032q.003.022.021.037a13.3 13.3 0 0 0 3.995 2.02.05.05 0 0 0 .056-.019q.463-.63.818-1.329a.05.05 0 0 0-.01-.059l-.018-.011a9 9 0 0 1-1.248-.595.05.05 0 0 1-.02-.066l.015-.019q.127-.095.248-.195a.05.05 0 0 1 .051-.007c2.619 1.196 5.454 1.196 8.041 0a.05.05 0 0 1 .053.007q.121.1.248.195a.05.05 0 0 1-.004.085 8 8 0 0 1-1.249.594.05.05 0 0 0-.03.03.05.05 0 0 0 .003.041c.24.465.515.909.817 1.329a.05.05 0 0 0 .056.019 13.2 13.2 0 0 0 4.001-2.02.05.05 0 0 0 .021-.037c.334-3.451-.559-6.449-2.366-9.106a.03.03 0 0 0-.02-.019m-8.198 7.307c-.789 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.45.73 1.438 1.613 0 .888-.637 1.612-1.438 1.612m5.316 0c-.788 0-1.438-.724-1.438-1.612s.637-1.613 1.438-1.613c.807 0 1.451.73 1.438 1.613 0 .888-.631 1.612-1.438 1.612"/>
                </svg>
                Join Discord Now
            </a>
        </div>
        {{-- Sosmed Button End --}}

        {{-- News Start --}}
        <div class="rounded bg-white pb-5">

            {{-- Top Trending Start --}}

            <div class="col mt-3">
                <div class="p-2 text-uppercase">
                    <span class="fw-semibold ms-3 fs-5">
                        Top Trending
                    </span>
                </div>
                    <div class="text-uppercase justify-content-evenly flex-wrap d-flex mt-3 py-3"
                    style="border-top: 1px solid #dedede; border-bottom: 1px solid #dedede;">
                    <a href="" class="text-decoration-none text-dark">Newest</a>
                    <a href="" class="text-decoration-none text-dark">Most Liked</a>
                    <a href="" class="text-decoration-none text-dark">Popular</a>
                    {{-- <a href="" class="text-decoration-none text-dark">Popular</a>
                    <a href="" class="text-decoration-none text-dark">Popular</a>
                    <a href="" class="text-decoration-none text-dark">Popular</a> --}}
                    </div>
            </div>

            {{-- Top Trending End --}}

            {{-- Beginning Of The News --}}
            <div class="news" style="border-bottom: 1px solid #dedede;">
                <div class="d-flex align-items-start">
                    <span class="bg-primary py-1 px-3 rounded my-3 mx-2 text-white" style="font-size: 11px; font-weight: 600;">xTheo__11x</span>
                    <span class="bg-primary py-1 px-3 rounded my-3 mx-2 text-white" style="font-size: 11px; font-weight: 600;">xTheo__11x</span>
                </div>
                <a href="" class="py-1 px-3 rounded my-3 text-decoration-none"
                style="color: rgba(12, 6, 59, 0.582); font-weight: 700">Transfer of WTX_Lahuche566</a>
                <div>
                    <span class=" py-1 px-3 my-3"
                    style="font-size: 10px; font-weight: 700; color: rgba(50, 50, 50, 0.500)">20 March 2005</span>
                    <p class=" py-1 px-3 my-3"
                    style="font-size: 12px; font-weight: 500; color: rgb(50, 50, 50)"
                    >Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem nesciunt eos odit vel possimus numquam esse necessitatibus tenetur quibusdam totam?</p>
                </div>
            </div>

            {{-- End Of News --}}
        </div>
        {{-- News End --}}

    </div>
    </div>
</div>
{{-- Home End --}}


@endsection
