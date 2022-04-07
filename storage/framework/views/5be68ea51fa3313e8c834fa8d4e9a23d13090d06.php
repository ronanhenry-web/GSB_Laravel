<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Rechercher un praticien')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <?php echo $__env->make('search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <div class="overflow-x-auto mt-8    ">
                                    <table class="table table-zebra w-full text-black text-center">
                                        <thead >
                                            <tr class="text-white">
                                                <td class="bg-success">Nom</td>
                                                <td class="bg-success">Prénom</td>
                                                <td class="bg-success">Adresse</strong></td>
                                                <td class="bg-success">Ville</td>
                                                <td class="bg-success">Coef Notoriété</td>
                                                <td class="bg-success">Fonction</td>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            <?php $__currentLoopData = $praticiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <p><?php echo e($info->PRA_NOM); ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo e($info->PRA_PRENOM); ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo e($info->PRA_ADRESSE); ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo e($info->PRA_CP); ?>, <?php echo e($info->PRA_VILLE); ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo e($info->PRA_COEFNOTORIETE); ?></p>
                                                </td>
                                                <td>
                                                    <?php if($info->TYP_CODE == "MH"): ?>
                                                        <p>Médecin Hospitalier</p>        
                                                    <?php elseif($info->TYP_CODE == "MV"): ?>
                                                        <p>Médecin de Ville</p>    
                                                    <?php elseif($info->TYP_CODE == "PH"): ?>
                                                        <p>Pharmacien Hospitalier</p>
                                                    <?php elseif($info->TYP_CODE == "PO"): ?>
                                                        <p>Pharmacien Officine</p>
                                                    <?php elseif($info->TYP_CODE == "PS"): ?>
                                                        <p>Personnel de santé</p>
                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>

<?php /**PATH C:\wamp64\www\gsb\resources\views/praticien.blade.php ENDPATH**/ ?>