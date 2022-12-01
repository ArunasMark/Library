<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Prideti knyga</div>
                    <div class="card-body">
                        <form method="POST" action="<?php echo e(isset($book)?route('books.update',
                        $book->id):route
                        ('books.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php if(isset($book)): ?>
                                <?php echo method_field('put'); ?>
                            <?php endif; ?>
                            <div class="mb-3">
                                <label class="form-label float-start">Pasirinkite kategorija:</label>
                                <select name="category_id" class="form-select">

                                    <option selected>Pasirinkti</option>

                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>" <?php echo e(isset($book)&&($category->id==$book->category_id)?'selected':''); ?>>
                                            <?php echo e($category->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>

                            </div>
                            <div class="mb-3">
                                <label class="form-label float-start">Pavadinimas:</label>
                                <input class="form-control" name="name" type="text" value="<?php echo e(isset($book)
                                ?$book->name:''); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label float-start">Aprasymas:</label>
                                <input class="form-control" name="description" type="text" value="<?php echo e(isset($book)
                                ?$book->description:''); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label float-start">ISBN numeris:</label>
                                <input class="form-control" name="IsbnNumber" type="number" value="<?php echo e(isset($book)
                                ?$book->IsbnNumber:''); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label float-start">Puslapiu skaicius:</label>
                                <input class="form-control" name="NumberOfPage" type="number" value="<?php echo e(isset($book)
                                ?$book->NumberOfPage:''); ?>">
                            </div>
                            <div class="mb-3">
                                <label class="form-label float-start">Nuotrauka:</label>
                                <input class="form-control" name="photo" type="file" value="<?php echo e(isset($book)
                                ?$book->photo:''); ?>">
                            </div>

                            <button type="submit" class="btn btn-info"><?php echo e(isset($book)?'Isaugoti':'Prideti'); ?></button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\library\resources\views/books/edit.blade.php ENDPATH**/ ?>