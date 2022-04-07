<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Rechercher un praticien dans la liste de France')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class ="container">
                        <form method="get" action="<?php echo e(route('recherchePraticien')); ?>" style="text-align: center;">
                            <?php echo csrf_field(); ?>
                            <select name="recherchePraticiens" onChange="form.submit()">
                                <?php $__currentLoopData = $praticiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($info->PRA_NUM); ?>"><?php echo e($info->PRA_NOM." ".$info->PRA_PRENOM); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </form>
                        <br>
                        <br>
                        <div class="mb-3" style="margin-left: 25%;">  
                            <label for="exampleInputEmail1" class="form-label"><strong>Numéro praticien :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ <?php echo e($praticien->PRA_NUM); ?></p>

                        <div class="mb-3" style="margin-left: 25%;">  
                            <label for="exampleInputEmail1" class="form-label"><strong>Nom du praticien :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ <?php echo e($praticien->PRA_NOM); ?></p>

                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Prénom du praticien :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ <?php echo e($praticien->PRA_PRENOM); ?></p>

                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Adresse :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ <?php echo e($praticien->PRA_ADRESSE); ?></p>

                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Ville :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ <?php echo e($praticien->PRA_VILLE); ?></p>

                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Code postal :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ <?php echo e($praticien->PRA_CP); ?></p>

                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Coefficient de notoriété :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ <?php echo e($praticien->PRA_COEFNOTORIETE); ?></p>

                        <br>
                        <div class="mb-3" style="margin-left: 25%;">
                            <label for="exampleInputEmail1" class="form-label"><strong>Lieu d'exercice :</strong></label>
                        </div>
                        <p style="background-color: rgb(0, 119, 255); margin-left: 25%; margin-right: 25%;">→ <?php echo e($praticien->TYP_CODE); ?></p>
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
<?php /**PATH C:\wamp64\www\gsb2\resources\views/praticien.blade.php ENDPATH**/ ?>