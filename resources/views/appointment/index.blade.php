@extends('layouts.app')
@section('content')
<div class="container col-md-6 col-sm-8">
    <div class="card">
        <div class="card-header">
          Book An Appointment Now
        </div>
        <div class="card-body">
          <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject of the Appointment">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="3"></textarea>
            </div>
            <label for="exampleDataList" class="form-label">Select Doctor</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Search Doctor..">
            <datalist id="datalistOptions">
            <option value="Dr. Ibrahim">
            <option value="Dr. Babalola">
            <option value="Dr. Fred">
            <option value="Dr. Amaka">
            <option value="Dr. Suleiman">
            </datalist><br>
          </form>

          <a href="#" class="btn btn-primary">Book Now</a>

        </div>
      </div>
</div>

@endsection