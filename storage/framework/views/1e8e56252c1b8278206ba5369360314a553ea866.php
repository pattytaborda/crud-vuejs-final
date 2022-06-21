<?php $__env->startSection('template_title'); ?>
    Semester
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <?php echo e(__('Semester')); ?>

                            </span>

                             <div class="float-right">
                                <a href="<?php echo e(route('semesters.create')); ?>" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  <?php echo e(__('Create New')); ?>

                                </a>
                              </div>
                        </div>
                    </div>
                    <?php if($message = Session::get('success')): ?>
                        <div class="alert alert-success">
                            <p><?php echo e($message); ?></p>
                        </div>
                    <?php endif; ?>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Cantidad Creditos</th>
										<th>Nombre Docente</th>
										<th>Asignatura Prerrequisito</th>
										<th>Horas Trabajo Autonomo</th>
										<th>Horas Trabajo Dirigido</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $semesters; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $semester): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e(++$i); ?></td>
                                            
											<td><?php echo e($semester->nombre); ?></td>
											<td><?php echo e($semester->cantidad_creditos); ?></td>
											<td><?php echo e($semester->nombre_docente); ?></td>
											<td><?php echo e($semester->asignatura_prerrequisito); ?></td>
											<td><?php echo e($semester->horas_trabajo_autonomo); ?></td>
											<td><?php echo e($semester->horas_trabajo_dirigido); ?></td>

                                            <td>
                                                <form action="<?php echo e(route('semesters.destroy',$semester->id)); ?>" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="<?php echo e(route('semesters.show',$semester->id)); ?>"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="<?php echo e(route('semesters.edit',$semester->id)); ?>"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('DELETE'); ?>
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php echo $semesters->links(); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\crud-vuejs-final\resources\views/semester/index.blade.php ENDPATH**/ ?>