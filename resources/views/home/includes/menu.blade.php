<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="{{route('home.index')}}" class="nav-item nav-link @if(\Request::is('/')) active @endif">Home</a>
                    @foreach($menus as $menu)
                        <div class="nav-item dropdown">
                            @if($menu->subcategories()->count() > 0)
                                <a href="{{route('home.category',$menu->slug)}}" class="nav-link dropdown-toggle @if(\Request::is('subcategory/'.$menu->slug.'/*')) active @endif " data-toggle="dropdown">{{$menu->title}}</a>
                                <div class="dropdown-menu">
                                    @foreach($menu->subcategories()->get() as $sub_menu)

                                        <a href="{{route('home.subcategory',[$menu->slug,$sub_menu->slug])}}" class="dropdown-item">{{$sub_menu->title}}</a>
                                        {{--                                    @php($sub_menu->posts()->get()))--}}
                                    @endforeach
                                </div>
                            @else
                                <a href="{{route('home.category',$menu->slug)}}" class="nav-item nav-link">{{$menu->title}}</a>
                            @endif
                        </div>
                    @endforeach
                    <a href="{{route('home.contact')}}" class="nav-item nav-link @if(\Request::is('contact-us*')) active @endif ">Contact Us</a>
                </div>
                <div class="social ml-auto">
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-facebook-f"></i></a>
                    <a href="{{$facebook_url}}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    <a href=""><i class="fab fa-instagram"></i></a>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </nav>
    </div>
</div>
