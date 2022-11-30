<div class="mx-auto max-w-4xl pb-32 sm:pb-40">

    <div class="mx-auto max-w-3xl md:text-center pt-20 sm:pt-20 sm:pb-10">
        <h2 class="font-display text-3xl tracking-tight text-slate-900 sm:text-4xl">
            Verifica tu oferta antes de enviarla
        </h2>
        <p class="mt-4 text-lg tracking-tight text-slate-700">
            Asegúrate que todo está bien. Una vez la envíes, la validaremos manualmente y se la enviaremos 
            a las agencias que mejor encajen con lo que estás buscando para que empiecen 
            a enviarte propuestas para solucionar tu problema. 
        </p>
    </div>
    <form wire:submit.prevent="submit">
        {{ $this->form }}
        
        <div class="flex sm:justify-center ">
            <button type="submit" wire:loading.attr="disabled" class=" mt-4 inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Envíanos tu oferta <span class="text-indigo-200" aria-hidden="true"> &nbsp; &rarr;</span>
            </button>
            
        </div>
        <p class="mt-3 flex text-sm text-gray-500 sm:justify-center">
            Haz clic en el botón para que recibamos tu propuesta y podamos compartirla.
        </p>

    </form>
</div>
