# Inxait frontstarter
Scaffold frontend para proyectos de Inxait.

----
## ¿Por qué usarlo?
Facilita el proceso de crear una estructura organizada y reusable de
vistas y estilos mediante SASS y bootstrap (css), jQuery (js) y Blade (Laravel templates).

----
## Estructura creada
```
├── package.json
├── resources
|   ├── .frontstarter
|   ├── views
|   |	├── layouts
|   |   |   ├── frontpages.blade.php
|   |   |   └── adminpages.blade.php
|   |	├── pages
|   |   |   └── home.blade.php
|   |	├── partials
|   |   |   ├── footer.blade.php
|   |   |   └── header.blade.php
|   ├── assets
|   |	├── js
|   |	|	└── app.js
|   | 	├── sass
|   |   |   ├── common
|   |   |   |   ├── mixins.scss
|   |   |   |   ├── variables.scss
|   |   |   ├── layouts
|   |   |   |   └── globals.scss
|   |   |   ├── pages
|   |   |   |   └── home.scss
|   |   |   ├── partials
|   |   |   |   ├── footer.scss
|   |   |   |   ├── header.scss
|   |	|	└── app.scss

```
El archivo .frontstarter sirve como un flag para no sobreescribir los archivos
que se estan trabajando al instalar el proyecto desde repositorio con composer 
o al ejecutar el comando publish de Laravel.

Instalar inmediatamente despues de crear el proyecto.
