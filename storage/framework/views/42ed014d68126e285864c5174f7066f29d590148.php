<?php if($paginator->hasPages()): ?>
    
    <?php if($paginator->onFirstPage()): ?>
    <?php else: ?>
        <a href="<?php echo e($paginator->previousPageUrl()); ?>" rel="prev" class="block no-underline text-light hover:text-black px-5" aria-label="<?php echo e(__('pagination.previous')); ?>">More recent articles</a>
    <?php endif; ?>

    
    <?php if($paginator->hasMorePages()): ?>
        <a href="<?php echo e($paginator->nextPageUrl()); ?>" rel="next" class="block no-underline text-light hover:text-black px-5" aria-label="<?php echo e(__('pagination.next')); ?>">Check more articles</a>
    <?php else: ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /var/www/blog/resources/views/vendor/pagination/tailwind.blade.php ENDPATH**/ ?>