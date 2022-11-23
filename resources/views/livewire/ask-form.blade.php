<div class="mx-auto max-w-4xl pb-32 sm:pb-40">

    <div class="mx-auto max-w-3xl md:text-center pt-20 sm:pt-20 sm:pb-10">
        <h2 class="font-display text-3xl tracking-tight text-slate-900 sm:text-4xl">
            Contacta con las mejores agencias y profesionales
        </h2>
        <p class="mt-4 text-lg tracking-tight text-slate-700">
            Escribe lo que necesites una vez y deja que tu mensaje llegue a agencias y profesionales seleccionados a mano y recibe propuestas cómodamente sin coste añadido.
        </p>
    </div>
    <form wire:submit.prevent="submit">
        {{ $this->form }}
        
        <div class="justify-end flex">
            <button type="submit" class=" mt-4 inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Enviar y recibir propuestas
            </button>
        </div>

    </form>
</div>
