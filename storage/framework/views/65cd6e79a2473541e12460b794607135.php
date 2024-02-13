<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Dashboard')); ?></div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <?php echo e(__('You are logged in!')); ?>

                        <?php if(auth()->check()): ?>
                            <?php if(auth()->user()->user_type == 'volunteer'): ?>
                                <p>Welcome, Volunteer!</p>
                                <!-- Additional content for volunteers -->
                            <?php elseif(auth()->user()->user_type == 'organisation'): ?>
                                <p>Welcome, Organisation!</p>
                                <!-- Additional content for organisations -->
                            <?php endif; ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\maharah project\volunteering-app\resources\views/home.blade.php ENDPATH**/ ?>