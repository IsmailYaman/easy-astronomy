@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light banner-home">
  <div class="container-fluid py-5">
    <h1 class="display-5 fw-bold">Custom jumbotron</h1>
    <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
    <button class="btn btn-primary btn-lg" type="button">Example button</button>
  </div>
</div>
<img src="img/space.jpg" class="img-fluid banner" alt="...">

<div class="container pt-5">
    <div class="row justify-content-center text-center">
        <div class="col-sm-12">
            <h1 class="mb-3">Astronomy doesn't have to be hard</h1>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            </p>
        </div>
    </div>
    <h1 class="text-center my-4">Start exploring today!</h1>
    <div class="row mb-5" align="center">
        <div class="col-sm-4">
            <div class="card shadow-lg" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Starter</h5>
                  <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam, voluptas voluptatibus reiciendis eum eligendi hic debitis doloribus dolorum nemo illo vitae ipsam itaque explicabo placeat totam! Beatae cupiditate repellat rem?</p>
                  <a href="#" class="btn btn-primary float-right">Start</a>
                </div>
              </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow-lg" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Intermediate</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione ad quam maiores minima accusantium id iste obcaecati voluptates nemo qui perferendis corporis deleniti debitis in sunt modi eveniet, delectus ex.</p>
                  <a href="#" class="btn btn-primary float-right">Start</a>
                </div>
              </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow-lg" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title text-center">Experienced</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore voluptate, dolores inventore perspiciatis obcaecati rem voluptatibus aperiam, esse expedita, numquam quis ea hic aliquam delectus? Repellendus amet ea rerum officiis.</p>
                  <a href="#" class="btn btn-primary float-right">Start</a>
                </div>
              </div>
        </div>
    </div>
</div>
</div>
@endsection
