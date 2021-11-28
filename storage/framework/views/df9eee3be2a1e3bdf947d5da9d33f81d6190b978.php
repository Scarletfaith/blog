<?php $__env->startSection('content'); ?>

<div class="container mx-auto px-5 lg:max-w-screen-sm">

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class="no-underline transition block border border-lighter w-full mb-10 p-5 rounded post-card" href="<?php echo e(route('blog.show', $post->slug)); ?>">
            <div class="block h-post-card-image bg-cover bg-center bg-no-repeat w-full h-48 mb-5" style="background-image: url('<?php echo e('storage/' . $post->preview_image); ?>')"></div>
            <div class="flex flex-col justify-between flex-1">
                <div>
                    <h2 class="font-sans leading-normal block mb-6">
                        <?php echo e($post->title); ?>

                    </h2>

                    <p class="leading-normal mb-6 font-serif leading-loose">
                        <?php echo mb_strimwidth(strip_tags($post->content), 0, 150, '..'); ?>

                    </p>
                </div>

                <div class="flex items-center text-sm text-light">
                    <img src="/img/default/user.png" class="w-10 h-10 rounded-full" title="James Brooks">
                    <span class="ml-2"><?php echo e($post->user->name); ?></span>
                    <span class="ml-auto"><?php echo e(date('M, j Y', strtotime($post->updated_at))); ?></span>
                </div>
            </div>
        </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="uppercase flex items-center justify-center flex-1 py-5 font-sans">
        <?php echo e($posts->links()); ?>

    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/blog/resources/views/category/index.blade.php ENDPATH**/ ?>