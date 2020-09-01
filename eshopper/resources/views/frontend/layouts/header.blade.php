<!-- Topbar -->
<div class="container Topbar">
    <div class="row d-flex justify-content-between align-items-center my-3">
        <div class="col-2 animate__animated animate__fadeInLeft">
            <a href="{{route('home')}}">
                <img src="frontend/images/white-logo.png" width="80%">
            </a>
        </div>

        <div class="col-4 menu-bar animate__animated animate__fadeInDown">
            <ul class="m-0 p-0 d-flex justify-content-around align-items-center">
                <li class="list-unstyled">
                    <a class="text-decoration-none font-italic text-orange" href="#shop"">
                        SHOP
                    </a>
                    {{-- <div class="sub-menu Topbar_row_col-4_ul_li_sub-menu pt-1">
                        <ul class="m-0 p-0 list-menu">
                            <li class="list-unstyled my-1">
                                <a class="text-decoration-none text-orange font-italic" href="#shop">
                                    COFFEE
                                </a>
                            </li>
                            <li class="list-unstyled my-1">
                                <a class="text-decoration-none text-orange font-italic" href="#shop">
                                    EQUIPMENT
                                </a>
                            </li>
                        </ul>
                    </div> --}}
                </li>
                <li class="list-unstyled">
                    <a class="text-decoration-none font-italic text-orange" href="#about">
                        ABOUT US
                    </a>
                </li>
                <li class="list-unstyled">
                    <a class="text-decoration-none font-italic text-orange" href="#contact">
                        CONTACT
                    </a>
                </li>
            </ul>
        </div>

        <div class="col-3">
            <ul class="m-0 p-0 d-flex justify-content-center align-items-center">
                <li class="list-unstyled mr-4 animate__animated animate__fadeInUp">
                    <a class="text-decoration-none text-orange d-flex align-items-center" href="{{route('getLogin')}}">
                        <i class="far fa-user-circle fa-lg mr-2"></i>
                        <small class="font-italic">ACCOUNT</small>
                    </a>
                </li>
                <li class="list-unstyled">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-orange rounded-0" data-toggle="modal"
                        data-target="#exampleModal">
                        <i class="fas fa-shopping-bag fa-lg"></i>
                        <small class="font-italic">(2)</small>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content rounded-0 border-orange bg-darkmaroon">
                                <div
                                    class="modal-header d-flex justify-content-center font-italic bg-orange border-b-orange rounded-0">
                                    <h5 class="modal-title text-black" id="exampleModalLabel">
                                        MY CART
                                    </h5>
                                </div>
                                <div class="modal-body">
                                    <div class="product">
                                        <div class="product-items d-flex justify-content-around align-items-center">
                                            <div class="img Topbar_row_col-3_modal-body_product_product_items_img">
                                                <img class="pic Topbar_row_col-3_modal-body_product_product_items_img_pic"
                                                    src="frontend/images/coffee/granville.png">
                                            </div>
                                            <div
                                                class="info Topbar_row_col-3_modal-body_product_product_items_info">
                                                <h6 class="m-0 font-italic text-orange">cafeHolic</h6>
                                                <small class="text-light">100000</small>
                                            </div>
                                            <div class="btn Topbar_row_col-3_modal-body_product_product_items_btn">
                                                <button class="btn btn-outline-orange">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr class="border-t-orange">

                                        <div class="product-items d-flex justify-content-around align-items-center">
                                            <div class="img Topbar_row_col-3_modal-body_product_product_items_img">
                                                <img class="pic Topbar_row_col-3_modal-body_product_product_items_img_pic"
                                                    src="frontend/images/coffee/vietnam-dalat.png">
                                            </div>
                                            <div
                                                class="info Topbar_row_col-3_modal-body_product_product_items_info">
                                                <h6 class="m-0 font-italic text-orange">cafeHolic</h6>
                                                <small class="text-light">100000</small>
                                            </div>
                                            <div class="btn Topbar_row_col-3_modal-body_product_product_items_btn">
                                                <button class="btn btn-outline-orange">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <hr class="border-t-orange">

                                        <div class="product-items d-flex justify-content-around align-items-center">
                                            <div class="img Topbar_row_col-3_modal-body_product_product_items_img">
                                                <img class="pic Topbar_row_col-3_modal-body_product_product_items_img_pic"
                                                    src="frontend/images/coffee/yolk-roastb.png">
                                            </div>
                                            <div
                                                class="info Topbar_row_col-3_modal-body_product_product_items_info">
                                                <h6 class="m-0 font-italic text-orange">cafeHolic</h6>
                                                <small class="text-light">100000</small>
                                            </div>
                                            <div class="btn Topbar_row_col-3_modal-body_product_product_items_btn">
                                                <button class="btn btn-outline-orange">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer border-t-orange d-flex justify-content-between ml-2">
                                    <a class="btn btn-outline-orange text-orange font-italic rounded-0" href="#cart"
                                        onclick="loadCart()" data-dismiss="modal">
                                        View Cart
                                    </a>
                                    <button type="button" class="btn btn-outline-orange font-italic rounded-0"
                                        data-dismiss="modal">
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>