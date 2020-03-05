@extends('layouts.site')

@section('content')
    <section id="slide-show">
        <div id="slider" class="sl-slider-wrapper">    
            <div class="sl-slider">
                        <div class="container ocean">
                            <img class="pull-right" src="{{$path . '/public/img/city.jpg'}}" alt="" />
                            <p>Creative Ideas</p>
                        </div>
            </div>
        </div>
    </section>

    <section class="main-info">
        <div class="container">
            <div class="row-fluid">
                <div class="span9">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</h4>
                    <p class="no-margin">Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat, consectetur adipiscing elit.</p>
                </div>
                <div class="span3">
                    <a class="btn btn-success btn-large pull-right" >Creative Ideas, now</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="center gap">
                <h3>Lorem ipsum dolorr</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
            </div>

            <div class="row-fluid">
                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-globe icon-medium"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Web Design</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>            

                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-thumbs-up-alt icon-medium"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Graphic Design</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>            

                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-leaf icon-medium icon-rounded"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Email Marketing</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gap"></div>

            <div class="row-fluid">
                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-shopping-cart icon-medium"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Ecommerce Solution</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>            

                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-globe icon-medium"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">SEO &amp; Solution</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>            

                <div class="span4">
                    <div class="media">
                        <div class="pull-left">
                            <i class="icon-globe icon-medium"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="media-heading">Bootstrap</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="recent-works">
        <div class="container">
            <div class="center">
                <h3>Most Viewed</h3>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
            </div>  
            <div class="gap"></div>
            <ul class="gallery col-4">

                @foreach($popArt as $article)
                <li>
                    <a href="{{ asset('page-').$article->id }}">
                        <div class="preview">
                            <img alt=" " src="{{ $path }}/public/img/{{$article->img}}.jpg ">
                        </div>
                    </a>
                    <div class="desc">
                        <h5>{{ $article->title }}</h5>
                    </div>                 
                </li>
                @endforeach


            </ul>
        </div>

    </section>
@endsection