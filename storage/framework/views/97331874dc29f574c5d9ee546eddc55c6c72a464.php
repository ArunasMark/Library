<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card">
                        <div class="card-header text-center">Knygos</div>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h5>Knygos paieska</h5>
                                    <form method="post" action="<?php echo e(route('books.search')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <label class="form-label">Paieska pagal pavadinima: </label>
                                        <input type="text" value="" name="name">
                                        <button class="btn btn-sm btn-secondary ms-3">Ieskoti</button>
                                    </form>
                                </div>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('create')): ?>
                                    <div class="mt-4">
                                        <a class="btn btn-sm btn-secondary mb-0 " href="<?php echo e(route('books.create')); ?>">
                                            Prideti nauja knyga</a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <hr>
                            <table class="table mt-3 text-center">
                                <thead class="">
                                <tr class="text-center">
                                    <th>Knygos pavadinimas</th>
                                    <th>Knygos kategorija</th>
                                    <th>Knygos aprasymas</th>
                                    <th>ISBN numeris</th>
                                    <th>Puslapiu skaicius</th>
                                    <th>Nuotrauka</th>
                                    <th>Rezervuoti</th>
                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', 'delete')): ?>
                                        <th></th>
                                    <?php endif; ?>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($book->name); ?></td>
                                        <td><?php echo e($book->category->name); ?></td>
                                        <td><?php echo e($book->description); ?></td>
                                        <td><?php echo e($book->IsbnNumber); ?></td>
                                        <td><?php echo e($book->NumberOfPage); ?></td>
                                        <td><?php echo e($book->photo); ?></td>
                                        <td>
                                            <input class="form-check-input" type="checkbox" value=""
                                                   id="flexCheckIndeterminate">
                                            <label class="form-check-label" for="flexCheckIndeterminate">

                                            </label>
                                        </td>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit', 'delete')): ?>
                                            <td>
                                                <div class="float-end d-flex ms-5">
                                                    <a class="btn btn-sm btn-secondary me-3 mt-4" href="<?php echo e(route('books.edit',
                                            $book->id)); ?>">Redaguoti</a>
                                                    <form action="<?php echo e(route('books.destroy', $book->id)); ?>" method="post">
                                                        <?php echo csrf_field(); ?>
                                                        <?php echo method_field('delete'); ?>
                                                        <button class="btn btn-sm btn-danger mt-4">Istrinti</button>
                                                    </form>
                                                </div>
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



<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\XAMPP\htdocs\library\resources\views/books/index.blade.php ENDPATH**/ ?>