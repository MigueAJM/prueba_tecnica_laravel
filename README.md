# Prueba Tecnica built: _[Laravel v8](https://laravel.com/)_, _[JavaScript](https://developer.mozilla.org/es/docs/Web/JavaScript)_, _[JQuery v3.6.1](https://jquery.com/)_ ,  _[DataTable v1.12.1](https://datatables.net/)_ y _[BootStrap v5.2](https://getbootstrap.com/docs/5.2/getting-started/)_.introduction/)_
## Maquetar e integrar vista de _consultar listado_ y _alta_ de usuarios.
### Lanzar proyecto en Local:🚀
#### step 1: __Crear DB con el script db.sql__
#### step 2: __Crear archivo .env con las credenciales para la DB__
##### _windows_
`COPY .env.example ./.env`
##### _unix o linux_
`cp .env.example ./.env`

#### step 3: Instalar dependencias de Laravel
`composer install` _or_ `composer install --no-scripts` 
#### step 4: Ejecutar servidor de Laravel
`php artisan serve`

#### step 5: Abrir pestaña en navegador en la ruta _http://127.0.0.1:8000/_

##### _Routes_
* `http://127.0.1:8000/api/users/{id?}`
* `http://127.0.1:8000/api/users/new`
* `http://127.0.1:8000/api/postal-code/{postal_code?}`

# Imagenes Relevantes
<img src="https://raw.githubusercontent.com/MigueAJM/prueba_tecnica_laravel/master/public/images/datatable.png" alt="datatable de usuarios"/>
<img src="https://raw.githubusercontent.com/MigueAJM/prueba_tecnica_laravel/master/public/images/form.png" alt="formulario para dar de alta usuarios"/>

_[MigueAJM](https://migueajm.github.io/migueljimenezweb/)_
