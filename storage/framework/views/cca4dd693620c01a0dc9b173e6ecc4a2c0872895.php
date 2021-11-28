<?php $__env->startSection('content'); ?>

<div class="container mx-auto px-5 lg:max-w-screen-sm">
    <div class="w-4/5 m-auto text-center">
        <h1 class="text-6xl">
            Create Post
        </h1>
    </div>
</div>

<?php if($errors->any()): ?>
    <div class="w-4/5 m-auto">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<div class="w-4/5 m-auto pt-20">
    <form action="/posts" method="POST" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <input type="text" name="title" placeholder="Title..." class="bg-transparent block border-b-2 w-full h-20 text-6xl outline-none">

        <textarea name="description" placeholder="Description..." class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none"></textarea>
        
        <div class="bg-grey-lighter pt-8">
            <label class="w-44 flex flex-col items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="mt-2 text-base leading-normal">
                    Select a file
                </span>
                <input type="file" name="image" class="hidden">
            </label>

        </div>
        
        <button type="submit" class="uppercase mt-12 bg-blue-500 text-gray-100 text-lg font-extrabold py-3 px-8 rounded-3xl">Create post</button>
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/blog/resources/views/blog/create.blade.php ENDPATH**/ ?>