@extends('layouts.app')
@section('content')
<div class="container col-md-6 col-sm-8">
    <div class="card">
        <div class="card-header">
          Book An Appointment Now
        </div>
        <div class="card-body">
          <form action="store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Your Full Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->fullname }}" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="{{ Auth::user()->email }}" disabled>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject of the Appointment">
            </div>
            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $subject}}</strong>
                                    </span>
                                @enderror
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
            <div class="mb-3">
                <label for="subject" class="form-label">Select Date</label>
                <input type="date" class="form-control" id="appointment_time" name="appointment_time" placeholder="Select Date">
            </div>
            <button class="btn btn-primary">Book Now</button>
          </form>

         

        </div>
      </div>
</div>

@endsection