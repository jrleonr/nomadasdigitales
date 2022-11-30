<x-mail::message>
# Nueva oferta

## Qué busca
{{$offer->category->name}}

## Presupuesto

{{$offer->budget}} ({{$offer->frequency}})

## Contact

{{$offer->contact}}

## Empresa

### Personas de contacto 
{{$offer->contact_name}}

### Nombre
{{$offer->company_name}}

### Website
{{$offer->website}}

## Detalles

<x-mail::panel>
{!!$offer->details!!}
</x-mail::panel>

</x-mail::message>