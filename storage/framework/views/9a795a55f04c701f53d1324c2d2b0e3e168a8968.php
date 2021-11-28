<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Post info')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">                    

                    <table class="table-fixed mb-4 w-full bg-gray-50">
                        <tbody class="bg-white">
                            <tr class="whitespace-nowrap">
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500">id</td>
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500"><?php echo e($post->id); ?></td>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500">Post name</td>
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500"><b><?php echo e($post->title); ?></b></td>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500">Created</td>
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500"><?php echo e($post->created_at); ?></td>
                            </tr>
                            <tr class="whitespace-nowrap">
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500">Last Updated</td>
                                <td class="border border-gray-400 px-6 py-4 text-sm text-gray-500"><?php echo e($post->updated_at); ?></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="flex items-center justify-center mb-4">
                        <a href="<?php echo e(route('admin.post.edit', $post->id)); ?>" class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-4 rounded-l inline-flex items-center">Edit</a>
                        <form action="<?php echo e(route('admin.post.delete', $post->id)); ?>" method="POST" class="w-full">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('delete'); ?>
                            <button type="submit" class="bg-red-300 hover:bg-red-400 text-gray-800 font-bold py-2 px-4 rounded-r inline-flex items-center cursor-pointer">Delete</button>
                        </form>
                    </div>
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
<?php /**PATH /var/www/blog/resources/views/admin/post/show.blade.php ENDPATH**/ ?>