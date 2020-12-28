@extends('home.layouts.app')
@section('main')
    <!-- Nav Bar Start -->
    <div class="nav-bar">
        <div class="container">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <a href="#" class="navbar-brand">MENU</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto">
                        <a href="{{route('home.index')}}" class="nav-item nav-link active">Home</a>
                        @foreach($data['menu'] as $menu)
                        <div class="nav-item dropdown">
                            @if($menu->subcategories()->count() > 0)
                            <a href="{{route('home.category',$menu->slug)}}" class="nav-link dropdown-toggle" data-toggle="dropdown">{{$menu->title}}</a>
                            <div class="dropdown-menu">
                                @foreach($menu->subcategories()->get() as $sub_menu)

                                <a href="{{route('home.subcategory',$sub_menu->slug)}}" class="dropdown-item">{{$sub_menu->title}}</a>
{{--                                    @php($sub_menu->posts()->get()))--}}
                                @endforeach
                            </div>
                            @else
                                <a href="{{route('home.category',$menu->slug)}}" class="nav-item nav-link">{{$menu->title}}</a>
                            @endif
                        </div>
                        @endforeach
                        <a href="contact.html" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <div class="social ml-auto">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                        <a href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Nav Bar End -->

    <!-- Top News Start-->
    <div class="top-news">
        <div class="container">
            <div class="row">
                <div class="col-md-12 tn-left">
                    <div class="tn-slider">
                        @foreach($data['top_news'] as $top_news)
                            <div class="tn-img">
                                <img src="{{asset($top_news->image)}}" height="400px"/>
                                <div class="tn-title">
                                    <a href="{{route('news.detail',$top_news->slug)}}">{{$top_news->title}}</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top News End-->

    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>{{$data['category'][0]->title}}</h2>
                    <div class="row cn-slider">
                        @foreach($data['first_news'] as $first_news)
                        <div class="col-md-6">
                            <div class="cn-img">
                                <img src="{{asset($first_news->image)}}" height="200"  />
                                <div class="cn-title">
                                    <a href="{{route('news.detail',$first_news->slug)}}">{{$first_news->title}}</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>{{$data['category'][1]->title}}</h2>
                    <div class="row cn-slider">
                        @foreach($data['second_news'] as $second_news)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{asset($second_news->image)}}" height="200"  />
                                    <div class="cn-title">
                                        <a href="">{{$second_news->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Category News End-->



    <!-- Tab News Start-->
    <div class="tab-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" >Latest News</a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="container tab-pane active">
                            @foreach($data['latest_news'] as $latest_news)
                            <div class="tn-news">
                                <div class="tn-img">
                                    <img src="{{asset($latest_news->image)}}" />
                                </div>
                                <div class="tn-title">
                                    <a href="">{{$latest_news->title}}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#m-viewed">Most Viewed</a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div class="container tab-pane active">
                            @foreach($data['most_view'] as $most_view)
                                <div class="tn-news">
                                    <div class="tn-img">
                                        <img src="{{asset($most_view->image)}}" />
                                    </div>
                                    <div class="tn-title">
                                        <a href="">{{$most_view->title}}</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tab News Start-->

    <!-- Main News Start-->
    <div class="main-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="img/news-350x223-1.jpg" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="img/news-350x223-2.jpg" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="img/news-350x223-3.jpg" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="img/news-350x223-4.jpg" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="img/news-350x223-5.jpg" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="img/news-350x223-1.jpg" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="img/news-350x223-2.jpg" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="img/news-350x223-3.jpg" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mn-img">
                                <img src="img/news-350x223-4.jpg" />
                                <div class="mn-title">
                                    <a href="">Lorem ipsum dolor sit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="mn-list">
                        <h2>Read More</h2>
                        <ul>
                            <li><a href="">Lorem ipsum dolor sit amet</a></li>
                            <li><a href="">Pellentesque tincidunt enim libero</a></li>
                            <li><a href="">Morbi id finibus diam vel pretium enim</a></li>
                            <li><a href="">Duis semper sapien in eros euismod sodales</a></li>
                            <li><a href="">Vestibulum cursus lorem nibh</a></li>
                            <li><a href="">Morbi ullamcorper vulputate metus non eleifend</a></li>
                            <li><a href="">Etiam vitae elit felis sit amet</a></li>
                            <li><a href="">Nullam congue massa vitae quam</a></li>
                            <li><a href="">Proin sed ante rutrum</a></li>
                            <li><a href="">Curabitur vel lectus</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News End-->
@endsection
