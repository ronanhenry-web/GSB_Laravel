<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <?php echo e(__('Modification du profil visiteur')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container flex bg-blue-500 text-center">
                        
                        <form action="/profil" class="w-6/12 p-6" method="post">
                            <?php echo csrf_field(); ?>
                            <div class ="container text-black mx-10 w-6/12 ml-24">
                                <div class="form-control pb-8">
                                    <label class="input-group">
                                        <span>Nom</span>
                                        <input value="<?php echo e($visiteurs = auth()->user()->VIS_NOM); ?>" type="text" class="input input-bordered input-primary" name="nom" required>
                                    </label>
                                </div>
                                <div class="form-control pb-8">
                                    <label class="input-group">
                                        <span>Prénom</span>
                                        <input  value="<?php echo e($visiteurs = auth()->user()->Vis_PRENOM); ?>" type="text" class="input input-bordered input-primary" name="prenom" required>
                                    </label>
                                </div>
                                <div class="form-control pb-8">
                                    <label class="input-group">
                                        <span>Adresse</span>
                                        <input value="<?php echo e($visiteurs = auth()->user()->VIS_ADRESSE); ?>" type="text" class="input input-bordered input-primary w-full max-w-xs" name="adresse" required>
                                    </label>
                                </div>
                                <div class="form-control pb-12">
                                    <label class="input-group">
                                        <span>Ville</span>
                                        <input value="<?php echo e($visiteurs = auth()->user()->VIS_VILLE); ?>" type="text" class="input input-bordered input-primary" name="ville" required>
                                    </label>
                                </div>
                                <div class="form-control pb-12">
                                    <label class="input-group">
                                        <span>Code postal</span>
                                        <input value="<?php echo e($visiteurs = auth()->user()->VIS_CP); ?>" type="number" class="input input-bordered input-primary" name="cp" required>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-danger">Modifier profil</button>
                            </div>   
                        </form>
                        <div class="w-6/12 flex items-center justify-center">
                            <label class="swap swap-flip text-9xl">
                                <input type="checkbox"/>
                                <div class="swap-on">😈</div>
                                <div class="swap-off">😇</div>
                            </label>
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
<?php /**PATH C:\wamp64\www\gsb\resources\views/profil.blade.php ENDPATH**/ ?>