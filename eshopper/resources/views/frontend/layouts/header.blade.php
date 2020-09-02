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
                    <a class="text-decoration-none font-italic text-orange" href="{{route('home')}}">
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
                    <a class="text-decoration-none font-italic text-orange" href="{{route('home.about')}}">
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
            <ul class="m-0 p-0 d-flex justify-content-center align-items-center animate__animated animate__fadeInUp">
                <li class="list-unstyled mr-4">
                    <a class="text-decoration-none text-orange d-flex align-items-center" href="{{route('getLogin')}}">
                        <i class="far fa-user-circle fa-lg mr-2"></i>
                        <small class="font-italic">ACCOUNT</small>
                    </a>
                </li>
                <li class="list-unstyled">
                    <a type="button" class="btn btn-primary btn-orange rounded-0" href="{{route('cart.show')}}">
                        <i class="fas fa-shopping-bag fa-lg"></i>
                        <small class="font-italic">({{Cart::count()}})</small>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>