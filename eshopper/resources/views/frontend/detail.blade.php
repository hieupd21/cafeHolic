@extends('frontend.master')
@section('title','DETAIL PRODUCT')
@section('content')
<div class="container Product">
    <div class="row my-5">
        <div class="col-12 d-flex mb-5">
            <div class="img w-50 text-center animate__animated animate__fadeInLeft">
                <img class="pic Product_row_col-12_img_pic" src="backend/img/{{$product->prod_image}}">
            </div>
            <div class="info w-50 animate__animated animate__fadeInRight">
                <h2 class="name text-orange font-italic">{{$product->prod_name}}</h2>
                <h2 class="price text-secondary font-italic">$&nbsp{{number_format($product->prod_price, 2)}}</h2>
                <input type="number" value="1" step="1" min="1" max="" size="5"
                    class="text-orange text-center bg-none p-2 font-italic">
                <a class="btn btn-outline-orange py-2 rounded-0 font-italic ml-3" href="{{route('cart.add', $product->prod_id)}}">
                    ADD TO CART
                </a>
                <p class="description text-danger">
                    {!! $product->prod_description !!}
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container Comment">
    <div class="row mb-5">
        <div class="col-12">
            <h1 class="m-0 text-orange font-italic text-center animate__animated animate__fadeInDown">
                REVIEWS
            </h1>
        </div>

        <div class="col-12 mt-2 border-b-orange animate__animated animate__fadeInLeft">
            @foreach ($comments as $item)
            <div class="w-75 mb-3">
                <h6 class="text-orange font-italic m-0">{{$item->cmt_name}}</h6>
                <small class="text-light">{{date('d/m/Y H:i', strtotime($item->created_at))}}</small>
                <p class="text-secondary">
                    {{$item->cmt_content}}
                </p>
            </div>
            @endforeach
        </div>

        <div class="col-12 py-4 border-b-orange animate__animated animate__fadeInUp">
            <h6 class="text-orange font-italic mb-3">My review for Euro Espresso Coffee</h6>
            <form class="w-50" action="{{route('home.comment', $product->prod_id)}}" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control rounded-0 bg-none text-light" name="email"
                        placeholder="Your email" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control rounded-0 bg-none text-light" name="name"
                        placeholder="Your name" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control rounded-0 bg-none text-light" name="content"
                        placeholder="Your comment" rows="5"></textarea>
                </div>
                <button class="btn btn-outline-orange rounded-0 font-italic">SUBMIT</button>
            </form>
        </div>
    </div>
</div>

<div class="container Recommended">
    <div class="row mb-5 animate__animated animate__fadeInUpBig">
        <div class="col-12">
            <h3 class="m-0 text-orange font-italic text-center">
                YOU MAY ALSO LIKE
            </h3>
        </div>

        @foreach ($prod_rela as $item)
        <div class="col-4 d-flex flex-column justify-content-center align-items-center mt-5">
            <a class="mt-2 text-decoration-none text-orange" href="{{route('home.detail', $item->prod_id)}}">
                <img class="img Recommended_row_col-4_img" src="backend/img/{{$item->prod_image}}">
                <h5 class="m-0 font-italic text-center mt-4">{{$item->prod_name}}</h5>
            </a>
            <p class="m-0 font-italic text-secondary">$&nbsp{{number_format($item->prod_price, 2)}}</p>
            <a class="btn btn-outline-orange font-italic text-orange rounded-0 mt-5 Recommended_row_col-4_btn"
                href="{{route('home.detail', $item->prod_id)}}">
                VIEW PRODUCT
            </a>
        </div>
        @endforeach

        {{-- <div class="col-4 d-flex flex-column justify-content-center align-items-center mt-5">
            <a class="mt-2 text-decoration-none text-orange" href="">
                <img class="img Recommended_row_col-4_img" src="backend/img/euro-espresso.png">
                <h5 class="m-0 font-italic text-center mt-2">Yolk Roastb</h5>
            </a>
            <p class="m-0 font-italic text-secondary">$20.00</p>
            <button class="btn btn-outline-orange font-italic text-orange rounded-0 mt-5 Recommended_row_col-4_btn">
                VIEW PRODUCT
            </button>
        </div>

        <div class="col-4 d-flex flex-column justify-content-center align-items-center mt-5">
            <a class="mt-2 text-decoration-none text-orange" href="">
                <img class="img Recommended_row_col-4_img" src="backend/img/euro-espresso.png">
                <h5 class="m-0 font-italic text-center mt-2">Yolk Roastb</h5>
            </a>
            <p class="m-0 font-italic text-secondary">$20.00</p>
            <button class="btn btn-outline-orange font-italic text-orange rounded-0 mt-5 Recommended_row_col-4_btn">
                VIEW PRODUCT
            </button>
        </div> --}}
    </div>
</div>
@endsection