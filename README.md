#  Chiwi Academy
___

[![Logo](./img/logoChiwiAcademy.png "database Date")](http://chiwiacademy.gq)

<details>

<summary> 🔎 Contexto del proyecto 🔎 </summary>

🔍 Un colectivo de desarrollo de software quiere crear una aplicación web para gestionar sus eventos online como talleres, masterclass o webinars.

🔍 Los usuarios podrán ver la descripción de un evento, apuntarse y desapuntarse. Podrán ver la lista de los eventos a los que se han apuntado. El administrador debe tener las herramientas para la gestión (CRUD) de los eventos.

<h2> 📚 Requisitos Funcionales: 📚 <h2>

📗 Deben existir dos roles de usuario, Administrador y estudiante.

📙 Se deben proteger las rutas para que el estudiante no pueda ver las vistas del administrador y viceversa.

📘 En portada la aplicación tendrá un slider con las masterclasses destacadas. éstas serán seleccionables por el administrador.

📗 En portada habrá una lista paginada con todos los eventos ordenados del más cercano al más lejano.

📙 Los eventos incluirán como mínimo: título, fecha/hora, número máximo de participantes, descripción y una imagen.

📘 Los eventos pasados se deben mantener en la lista pero identificables como no disponibles.

📗 Los usuarios deberán registrarse para apuntarse a un evento. Una vez apuntados no podran volver a hacerlo.

📙 Al apuntarse a un evento recibirán un email (empresarial - html ) con el link (zoom, meets, etc..) en donde se va a realizar, así como recordando el título del evento, la hora y el día.

📘 Los usuarios podrán ver en una página la lista de los eventos a los que están registrados.

📗 El administrador podrá hacer CRUD de los eventos.

📙 Cuando un evento esté lleno (máximo número de participantes) nadie podrá registrarse.

<h2> 📝 Requisitos no funcionales: 📝 </h2>

✏️ La web deberá estar desplegada aunque esté en desarrollo.
    
✏️ Se deberá usar Laravel.
    
✏️ El envío de el email se deberá hacer usando un sistema de colas.
    
✏️ Para el frontend se deben usar componentes de blade.

<h2> 🏛️ Modalidades pedagógicas 🏛️ </h2>
🏛️ Un sprint de una semana iniciando desde el momento en que se envíe el brieff hasta el viernes 22 de abril del 2022 a las 23:59.

🏛️ Trabajo en equipo.

<h2> 📈 Modalidades de evaluación 📈 </h2>
    
📈 Demo por equipos el día Lunes 25 de abril del 2022.

<h2> 💻 Entregables 💻 </h2>
    
💻 Un link a un repositorio de github

💻 Product backlog.

💻 Readme del repositorio con:
    
💻 Briefing y explicación del proyecto en el Mockup
    
💻 Url en despliegue.
    
💻 Presentación en diapositivas
    
💻 Demo y code review**


</details>

Instalaciones de Chiwi-Academy



https://user-images.githubusercontent.com/90289472/164802317-7c6e83cc-7d82-49a7-a93f-78cc96c02d93.mp4


___

```php
## command laravel artisan

se crea un controlador con el siguiente comando: 
-php artisan make:controller NombredelcontroladorController 

en ese controlador se debe tener una tabla de datos con un modelo

con el siguiente comando se puede realizar un modelo
-php artisan make:model Nombredelmodelo 

modelo acceso que te da la app a la bd 
Event = nombre del modelo  
m = genera migracion para ese modelo 
f = genera factoria para ese modelo
-php artisan make:model Event -m -f

para dar estilos a daisy ui al inicial el trabajo: 
-npm run watch

para generar migraciones se realiza a travez del codigo: 
-php artisan make:migration add_nombre_de_columna_nombredeBD 

revierte todas las migraciones y las vuelve a crear a traves del siguiente comando:
-php artisan make:migrate:refresh 

para ejecutar comandos de php en la terminal se usa:
-php artisan tinker
para crear usuarios falsos en nuestras tablas realizamos el siguiente comando: 
-App/Models/Event::factory()->times(#) ->create(['user_id' =>2]);

creacion de una tabla 
-php artisan make:migration create_nombre_de_la_tabla --create=nombre_de_la_tabla
-php artisan migrate

el siguiente comando es por si cometes un error con la base de datos, ya sea porque escribiste el nombre mal o algo relacionado, para eliminar esto usamos el siguiente comando:
-php artisan migrate:rollback

el siguinte comando crea el modelo: 
-php artisan make:model nombre_de_la_BD

```



## Chiwi Academy **Coders**.
___
**github**
___
- **[Dargy Julieth Mogollon]( https://github.com/DargyJML)**
- **[Albert Quintanilla]( https://github.com/Jhuset2003)**
- **[Enmanuel Pereira]( https://github.com/iElectro13)**
- **[Dario Higuera Moreno]( https://github.com/dariohimo)**

___
---

## deploy 
**Heroku**
- **[HEROKU]( https://chiwi-academy.herokuapp.com/)**
---

**GITHUB**
- **[GITHUB]( https://github.com/Jhuset2003/Chiwi_Academy)**

___
---

## Tecnologies :
___

<div align="center">

[![][logo-url]][repo-url]  

**Tailwind CSS Components**  
[ [See repo ↗︎][repo-url] ]
  

</div>

[![][banner-url]][repo-url]  


[logo-url]: https://raw.githubusercontent.com/saadeghi/files/main/daisyui/logo-4.svg
[repo-url]: https://github.com/saadeghi/daisyui
[banner-url]: https://raw.githubusercontent.com/saadeghi/files/main/daisyui/card-3.png


# daisyUI 2.0

- [Official website →](https://daisyui.com/)
- [See all components →](https://daisyui.com/components/)
- [How to use →](https://daisyui.com/docs/install/)




<details>
 
 <summary>  🌼 Features </summary>

- A plugin for Tailwind CSS
- Faster development
- Cleaner HTML
- Customizable and themeable
- Pure CSS. Works on all frameworks


## 📀 Install now!

```bash
npm i daisyui
```
</details>

____
----

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<details>
<summary> About Laravel </summary>
Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.



## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

</details>

---
---
## planetscale

___

<p align="center"><a href="https://planetscale.com/" target="_blank"><img src="https://planetscale.com/social-share-v2.png" width="200"></a></p>

