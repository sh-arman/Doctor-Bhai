<div class="col-lg-4">
  <div class="panel panel-default">
    <div class="panel-body">
      <?php if($user->avatar): ?>
        <img src="<?php echo e(asset($user->avatar)); ?>" alt="your img" height="100px" width="80px">
      <?php endif; ?><br><br>
      <big><b><?php echo e($user->name); ?></b></big> (<?php echo e($user->doctor->title); ?>)<br>
      <b><?php echo e($user->doctor->department->name); ?></b><br>
      <big><?php echo e($user->email); ?></big><br>
      <a href="<?php echo e(route('user.profile.edit')); ?>" class="btn btn-sm btn-info">Edit Profile</a>
      <br><hr>
      <ul class="list-group">
        <a href="<?php echo e(route('doctor.appointment.index')); ?>">
          <li class="list-group-item">Pending Appointments</li>
        </a>
        <a href="<?php echo e(route('doctor.patient.list',['id' => Auth::user()->doctor->id])); ?>">
          <li class="list-group-item">Your Patients</li>
        </a>
      </ul>
    </div>
  </div>
</div>
