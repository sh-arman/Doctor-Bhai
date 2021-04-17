<div class="col-lg-4">
  <div class="panel panel-default">
    <div class="">
      <ul class="list-group">
        <a href="<?php echo e(route('department.add')); ?>">
        <li class="list-group-item">Add Department</li>
        </a>
        <a href="<?php echo e(route('department.index')); ?>">
          <li class="list-group-item">Departments</li>
        </a>
        <a href="<?php echo e(route('admin.doctor.add')); ?>">
          <li class="list-group-item">Add Doctor</li>
        </a>
        <a href="<?php echo e(route('admin.doctor.index')); ?>">
          <li class="list-group-item">Doctors</li>
        </a>
        <a href="<?php echo e(route('admin.patient.index')); ?>">
          <li class="list-group-item">Patients</li>
        </a>
        <a href="<?php echo e(route('admin.appointment.index')); ?>">
          <li class="list-group-item">Appointments</li>
        </a>
      </ul>
    </div>
  </div>
</div>
