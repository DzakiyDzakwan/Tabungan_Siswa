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
                                        <div class="input-group my-3" style="width: 1100px">
                                            <input value="{{ old('cari') }}" name="cari"  type="text" class="form-control" placeholder="Search this blog">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary" value="Search" type="submit">
                                                    <i class="mdi mdi-search menu-icon"></i>
                                                </button>
                                            </div>
                                        </div>
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