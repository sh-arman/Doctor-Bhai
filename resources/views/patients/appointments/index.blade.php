@extends('layouts.app')

@section('content')
  <div class="panel panel-primary">
    <div class="panel-heading text-center">Appointment List</div>
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <th>Doctor Name</th>
          <th>Date</th>
          <th>Time</th>
          <th colspan="3"  class="text-center">Action</th>
        </thead>
        <tbody>
          @if ($appointments->count() > 0)
            @foreach ($appointments as $appointment)
              <tr rowsapn="2">
                <td>
                  {{$appointment->doctor->user->name}}
                </td>
                <td>{{$appointment->date}}</td>
                <td>@if($appointment->time != NULL) {{$appointment->time}} @else Wait For Doctor @endif</td>
                @if ($appointment->sendDoctor && !$appointment->isConfirmed && !$appointment->isRejected)
                  <td colspan="2" class="text-center">
                    <span class="alert-info">Your Request is Under Process</span>
                  </td>
                @elseif ($appointment->isConfirmed)

                      <td class="text-center">
                        <a href="{{route('patient.consult',['id' => $appointment->id])}}" class="btn btn-success btn-sm">Video Call To {{$appointment->doctor->user->name}}</a>
                      </td>

                @elseif($appointment->isRejected)
                  <td colspan="2" class="text-center">
                    <a href="{{route('patient.appointment.delete',['id' => $appointment->id])}}" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                @else
                  <td class="text-center">
                    <a href="{{route('patient.appointment.edit',['id' => $appointment->id])}}" class="btn btn-info btn-sm">Edit</a>
                  </td>
                  <td class="text-center">
                    <a href="{{route('patient.appointment.delete',['id' => $appointment->id])}}" class="btn btn-danger btn-sm">Delete</a>
                  </td>
                @endif
              </tr>
              @if($appointment->isConfirmed)
                <tr>
                  <td colspan="5" class="text-center">
                      <span class="text-success"><b>Your Appointment has been Confirmed<b></span><br>

                  </td>
                </tr>
              @elseif($appointment->isRejected)
                <tr>
                  <td colspan="7" class="text-center"><span class="alert-danger">Sorry ! Your appointment has been rejected</span></td>
                </tr>
              @endif
            @endforeach
          @else
            <tr>
              <th colspan="7" class="text-center">No Appointment Exist.</th>
            </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
@endsection
