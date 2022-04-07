<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Créer un nouveau rapport de visite')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <form action="/nouveauRapport" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class ="container">
                                        <div class="mb-3" style="background-color: grey; margin-right: 841px; padding-left: 5px;">  
                                            <label for="exampleInputEmail1" class="form-label">Numéro rapport :</label>
                                            <input type="number" class="form-control" name="num" required>
                                        </div>
                                        <br>
                                        <div class="mb-3" style="background-color: grey; margin-right: 733px; padding-left: 5px;">  
                                            <label for="exampleInputEmail1" class="form-label">Numéro du praticien :</label>
                                            <select name="praticien">
                                                <?php $__currentLoopData = $praticiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($info->PRA_NUM); ?>"><?php echo e($info->PRA_NOM." ".$info->PRA_PRENOM); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <br>
                                        <div class="mb-3" style="background-color: grey; margin-right: 875px; padding-left: 5px;">  
                                            <label for="exampleInputEmail1" class="form-label">Date rapport :</label>
                                            <input type="datetime-local" class="form-control" name="date" required>
                                        </div>
                                        <br>
                                        <div class="mb-3" style="background-color: grey; margin-right: 840px; padding-left: 5px;">  
                                            <label for="exampleInputEmail1" class="form-label">Bilan du rapport :</label>
                                            <input type="text" class="form-control" name="bilan" required>
                                        </div>
                                        <br>
                                        <div class="mb-3" style="background-color: grey; margin-right: 841px; padding-left: 5px;">  
                                            <label for="exampleInputEmail1" class="form-label">Motif du rapport :</label>
                                            <input type="text" class="form-control" name="motif" required>
                                        </div>
                                    </div>  
                                    <br>
                                    <br>         
                                    <button type="submit" style="font-size: 24px; background-color: rgb(0, 119, 255); border-radius: 3px; padding-left: 5px; padding-right: 5px; margin-left: 75%">Ajouter nouveau rapport</button>
                                </form>
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
<?php /**PATH C:\wamp64\www\gsb2\resources\views/nouveauRapport.blade.php ENDPATH**/ ?>