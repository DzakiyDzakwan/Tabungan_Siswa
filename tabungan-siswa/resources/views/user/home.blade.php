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
                            <div class="row col-lg-12 ">
                            <!-- Search Home Only -->
                            <ul class="navbar-nav container-fluid mx-auto">
                                <li class="nav-item nav-search d-none d-lg-block">
                                <div class="input-group">
                                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                    <span class="input-group-text" id="search">
                                        <i class="mdi mdi-search-web menu-icon"></i>
                                    </span>
                                    </div>
                                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                                </div>
                                </li>
                            </ul>
                            </div>
                            <div class="row">
                                <!-- Blog entries-->
                                <div class="col-lg-12">
                                    <!-- Featured blog post-->
                                    <div class="card mb-4">
                                        <a href="#!"><img class="card-img-top" src="images/gbr1.jpg" alt="..." /></a>
                                        <div class="card-body">
                                            <div class="small text-muted mb-2">10 Juni 2022 | Penulis</div>
                                            <h2 class="card-title">Post Utama</h2>
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                                            <a class="btn btn-primary" href="post">Read more</a>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <!-- Blog post-->
                                            <div class="card mb-4">
                                                <a href="#!"><img class="card-img-top" src="images/gbr2.jpg" alt="..." /></a>
                                                <div class="card-body">
                                                    <div class="small text-muted mb-2">10 Juni 2022 | Penulis</div>
                                                    <h2 class="card-title h4">Post Cadangan</h2>
                                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                                    <a class="btn btn-primary" href="post">Read more</a>
                                                </div>
                                            </div>
                                            <!-- Blog post-->
                                            <div class="card mb-4">
                                                <a href="#!"><img class="card-img-top" src="images/gbr2.jpg" alt="..." /></a>
                                                <div class="card-body">
                                                    <div class="small text-muted mb-2">10 Juni 2022 | Penulis</div>
                                                    <h2 class="card-title h4">Post Cadangan</h2>
                                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                                    <a class="btn btn-primary" href="post">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- Blog post-->
                                            <div class="card mb-4">
                                                <a href="#!"><img class="card-img-top" src="images/gbr2.jpg" alt="..." /></a>
                                                <div class="card-body">
                                                    <div class="small text-muted mb-2">10 Juni 2022 | Penulis</div>
                                                    <h2 class="card-title h4">Post Cadangan</h2>
                                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                                    <a class="btn btn-primary" href="post">Read more</a>
                                                </div>
                                            </div>
                                            <!-- Blog post-->
                                            <div class="card mb-4">
                                                <a href="#!"><img class="card-img-top" src="images/gbr2.jpg" alt="..." /></a>
                                                <div class="card-body">
                                                    <div class="small text-muted mb-2">10 Juni 2022 | Penulis</div>
                                                    <h2 class="card-title h4">Post Cadangan</h2>
                                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.</p>
                                                    <a class="btn btn-primary" href="post">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    {{-- <!-- Pagination-->
                                    <nav aria-label="Pagination">
                                        <hr class="my-0" />
                                        <ul class="pagination justify-content-center my-4">
                                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                                            <li class="page-item"><a class="page-link" href="#">15</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Older</a></li>
                                        </ul>
                                    </nav> --}}

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