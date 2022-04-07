<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\AppLayout::class, []); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rapports de <span class="uppercase"><?php echo e(Auth::user()->VIS_NOM.' '.Auth::user()->Vis_PRENOM); ?></span>
        </h2>
     <?php $__env->endSlot(); ?>
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <?php if(session('success')): ?>
                <div class="alert alert-success shadow-lg mb-9">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>
                            <?php echo e(session('success')); ?>

                        </span>
                    </div>
                </div>
            <?php endif; ?>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="overflow-x-auto">
                                    <button onclick="window.location.href = '/nouveauRapport';"class="btn btn-primary mb-8">nouveau Rapport</button>
                                    <table class="table table-zebra w-full text-black text-center">
                                        <thead class="text-white">
                                            <tr>
                                                <td class="bg-success">Praticien</td>
                                                <td class="bg-success">Date</td>
                                                <td class="bg-success">Bilan</td>
                                                <td class="bg-success">Motif</td>
                                                <td class="bg-success">Médoc</td>
                                                <td class="bg-success">Quantité</td>
                                                <td class="bg-success">PDF</td>
                                            </tr>
                                        </thead>
                                        <tbody >
                                            <?php $__currentLoopData = $rapports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $info): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <p><?php echo e($info->PRA_NUM); ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo e(date("d/m/Y H:i", strToTime($info->RAP_DATE))); ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo e($info->RAP_BILAN); ?></p>
                                                </td>
                                                <td>
                                                    <p><?php echo e($info->RAP_MOTIF); ?></p>
                                                </td>
                                                <td>
                                                    <ul>
                                                        
                                                        <?php $__currentLoopData = $medico; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $infoMedoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($infoMedoc->RAP_NUM == $info->RAP_NUM): ?>
                                                                <li><?php echo e($infoMedoc->MED_NOMCOMMERCIAL); ?></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <ul>
                                                        
                                                        <?php $__currentLoopData = $medico; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $infoMedoc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($infoMedoc->RAP_NUM == $info->RAP_NUM): ?>
                                                                <li><?php echo e($infoMedoc->OFF_QTE); ?></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <a href = '<?php echo e(route ('pdf', ['id'=>$info->RAP_NUM])); ?>' target="_blank"><img class="pr-4 pl-4 w-24" src="images/4.png"></a>
                                                </td>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tr>
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
<?php endif; ?><?php /**PATH C:\wamp64\www\gsb\resources\views/rapport.blade.php ENDPATH**/ ?>