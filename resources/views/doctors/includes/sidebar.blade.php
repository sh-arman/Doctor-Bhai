<div class="col-lg-4">
  <div class="panel panel-default">
    <div class="panel-body">
      @if ($user->avatar)
        <img src="{{asset($user->avatar)}}" alt="your img" height="100px" width="80px">
      @endif<br><br>
      <big><b>{{$user->name}}</b></big> ({{$user->doctor->title}})<br>
      <b>{{$user->doctor->department->name}}</b><br>
      <big>{{$user->email}}</big><br>
      <a href="{{route('user.profile.edit')}}" class="btn btn-sm btn-info">Edit Profile</a>
      <br><hr>
      <ul class="list-group">
        <a href="{{route('doctor.appointment.index')}}">
          <li class="list-group-item">Pending Appointments</li>
        </a>
        <a href="{{route('doctor.patient.list',['id' => Auth::user()->doctor->id])}}">
          <li class="list-group-item">Your Patients</li>
        </a>
      </ul>
    </div>
  </div>
</div>
