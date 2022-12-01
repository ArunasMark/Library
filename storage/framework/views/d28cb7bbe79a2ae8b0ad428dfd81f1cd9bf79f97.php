<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Kategorijos</div>
                    <div class="card-body text-center">

                        <form method="POST" action="<?php echo e(isset($category)?route('category.update',$category->id):route
                        ('category.store')); ?>" enctype=="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php if(isset($category)): ?>
                                <?php echo method_field('put'); ?>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label class="form-label float-start">Pavadinimas:</label>
                                <input class="form-control" name="name" type="text" value="<?php echo e(isset($category)?
                                $category->name:''); ?>">
                            </div>

                            <button type="submit" class="btn btn-info"><?php echo e(isset($category)
                            ?'Issaugoti':'Prideti'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\library\resources\views/category/edit.blade.php ENDPATH**/ ?>