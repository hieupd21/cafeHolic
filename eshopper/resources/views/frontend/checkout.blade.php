@extends('frontend.master')
@section('title', 'CHECKOUT')
@section('content')
<div class="container-fluid Banner">
    <div class="row">
        <div class="col-12 p-0">
            <div class="img d-flex justify-content-center align-items-center Banner_row_col-12_img" style="background-image: url('frontend/images/checkout.png');">
                <h1 class="font-italic text-orange font-lg pointer animate__animated animate__fadeInDown">
                    CHECKOUT
                </h1>
            </div>
        </div>
    </div>
</div>

<div class="container Content">
    <div class="row my-4">
        <div class="col-6 mb-4 animate__animated animate__fadeInLeft">
            <h4 class="font-italic text-orange border-bottom py-3">ORDER INFOMATION</h4>
            <form action="" class="info">
                <div class="form-group mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-none rounded-0 text-orange">
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                        </div>
                        <input type="text" class="form-control bg-none rounded-0 text-light" placeholder="Your address">
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-none rounded-0 text-orange">
                                <i class="fas fa-at"></i>
                            </span>
                        </div>
                        <input type="email" class="form-control bg-none rounded-0 text-light" placeholder="Your email">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-none rounded-0 text-orange">
                                    <i class="fas fa-user-circle"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control bg-none rounded-0 text-light"
                                placeholder="Your name">
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text bg-none rounded-0 text-orange">
                                    <i class="fas fa-phone-alt"></i>
                                </span>
                            </div>
                            <input type="text" class="form-control bg-none rounded-0 text-light"
                                placeholder="Your phone number">
                        </div>
                    </div>
                </div>
                <a class="btn btn-block btn-outline-orange mt-3 font-italic rounded-0" href="">
                    PLACE ORDER
                </a>
                <a class="btn btn-block btn-outline-secondary mt-3 font-italic rounded-0" href="{{route('cart.show')}}">
                    BACK TO CART
                </a>
            </form>
        </div>

        <div class="col-6 bg-none pb-4 pt-2 animate__animated animate__fadeInRight">
            <h4 class="m-0 font-italic text-orange border-bottom p-3">YOUR ORDER</h4>
            <div class="product p-3 border-bottom">
                <div class="product-items d-flex justify-content-between mb-1">
                    <h6 class="m-0 text-secondary font-italic">SUBTOTAL</h6>
                    <p class="m-0 text-light font-italic">100000</p>
                </div>
                <div class="product-items d-flex justify-content-between mb-1">
                    <h6 class="m-0 text-secondary font-italic">SUBTOTAL</h6>
                    <p class="m-0 text-light font-italic">100000</p>
                </div>
                <div class="product-items d-flex justify-content-between mb-1">
                    <h6 class="m-0 text-secondary font-italic">SUBTOTAL</h6>
                    <p class="m-0 text-light font-italic">100000</p>
                </div>
            </div>
            <div class="subtotal d-flex justify-content-between align-items-center p-3 border-bottom">
                <h6 class="m-0 text-secondary font-italic">SUBTOTAL</h6>
                <p class="m-0 text-light font-italic">100000</p>
            </div>
            <div class="shipping d-flex justify-content-between align-items-center p-3 border-bottom">
                <h6 class="m-0 text-secondary font-italic">SHIPPING</h6>
                <p class="m-0 text-light font-italic">50000</p>
            </div>
            <div class="total d-flex justify-content-between align-items-center p-3 border-bottom">
                <h6 class="m-0 text-secondary font-italic">TOTAL</h6>
                <p class="m-0 text-light font-italic">150000</p>
            </div>
        </div>
    </div>
</div>
@endsection