<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card">
                        <div class="card-header text-center">Knygu kategorijos</div>
                        <div class="card-body">
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create')): ?>
                                <a class="btn btn-secondary float-end" href="<?php echo e(route('category.create')); ?>">
                                    Prideti nauja kategorija</a>
                            <?php endif; ?>
                            <table class="table text-center">
                                <thead class="text-center">
                                <tr>
                                    <th>Kategorijos pavadinimas</th>
                                    <th>Knygos</th>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', 'delete')): ?>
                                        <th></th>
                                    <?php endif; ?>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($category->name); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('categoryBooks', $category->id)); ?>" class="btn
                                            btn-info">Knygos</a>
                                        </td>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit','delete')): ?>
                                            <td class="float-end d-flex">

                                                <a class="btn btn-secondary me-2" href="<?php echo e(route('category.edit',
                                            $category->id)); ?>">Redaguoti</a>

                                                <form action="<?php echo e(route('category.destroy', $category->id)); ?>"
                                                      method="post">
                                                    <?php echo csrf_field(); ?>
                                                    <?php echo method_field('delete'); ?>
                                                    <button class="btn btn-danger">Istrinti</button>
                                                </form>

                                            </td>
                                        <?php endif; ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\library\resources\views/category/index.blade.php ENDPATH**/ ?>