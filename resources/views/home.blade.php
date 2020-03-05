@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Articles</div>


                <form method="POST" action="{{asset('/create')}}">
                    {{ csrf_field() }}
                    <input type="title" name="title" placeholder='Name..'>
                    <input type="text"  name="text"  placeholder='Text..'>
                    <button> New article </button>
                </form>

                <div class="card-body">
                    
                    @foreach ($articles as $article)
                        <div class="liv">
                            {{ $article->title }}
                            <form method="POST" action='{{ asset("/delete/$article->id") }}'>
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button type='submit'>DELETE</button>
                            </form>
                        </div>
                    @endforeach

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
