@extends('layouts.app')


@section('content')

<div class="container">
  <div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Doctors without Borders</h1>
        <p class="lead">Doctors Appointment and Booking System.<br> Doctor appointment software is one of those medical technologies that actually make the lives of patients, doctors, and administration easier.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2 fw-bold">Book an Appointment</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Register Now</button>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg">
          <img class="rounded-lg-3" src="img/types-of-doctors-1600114658.jpg" alt="" width="720">
      </div>
    </div>
  </div>

  <!--List of Doctors-->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="img/dr1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hi, I'm Doctor Fred.</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('appointment.create') }}" class="btn btn-primary">Book Appointment</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="img/dr3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hi, I'm Doctor Ibrahim</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('appointment.create') }}" class="btn btn-primary">Book Appointment</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img src="img/dr4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Hi, I'm Doctor Babalola</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="{{ route('appointment.create') }}" class="btn btn-primary">Book Appointment</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  
  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Contact Us</h2>
    <form>
        <div class="mb-3">
          <label class="form-label">Email address</label>
          <input type="email" class="form-control">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label class="form-label">Phone Number</label>
            <input type="number" class="form-control" name="phone">
          </div>
          <div class="mb-3">
            <label class="form-label">Comment</label>
            <textarea name="comment" class="form-control" cols="30" rows="10"></textarea>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
  </div>
</div>

@endsection