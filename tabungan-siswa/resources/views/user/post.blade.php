@extends('layout.master')

@section('title')
    <title>Post</title>
@endsection

@section('content')

    <!-- Konten -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                    <h3 class="font-weight-bold">Post</h3>
                    </div>
                </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <main role="main" class="container">
                                <div class="row">
                                    <div class="col-md-12 blog-main">
                                        <h3 class="pb-4 mb-4 font-weight-bolder border-bottom">
                                            KuTabung NEWS
                                        </h3>
                                    
                                        <div class="blog-post">
                                            <a href="#!"><img class="card-img-top mb-3" src="{{ $post->image }}" alt="Gambar Disini" /></a>
                                            <h2 class="blog-post-title mt-2">{{ $post->judul }}</h2>
                                            <p class="blog-post-meta mt-2">{{ $post->updated_at }}</p>
                                            <p class="blog-post-meta mt-2">{{ $post->name }}</p>
                                            <hr>
                                            <p>{!! $post->isi !!}</p>
                                            
                                        </div>

                                        {{-- Tombol Kembali Home --}}
                                        <a href="/"> 
                                            <button class="btn btn-info text-white w-100 mt-5">Back</button> 
                                        </a>
                                
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection