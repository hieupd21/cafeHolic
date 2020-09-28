@extends('frontend.master')
@section('title', 'ABOUT US')
@section('content')
<div class="container-fluid Banner">
    <div class="row justify-content-center">
        <div class="col-12 p-0">
            <div class="img d-flex justify-content-center align-items-center Banner_row_col-12_img" style="background-image: url('frontend/images/banner.png');">
                <h1 class="font-italic text-orange font-lg pointer animate__animated animate__fadeInDown">
                    ABOUT US
                </h1>
            </div>
        </div>

        <div class="col-7 text-center my-4">
            <h1 class="m-0 text-orange font-italic pointer animate__animated animate__fadeInLeft">
                It started with a simple idea:
            </h1>
            <h1 class="m-0 text-orange font-italic pointer animate__animated animate__fadeInRight">
                Make great coffee.
                </h2>
                <p class="text-secondary font-italic mt-2 animate__animated animate__fadeInUp">
                    Everything we do is rooted in that basic concept. It’s what drives us. It’s what moves us, motivates
                    us and keeps us excited about our products, our services and all we do in the community. We are
                    coffee passionate.
                </p>
        </div>

        <div class="col-12 p-0 mb-5">
            <div class="content d-flex justify-content-center align-items-center">
                <div class="img w-50 Banner_row_col-12_content_img-1 animate__animated animate__fadeInDown" style="background-image: url('frontend/images/our-coffee.png');"></div>
                <div class="desc w-50 animate__animated animate__fadeInRight">
                    <h1 class="text-orange font-italic mx-4 pointer">OUR COFFEE</h1>
                    <p class="text-secondary font-italic mx-4 m-0">
                        From crop to café to cup, <a class="text-orange text-decoration-none"
                            href="{{route('home')}}">cafeHolic</a> is passionate about offering you the perfect coffee; roasted
                        and blended into a delicious creation of flavours and aromas. With the help of our master
                        roasters and bean hunters, our beans are carefully roasted to give you the best coffee
                        experience, every time.
                    </p>
                </div>
            </div>
            <div class="content d-flex justify-content-center align-items-center">
                <div class="desc w-50 animate__animated animate__fadeInLeft">
                    <h1 class="text-orange font-italic mx-4 pointer">ROASTERY</h1>
                    <p class="text-secondary font-italic mx-4 m-0">
                        Our roastery in Da Nang is where all the magic happens, utilising the latest technology and
                        innovation to ensure the highest quality coffee in every cup.
                    </p>
                    <p class="text-secondary font-italic mx-4 m-0">
                        So, we’re committed to delivering a better coffee experience for everyone.
                    </p>
                </div>
                <div class="img w-50 Banner_row_col-12_content_img-2 animate__animated animate__fadeInUp" style="background-image: url('frontend/images/roastery.png');"></div>
            </div>
        </div>
    </div>
</div>
@endsection