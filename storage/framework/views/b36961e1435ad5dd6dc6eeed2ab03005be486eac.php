<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Setting user')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex p-6 bg-white border-b border-gray-200">
                <div class="w-1/4">
                    <div class="block h-post-card-image bg-cover bg-center bg-no-repeat w-32 h-32 mb-5" style="background-image: url('/img/default/user.png')"></div>
                </div>
                <div class="w-3/4 grid">
                    <div class="w-full flex">
                        <span>Name:&nbsp;</span>
                        <b><?php echo e($user->name); ?></b>
                    </div>
                    <div class="w-full flex">
                        <span>e-mail:&nbsp;</span>
                        <b><?php echo e($user->email); ?></b>
                    </div>
                    <div class="w-full flex">
                        <span>Last update profile:&nbsp;</span>
                        <b><?php echo e(date('d.m.Y - G:i', strtotime($user->updated_at))); ?></b>
                    </div>
                    <a href="<?php echo e(route('admin.user.edit', $user->id)); ?>" class="w-16 bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">Edit</a>
                </div>
            </div>

        </div>
    </div>
 <?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php /**PATH /var/www/blog/resources/views/admin/user/index.blade.php ENDPATH**/ ?>