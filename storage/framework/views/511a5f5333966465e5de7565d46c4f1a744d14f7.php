<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Histoire de l entreprise GSB')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200" style="text-align: center;">
                    <h1>LABORATOIRE GALAXY SWISS BOURDIN</h1>
                </div>
                <br>
                <img src="images/1.png" alt="GSB" style="margin-left: 39%;">
                <br>
                <br>
                <br>
                <p>Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant 
                    américain Galaxy (spécialisé dans le secteur des maladies virales dont le SIDA 
                    et les hépatites) et le conglomérat européen Swiss Bourdin (travaillant sur 
                    des médicaments plus conventionnels), lui-même déjà union de trois petits 
                    laboratoires. En 2009, les deux géants pharmaceutiques ont uni leurs forces 
                    pour créer un leader de ce secteur industriel. L’entité Galaxy Swiss Bourdin 
                    Europe a établi son siège administratif à Paris.
                    Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, 
                    aux Etats-Unis.</p>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\wamp64\www\gsb2\resources\views/dashboard.blade.php ENDPATH**/ ?>