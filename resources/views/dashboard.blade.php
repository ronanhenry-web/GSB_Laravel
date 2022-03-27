<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Histoire de l\'entreprise GSB') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg text-black text-center">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>LABORATOIRE GALAXY SWISS BOURDIN</h1>
                </div>
                <img class="ml-45 mt-8 indicator" src="images/1.png" alt="GSB">
                <p class="p-6 mt-8">Le laboratoire Galaxy Swiss Bourdin (GSB) est issu de la fusion entre le géant 
                    américain Galaxy (spécialisé dans le secteur des maladies virales dont le SIDA 
                    et les hépatites) et le conglomérat européen Swiss Bourdin (travaillant sur 
                    des médicaments plus conventionnels), lui-même déjà union de trois petits 
                    laboratoires. En 2009, les deux géants pharmaceutiques ont uni leurs forces 
                    pour créer un leader de ce secteur industriel. L’entité Galaxy Swiss Bourdin 
                    Europe a établi son siège administratif à Paris.
                    Le siège social de la multinationale est situé à Philadelphie, Pennsylvanie, 
                    aux Etats-Unis.</p>
                    <ul class="steps mt-4">
                        <li class="step step-neutral">Step 1</li>
                        <li class="step step-neutral">Step 2</li>
                        <li class="step step-neutral">Step 3</li>
                        <li class="step step-neutral">Step 4</li>
                        <li class="step step-neutral">Step 5</li>
                        <li class="step step-neutral">Step 6</li>
                        <li class="step step-neutral">Step 7</li>
                    </ul>
            </div>
        </div>
    </div>
</x-app-layout>
