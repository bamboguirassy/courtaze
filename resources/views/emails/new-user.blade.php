@component('mail::message')
![Logo Bambo GROUP](https://katalog.tech/assets/images/key-5284793-960-720-512x512.png)


Bonjour **{{$user->name}}**,  
Bienvenue ***{{ config('app.name') }}***.  
Vous venez d'ouvrir un compte sur la plateforme.  
 Veuillez trouver ci-dessous vos identifiants de connexion:  
- Email: **{{$user->email}}**  
- Mot de passe (à ne surtout pas partager): **{{$password}}**  
@if ($user->type=="Agence")
|   Votre agence est en cours d'activation.  
Une équipe travaille sur l'hébergement du site.  
Une fois le travail terminé, vous serez contacté avec les informations d'hébergement.  
@endif  

Cordialement.  

---
**{{config('app.name')}}** est un produit de [Bambo GROUP](https://bambogroup.net)  


[![Signature {{ config('app.name') }}](https://katalog.tech/assets/images/mail-signature.png "Signature {{config('app.name')}}")](https://katalog.tech/assets/images/mail-signature.png)
@endcomponent
