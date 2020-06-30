# Proyecto MVC

Un proyecto derivado del tutorial introductorio de Laracast y con algunos
agregados para ser utilizado como material de PAW - UNLu.

## Instalación

 - Clonar el repositorio
 - Crear un schema de base de datos con algun cliente MySQL
 - Ejecutar los migrations del directorio `sql/` en orden
 - Crear un archivo `config.php` (Hay un ejemplo para copiar en `config.php.example`)
  - Configurar la base de datos creada y los usuarios correspondientes
 - Ejecutar `composer install`

### Aclaración

Por cada objeto creado por usted mismo (Model o Controller), debera indicar a
composer que regenere el autoload:

```
composer dumpautoload
```

Si lo que se desea es agregar una nueva libreria de 3ero

```
composer requiere name/lib:version
```

## Deploy / ejecución

### Local

Ejecutar:

```
git clone https://github.com/pawunlu/ajax-based-site.git paw-example-ajax/
cd paw-example-ajax/
# Aca irian los pasos de instalación
php -S localhost:8888
```

Luego ingresar a http://localhost:8888

## Estructura de Datos

El endpoint que importa es `/start`, que devuelve una Estructura JSON asi:
```json
{
  "nav": [
    "item 1",
    "item 2",
    "item 3"
  ],
  "main": {
    "section_uno": {
      "article_uno": "articulo uno",
      "article_dos": "articulo dos"
    },
    "section_dos": "Seccion uno"
  },
  "footer": [
    "link 1",
    "link 2"
  ]
}
```

Esta estructura se procesa en`[index.js](/blob/master/public/js/index.js)
