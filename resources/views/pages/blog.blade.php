@extends('layouts.site')

@section('content')
<section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    <h1>Blog</h1>
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
    <!-- / .title -->         

    <section id="about-us" class="container main">
        <div class="row-fluid">
            <div class="span8">
                <div class="blog">

                @foreach($posts as $post)
                    <div class="blog-item well">
                        <a href="{{ asset('page-') . $post->id }}">
                            <h2>{{ $post->title }}</h2>
                        </a>
                        <div class="blog-meta clearfix">
                            <p class="pull-left">
                              <i class="icon-user"></i> by 
                                
                                   @foreach( $users->where('id', $post->user_id) as $user )
                                   {{  $user->name  }}
                                   @endforeach
                                | 
                              <i class="icon-calendar"></i> {{ substr($post->created_at,0, strpos($post->created_at, ' ')) }}
                            </p>
                        </div>
                        <p><img src="{{ $path }}/public/img/{{ $post->img }}.jpg" width="100%" alt="" /></p>
                        <p> {{ $post->text }}</p>
                        <a class="btn btn-link" href="{{ asset('page-') . $post->id }}">Read More 
                            <i class="icon-angle-right"></i></a>
                    </div>
                @endforeach

                <div class="gap"></div>

                <div class="pagination">
                    {{ $posts->render() }}
                </div>

        </div>
    </div>
    
</div>

</section>
@endsection