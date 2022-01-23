<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Category')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table-fixed w-full bg-gray-50">
                        <thead>
                          <tr>
                            <th class="w-16 px-6 py-2 text-xs text-gray-500">id</th>
                            <th class="w-4/6 px-6 py-2 text-xs text-gray-500">Category name</th>
                            <th class="px-6 py-2 text-xs text-gray-500"></th>
                            <th class="px-6 py-2 text-xs text-gray-500"></th>
                            <th class="px-6 py-2 text-xs text-gray-500"></th>
                          </tr>
                        </thead>
                        <tbody class="bg-white">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="whitespace-nowrap">
                                    <td class="px-6 py-4 text-sm text-gray-500"><?php echo e($category['id']); ?></td>
                                    <td class="px-6 py-4"><?php echo e($category['title']); ?></td>
                                    <td><a href="<?php echo e(route('admin.category.show', $category['id'])); ?>" class="border-2 border-gray-300 hover:border-gray-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">Info</a></td>
                                    <td><a href="<?php echo e(route('admin.category.edit', $category['id'])); ?>" class="bg-green-300 hover:bg-green-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center">Edit</a></td>
                                    <td>
                                        <form action="<?php echo e(route('admin.category.delete', $category['id'])); ?>" method="POST" class="w-full">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('delete'); ?>
                                            <button type="submit" class="bg-red-300 hover:bg-red-400 text-gray-800 font-bold py-2 px-4 rounded inline-flex items-center cursor-pointer">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                        
                        </tbody>
                    </table>                    

                    <a href="<?php echo e(route('admin.category.create')); ?>" type="submit" class="uppercase mt-12 bg-blue-500 text-gray-100 text-sm font-bold py-2 px-4 rounded-3xl">Add category</a>
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
<?php /**PATH /var/www/blog/resources/views/admin/category/index.blade.php ENDPATH**/ ?>