<!DOCTYPE html>
<html>
 <head>
  <title>Data Tables </title>
  <script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script
    src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet"
    href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet"
    href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
	
	<table class="table" id="table">
    <thead>
        <tr>
            <th class="text-center">#</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Gender</th>
            <th class="text-center">Country</th>
            <th class="text-center">Salary ($)</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
   <tbody>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr class="item<?php echo e($item->id); ?>">
    <td><?php echo e($item->id); ?></td>
    <td><?php echo e($item->first_name); ?></td>
    <td><?php echo e($item->last_name); ?></td>
    <td><?php echo e($item->email); ?></td>
    <td><?php echo e($item->gender); ?></td>
    <td><?php echo e($item->country); ?></td>
    <td><?php echo e($item->salary); ?></td>
    <td><button class="edit-modal btn btn-info"
            data-info="<?php echo e($item->id); ?>,<?php echo e($item->first_name); ?>,<?php echo e($item->last_name); ?>,<?php echo e($item->email); ?>,<?php echo e($item->gender); ?>,<?php echo e($item->country); ?>,<?php echo e($item->salary); ?>">
            <span class="glyphicon glyphicon-edit"></span> Edit
        </button>
        <button class="delete-modal btn btn-danger"
            data-info="<?php echo e($item->id); ?>,<?php echo e($item->first_name); ?>,<?php echo e($item->last_name); ?>,<?php echo e($item->email); ?>,<?php echo e($item->gender); ?>,<?php echo e($item->country); ?>,<?php echo e($item->salary); ?>">
            <span class="glyphicon glyphicon-trash"></span> Delete
        </button></td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>


  
  </div>
 </body>
</html>

<script>
  $(document).ready(function() {
    $('#table').DataTable();
} );
 </script>