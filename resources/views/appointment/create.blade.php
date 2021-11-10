@extends('layouts.app')
@section('content')
<div class="container col-md-6 col-sm-8">
    <div class="card">
        <div class="card-header">
          Book An Appointment With Doctor <b>{{ $doctor->fullname }} </b>
        </div>
        <div class="card-body">
          <form action="{{ route('appointment.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                
                <input type="text" class="form-control" id="doctor_id" value="{{ $doctor->id }}"  name="doctor_id" hidden >
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
           
            
            <input type="submit" value="Book Now" class="btn btn-primary">
          </form>

         

        </div>
      </div>
</div>

@endsection