@extends('layout.master')

@section('title')
    <title>Home</title>
@endsection

@section('content')

    <!-- Konten -->
    <div class="main-panel">
        <div class="content-wrapper">
            
            <div class="row">
                <div class="col-md-12 grid-margin">
                    <div class="row">
                        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                            <h3 class="font-weight-bold">Home</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row col-lg-12 text-center">

                                    {{-- Fungsi Search Data --}}
                                    <form action="/home/cari" method="GET">
                                        <input type="text" name="cari" placeholder="Search..." value={{ old('cari') }}>
                                        <input type="submit" placeholder="Search">
                                    </form>
                                    

                                </div>
                                <div class="row">
                                    <!-- Blog entries-->
                                    <div class="col-lg-12">
                                        <div class="row">

                                            @foreach ($posts as $post)

                                                <div class="col-lg-6">
                                                    <!-- Blog post-->
                                                    <div class="card mb-4">
                                                        <a href="#!"><img class="card-img-top" src="{{ $post->image }}" alt="..." /></a>
                                                        <div class="card-body">
                                                            <div class="small text-muted mb-2"></div>
                                                            <h2 class="card-title h4">{{ $post->judul }}</h2>
                                                            <p class="card-text"></p>
                                                            <a class="btn btn-primary" href="/post/{{ $post->berita_id }}">Read more</a>
                                                        </div>
                                                    </div>
                                                </div>

                                            @endforeach
                                        
                                        </div>
                                        {{-- Pagination --}}
                                        <div class="row text-center">
                                            {{ $posts->links() }}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
    </div>

@endsection