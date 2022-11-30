<div class="mx-auto max-w-4xl pb-32 sm:pb-40">

    <div class="mx-auto max-w-3xl md:text-center pt-20 sm:pt-20 sm:pb-10">
        <h2 class="font-display text-3xl tracking-tight text-slate-900 sm:text-4xl">
            Encuentra la mejor agencia para tu empresa 
        </h2>
        <p class="mt-4 text-lg tracking-tight text-slate-700">
            Escribe lo que necesites una vez y deja que tu mensaje llegue a agencias 
            seleccionadas a mano y recibe propuestas cómodamente sin coste añadido.
        </p>
    </div>
    <form wire:submit.prevent="submit">
        {{ $this->form }}
        
        <div class="flex sm:justify-center ">
            <button type="submit" wire:loading.attr="disabled" class=" mt-4 inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Último paso: revisa tu oferta <span class="text-indigo-200" aria-hidden="true"> &nbsp; &rarr;</span>
            </button>
            
        </div>
        <p class="mt-3 flex text-sm text-gray-500 sm:justify-center">
            Haz clic en el botón para ir al siguiente paso. Podrás volver revisar tu oferta.
        </p>

    </form>
</div>
