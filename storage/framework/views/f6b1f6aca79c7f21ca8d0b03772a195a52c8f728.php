<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Library</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    </head>
    <body>

        <div class="container">
            <?php if(Route::has('login')): ?>
                <h4 class="text-center mt-3">Biblioteka</h4>
                <div class="hidden fixed top-0 right-0 px-6 sm:block float-end">

                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>" class="btn btn-secondary">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>" class="btn btn-secondary">Log in</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>" class="btn btn-secondary">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

                </div>
            </div>
        </div>
    </body>
</html>
<?php /**PATH C:\XAMPP\htdocs\library\resources\views/welcome.blade.php ENDPATH**/ ?>