@extends('frontend.master')
@section('title', 'CATEGORY')
@section('content')
<div class="container-fluid Products">
    <div class="row my-4">
        <div class="col-12 p-0 mb-5">
            <div class="img d-flex justify-content-center align-items-center Products_row_col-12_img"
                style="background-image: url('frontend/images/shop.png');">
                <h1 class="font-italic text-orange font-lg pointer animate__animated animate__fadeInDown">
                    CATEGORY
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="container Categories">
    <div class="row">
        <div class="col-3">
            <div class="col-12 Categories_row_col-4_col-12 d-flex align-items-center justify-content-center animate__animated animate__fadeInDown"
                style="background-image: url('frontend/images/background-search.png');">
                <div class="search">
                    <form action="{{route('home.search')}}" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control rounded-0" name="result" placeholder="Search ...">
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-12 my-5 animate__animated animate__fadeInLeft">
                <div class="title d-flex align-items-center text-orange border-b-orange pb-3">
                    <i class="fas fa-coffee fa-lg text-secondary"></i>
                    <h5 class="font-italic m-0 ml-4">CATEGORIES</h5>
                </div>
                <ul class="p-0 ml-2 my-3">
                    @foreach ($categories as $item)
                    <li class="list-unstyled py-2 text-secondary">
                        <i class="fas fa-angle-right mr-2"></i>
                        <a class="text-decoration-none text-orange"
                            href="{{route('home.category', [$item->cate_id, $item->cate_name])}}">{{$item->cate_name}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            <div class="col-12 my-5 animate__animated animate__fadeInLeft">
                <div class="title d-flex align-items-center text-orange border-b-orange pb-3">
                    <i class="fas fa-filter fa-lg text-secondary"></i>
                    <h5 class="font-italic m-0 ml-4">FILTER BY PRICE</h5>
                </div>

                <div class="slider my-5 d-flex flex-column align-items-center justify-content-center">
                    <div class="text text-center Categories_row_col-4_col-12_text ml-5 mb-3">
                        <p class="Categories_row_col-4_col-12_p m-0 font-italic text-black" id="rangeValue">100</p>
                    </div>
                    <input class="Categories_row_col-4_col-12_input" type="range" min="0" max="200" value="100"
                        oninput="rangeValue.innerText = this.value">
                    <button class="btn btn-outline-orange rounded-0 mt-4 px-4 font-italic">
                        Filter
                    </button>
                </div>
            </div>
        </div>

        <div class="col-9 d-flex flex-wrap">

            <div class="col-md-12 mt-3 animate__animated animate__fadeInDown">
                <div class="title">
                    <h4 class="text-orange font-italic text-uppercase text-secondary">Search with keyword:&nbsp
                        <span class="text-orange">{{$keyword}}</span>
                    </h4>
                </div>
                <div class="show">
                    <h5 class="m-0 text-orange font-italic">Have {{$count}} result</h5>
                </div>
            </div>

            @foreach ($products as $item)
            <div class="col-md-4 mb-5 Products_row_col-4 animate__animated animate__fadeInUp">
                <div class="product-top Products_row_col-4_product-top text-center">
                    <img class="img Products_row_col-4_product-top_img" src="backend/img/{{$item->prod_image}}">
                    <div
                        class="overlay Products_row_col-4_product-top_overlay d-flex flex-column justify-content-center">
                        <a class="btn btn-outline-orange my-2 rounded-0"
                            href="{{route('home.detail', $item->prod_id)}}">
                            <i class="fas fa-eye"></i>
                        </a>
                        <button class="btn btn-outline-orange my-2 rounded-0">
                            <i class="fas fa-heart"></i>
                        </button>
                        <button class="btn btn-outline-orange my-2 rounded-0">
                            <i class="fas fa-shopping-bag"></i>
                        </button>
                    </div>
                </div>
                <div class="product-bottom text-center mt-4">
                    <a class="text-decoration-none" href="{{route('home.detail', $item->prod_id)}}">
                        <h6 class="m-0 text-orange font-italic">{{$item->prod_name}}</h6>
                    </a>
                    <p class="m-0 text-secondary font-italic">$&nbsp{{number_format($item->prod_price,2)}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @endsection