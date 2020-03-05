@extends('layouts.site')

@section('content')
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Page {{ $page->title }}</h1>
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="{{ url('/') }}">Home</a> <span class="divider">/</span></li>
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us" class="container main">
        <div class="row-fluid flexibl">
            <div class="span8 center">
                <div class="blog">

                    <div class="blog-item well">
                        <a href="#">
                            <h2>{{ $page->title }}</h2>
                        </a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                              <i class="icon-user"></i> by {{  $user  }}
                                | 
                              <i class="icon-calendar"></i> {{ $date }}
                            </p>
                            <p class="pull-right">
                                <i class="icon-eye-open"></i>
                                {{ $page->views }}
                            </p>
                        </div>
                        <p><img src="{{ $path }}/public/img/{{ $page->img }}.jpg" width="100%" alt="" /></p>
                        <p> {{ $page->text }}</p>
                        
                    </div>
                </div>
                
                @if (auth()->user())
                    <form method='POST' action="{{asset('/pager')}}">
                        {{ csrf_field() }}
                        <input type='text' name="comment">
                        <input type='hidden' name="page" value="{{$page->id}}">
                        <button type='submit'> Добавить комментарий  </button>
                    </form>
                @else
                    Только авторизированные пользователи могут оставлять комментарии
                @endif


                <a name="bottom"></a>
            
                @foreach($comments as $comment)
                    <div class="me">
                        <span> <i class="icon-user"></i> {{ $user }} </span>
                        {{ $comment->text }}
                    </div>
                @endforeach
            
            </div>
        </div>
    </section>
@endsection