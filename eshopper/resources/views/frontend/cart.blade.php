@extends('frontend.master')
@section('title', 'CART')
@section('content')
<div class="container Banner">
    <div class="row">
        <div class="col-12 p-0">
            <div class="img d-flex justify-content-center align-items-center">
                <h1 class="font-italic py-5 text-orange font-lg pointer animate__animated animate__fadeInDown">
                    CART
                </h1>
            </div>
        </div>
    </div>
</div>

@if (Cart::count()>=1)
<div class="container Content">
    <div class="row mb-5">
        <div class="col-12 animate__animated animate__fadeInLeft">
            <table class="table">
                <thead class="text-orange text-center">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">PRODUCT</th>
                        <th scope="col">PRICE</th>
                        <th scope="col">QTY</th>
                        <th scope="col">TOTAL</th>
                    </tr>
                </thead>
                <tbody class="text-light text-center">
                    @foreach ($cart as $item)
                    <tr>
                        <th>
                            <a class="text-orange text-decoration-none" href="{{route('cart.delete', $item->rowId)}}">
                                <i class="fas fa-times-circle"></i>
                            </a>
                        </th>
                        <td>
                            <div class="product d-flex">
                                <div class="img Content_row_col-12_table_product_img">
                                    <img class="pic Content_row_col-12_table_product_img_pic"
                                        src="backend/img/{{$item->options->image}}">
                                </div>
                                <div class="info Content_row_col-12_table_product_info">
                                    <h6 class="m-0 text-orange font-italic">{{$item->name}}</h6>
                                </div>
                            </div>
                        </td>
                        <td class="font-italic text-success">
                            <h5>
                                <span class="text-success">$&nbsp</span>{{number_format($item->price, 2)}}
                            </h5>
                        </td>
                        <td>
                            <input type="number" step="1" min="0" max="100" size="3"
                                class="text-orange text-center bg-none" value="{{$item->qty}}">
                        </td>
                        <td class="font-italic text-success">
                            <h5>
                                <span>$&nbsp</span>{{number_format($item->price*$item->qty, 2)}}
                            </h5>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr class="border">
        </div>

        <div class="col-12 text-right justify-content-between">
            <a class="btn btn-outline-secondary mr-3 rounded-0 font-italic animate__animated animate__fadeInLeftBig"
                href="{{route('home')}}">
                CONTINUE SHOPPING
            </a>
        </div>
    </div>
</div>

<div class="container Cart-Total">
    <div class="row justify-content-end mb-5">
        <div class="col-5 bg-none pb-4 pt-2 animate__animated animate__fadeInUp">
            <h4 class="m-0 font-italic text-secondary border-bottom p-3">CART TOTALS</h4>
            <div class="total d-flex justify-content-between align-items-center p-3 border-bottom">
                <h5 class="m-0 text-secondary font-italic">TOTAL</h5>
                <h5 class="m-0 text-success font-italic">$&nbsp{{$total}}</h5>
            </div>
            <a class="btn btn-block btn-outline-orange mt-3 font-italic rounded-0" href="{{route('home.checkout')}}">
                PROCEED TO CHECKOUT
            </a>
        </div>
    </div>
</div>
@else
<div class="container Content">
    <div class="row mb-5">
        <div class="col-12 animate__animated animate__fadeInLeft text-center">
            <img src="backend/img/empty.png" width="50%">
            <h3 class="text-danger font-italic text-uppercase">Cart empty</h3>
        </div>
    </div>
</div>
@endif

@endsection