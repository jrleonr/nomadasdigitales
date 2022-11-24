<x-mail::message>
# Verifica tu email

Por favor, haz clic en el botón para validar tu oferta, es solo para verificar que el correo es correcto.

<x-mail::button :url="$url" color="success">
Validar mi correo
</x-mail::button>

Gracias,<br>
{{ config('app.name') }}
</x-mail::message>