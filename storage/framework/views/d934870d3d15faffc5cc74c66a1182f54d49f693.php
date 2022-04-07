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
            
            <?php if($errors->any()): ?>
            <div class="alert alert-warning shadow-lg mb-12">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>ERREUR !</span>
                    <ul class="">
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            </div>
            <?php endif; ?>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center bg-blue-300 pt-8">
                                <form action="/nouveauRapport" method="post">
                                    <?php echo csrf_field(); ?>
                                    <div class ="container text-black mx-10">
                                        <div class="form-control pb-8">  
                                            <label class="input-group">
                                                <span>Nom Praticien</span>
                                                <select name="praticien" class="select select-bordered select-gray w-full max-w-xs">
                                                    <option selected="selected" disabled>Choisissez votre praticien</option>
                                                    <?php $__currentLoopData = $praticiens; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($info->PRA_NUM); ?>"><?php echo e($info->PRA_NOM." ".$info->PRA_PRENOM); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Date rapport</span>
                                                <input type="datetime-local" class="input input-bordered input-gray w-full max-w-xs" name="date">
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Motif du rapport</span>
                                                <input type="text" placeholder="la personne a une douleur au dos" class="input input-bordered input-gray w-full max-w-xs" name="motif">
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">
                                            <label class="input-group">
                                                <span>Bilan du rapport</span>
                                                <input type="text" placeholder="cancer du crâne" class="input input-bordered input-gray w-80" name="bilan">
                                            </label>
                                        </div>
                                        <div class="form-control pb-8">  
                                            <label class="input-group">
                                            <span>Ajouter un médicament</span>
                                                <select name="ajoutMedoc" class="select select-bordered select-gray w-full max-w-xs">
                                                    <option selected="selected" disabled>Choisissez votre medoc</option>
                                                    <?php $__currentLoopData = $medocs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($info->MED_DEPOTLEGAL); ?>"><?php echo e($info->MED_NOMCOMMERCIAL); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                                <label class="input-group">
                                                    <input type="number" placeholder="choisir la quantité" class="input input-bordered input-gray" name="quantite">
                                                </label>
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger mb-4">Ajouter nouveau rapport</button>
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
<?php /**PATH C:\wamp64\www\gsb\resources\views/nouveauRapport.blade.php ENDPATH**/ ?>