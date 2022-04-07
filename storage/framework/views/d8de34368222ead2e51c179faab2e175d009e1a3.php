<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Rapport du praticien')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class ="container">
                                    <a href="/nouveauRapport" style="font-size: 24px; background-color: lightgrey; border-radius: 3px; padding-left: 5px; padding-right: 5px; margin-left: 10%;">Nouveau rapport</a>
                                    <br>
                                    <br>
                                    <table>
                                        <thead style="text-align: center; border: solid rgb(0, 119, 255);">
                                            <tr>
                                                <td><strong>Visiteur</strong></td>
                                                <td><strong>Numéro</strong></td>
                                                <td><strong>Praticien</strong></td>
                                                <td><strong>Date</strong></td>
                                                <td><strong>Bilan</strong></td>
                                                <td><strong>Motif</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody >
                                                <?php $__currentLoopData = $rapports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr style="border: solid rgb(0, 119, 255);">
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p><?php echo e($info->VIS_MATRICULE); ?></p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p><?php echo e($info->RAP_NUM); ?></p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p><?php echo e($info->PRA_NUM); ?></p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255); text-align: center;">
                                                        <p><?php echo e($info->RAP_DATE); ?></p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255)">
                                                        <p><?php echo e($info->RAP_BILAN); ?></p>
                                                    </td>
                                                    <td style="border: solid rgb(0, 119, 255)">
                                                        <p><?php echo e($info->RAP_MOTIF); ?></p>
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
<?php endif; ?><?php /**PATH C:\wamp64\www\gsb2\resources\views/rapport.blade.php ENDPATH**/ ?>