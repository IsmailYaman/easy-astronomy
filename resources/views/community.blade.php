@extends('layouts.app')

@section('content')
<img src="img/space.jpg" class="img-fluid banner-page position-absolute" alt="...">
<div class="container justify-content-center">
    <h1 class="text-light">Community</h1>
    <div class="card page-background mb-5 shadow-lg">
        <div class="row mb-3">
            <div class="col-sm-6">
                <a class="btn btn-primary mr-1" type="button">Latest posts</a>
                <a class="btn btn-primary mr-1" type="button">Hot posts</a>
                <a class="btn btn-primary mr-1" type="button">Most talked</a>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-primary mr-1 float-right" type="button"><i class="fas fa-plus"></i> New post</a>
            </div>
        </div>

        <div class="card shadow mb-3 post-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/space.jpg" class="post-image" alt="..." width="360px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Post name</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut minus
                            explicabo consequatur voluptates facilis, delectus totam eum quam asperiores mollitia
                            obcaecati, nostrum, quasi minima fuga nesciunt sint. Voluptate, distinctio officia.</p>
                        <p class="card-text"><small class="text-muted">Today at 10:53 | 30 comments</small></p>
                        <a href="#" class="btn btn-primary float-right">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-3 post-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/space.jpg" class="post-image" alt="..." width="360px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Post name</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut minus
                            explicabo consequatur voluptates facilis, delectus totam eum quam asperiores mollitia
                            obcaecati, nostrum, quasi minima fuga nesciunt sint. Voluptate, distinctio officia.</p>
                        <p class="card-text"><small class="text-muted">Today at 10:53 | 30 comments</small></p>
                        <a href="#" class="btn btn-primary float-right">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-3 post-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/space.jpg" class="post-image" alt="..." width="360px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Post name</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut minus
                            explicabo consequatur voluptates facilis, delectus totam eum quam asperiores mollitia
                            obcaecati, nostrum, quasi minima fuga nesciunt sint. Voluptate, distinctio officia.</p>
                        <p class="card-text"><small class="text-muted">Today at 10:53 | 30 comments</small></p>
                        <a href="#" class="btn btn-primary float-right">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card shadow mb-3 post-card">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="img/space.jpg" class="post-image" alt="..." width="360px">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Post name</h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut minus
                            explicabo consequatur voluptates facilis, delectus totam eum quam asperiores mollitia
                            obcaecati, nostrum, quasi minima fuga nesciunt sint. Voluptate, distinctio officia.</p>
                        <p class="card-text"><small class="text-muted">Today at 10:53 | 30 comments</small></p>
                        <a href="#" class="btn btn-primary float-right">Read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
