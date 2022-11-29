<div class="mx-auto max-w-4xl pb-32 sm:pb-40">

    <div class="overflow-hidden bg-white shadow sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Detalles de la oferta</h3>
            <p class="mt-1 max-w-2xl text-sm text-gray-500">Aquí puedes leer todos los detalles.</p>
        </div>
        <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Servicio</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{$offer->category->name}}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Presupuesto</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{$offer->budget}} € ({{$offer->frequency}})</dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Nombre</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{$offer->contact_name}}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Empresa</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{$offer->company_name}}</dd>
                </div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Web</dt>
                    <dd class="mt-1 text-sm text-gray-900">{{$offer->website}}</dd>
                </div>
                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">Contacta a través de:</dt>
                    <dd class="mt-1 text-sm text-gray-900">
                        {{$offer->contact}}
                    </dd>
                </div>
                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">Detalles</dt>
                    <dd class="mt-1 text-sm text-gray-900 prose prose-sm">{!!$offer->details!!}</dd>
                </div>

            </dl>
        </div>
    </div>

</div>