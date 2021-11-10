@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

         <div class="container">
        
        <div class="row">
            <!-- Appointment -->
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="image-flip" >
                    <div class="mainflip flip-0">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <h2>patient's Name</h2>
                                    <h4 class="card-title">Subject</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                    <form action="" method="POST">
                                    @csrf
                                    <a href="" class="btn btn-primary btn-sm"> Appointment </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            <!-- ./Appointment -->
         
           
          
           
            

        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
