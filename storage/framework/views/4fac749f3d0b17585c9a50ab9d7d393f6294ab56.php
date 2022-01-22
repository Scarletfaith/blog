<?php $__env->startSection('content'); ?>

<div class="container mx-auto px-5 lg:max-w-screen-sm mt-20">
    <h1 class="mb-5 font-sans"><?php echo e($post->title); ?></h1>

    <div class="flex items-center text-sm text-light">
        <span><?php echo e(date('M, j Y', strtotime($post->created_at))); ?> - </span>
        <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e($category->slug); ?>" class="text-muted">#<?php echo e($category->title); ?></a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <div class="mt-5 leading-loose flex flex-col justify-center items-center post-body font-serif">
        <?php echo $post->content; ?>

    </div>

    <div class="mt-10 lg:flex items-center p-5 border border-lighter  rounded">
        <div class="w-full lg:w-1/6 w-5 text-center lg:text-left">
            <img src="/img/default/user.png" class="rounded-full w-32 lg:w-full">
        </div>
        <div class="lg:pl-5 leading-loose text-center lg:text-left text-text-color w-full lg:w-5/6">
            By <span class="font-bold"><?php echo e($post->user->name); ?></span>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/blog/resources/views/blog/show.blade.php ENDPATH**/ ?>