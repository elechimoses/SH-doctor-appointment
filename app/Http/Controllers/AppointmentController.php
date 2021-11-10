<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Http\Requests\UpdateAppointmentTimeRequest;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function index()
    {
        $user = auth()->user();

        return view('appointment.index', [
            'appointments' => $user->appointments(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function create()
    {
        return view('appointment.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreAppointmentRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreAppointmentRequest $request)
    {
        $appointment = new Appointment();
        $appointment->patient()->associate($request->user());
        $appointment->doctor_id = $request->doctor_id;
        $appointment->subject = $request->subject;
        $appointment->message = $request->message;
        $appointment->save();

        return redirect()->route('appointment.index')->with('status', 'Appointment saved successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param Appointment $appointment
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment $appointment)
    {
        return view('appointment.show', [
            'appointment' => $appointment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Appointment $appointment
     * @return \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
     */
    public function edit(Appointment $appointment)
    {
        return view('appointment.create', [
            'appointment' => $appointment,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateAppointmentRequest $request
     * @param Appointment $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        $appointment->doctor_id = $request->doctor_id;
        $appointment->subject = $request->subject;
        $appointment->message = $request->message;
        $appointment->save();

        // TODO: Notify the doctor of the appointment.

        return redirect()->route('appointment.show', [
            'appointment' => $appointment,
        ])->with('status', 'Appointment saved successfully.');
    }

    /**
     * Schedule the specified resource in storage.
     *
     * @param UpdateAppointmentTimeRequest $request
     * @param Appointment $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function schedule(UpdateAppointmentTimeRequest $request, Appointment $appointment)
    {
        $appointment->appointment_time = $request->appointment_time;
        $appointment->save();

        // TODO: Notify the patient of the appointment schedule.

        return redirect()->route('appointment.show', [
            'appointment' => $appointment,
        ])->with('status', 'Appointment is scheduled successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Appointment $appointment
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Appointment $appointment)
    {
        $appointment->delete();

        return redirect()->route('appointment.index')->with('status', 'Appointment deleted successfully.');
    }
}
