<div class="col-lg-4">
  <div class="panel panel-default text-center">
    <div class="panel-heading ehealth">
      Patient : &nbsp; <?php echo e($user->name); ?>

    </div>
    <div class="panel-body" style="text-align:left;">
      <b>Name: &nbsp; <?php echo e($user->name); ?></b><br>
      <b>Email:&nbsp; <?php echo e($user->email); ?></b><br>
      <a href="<?php echo e(route('user.profile.edit')); ?>" class="btn btn-sm btn-primary">Edit Profile</a><br><hr>
      <ul class="list-group">
          <a href="<?php echo e(route('patient.appointment.doctors')); ?>">
            <li class="list-group-item">Find Doctors</li>
          </a>
        <a href="<?php echo e(route('patient.appointment.index')); ?>">
          <li class="list-group-item">Appointments</li>
        </a>
      </ul>
    </div>
  </div>
</div>
