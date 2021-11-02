@component('mail::message')
@component('mail::message')
[![Logo Bambo GROUP](https://katalog.tech/assets/images/key-5284793-960-720-512x512.png)


Bonjour **{{$user->name}}**,  
Bienvenue sur la plateforme ***{{ config('app.name') }}***.  
Vous venez d'ouvrir un compte en utilisant l'adresse email {{$user->email}}.  
 Veuillez trouver ci-dessous vos identifiants de connexion: 
- Email: **{{$user->email}}**
- Mot de passe (à ne surtout pas partager): **{{$password}}**
@if ($user->type=="Agence")
|   Votre agence est en cours d'activation, une fois fait, vous serez contacté avec les informations d'hébergement.  
@endif
Cordialement.  

---
**{{config('app.name')}}** est un produit de [Bambo GROUP](https://bambogroup.net)  


[![Signature {{ config('app.name') }}](https://katalog.tech/assets/images/mail-signature.png "Signature {{config('app.name')}}")](https://katalog.tech/assets/images/mail-signature.png)
@endcomponent

@endcomponent
