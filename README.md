# SitioWebPHP

Este repositorio contiene un sitio web, donde se utilizan las siguientes tecnologías y librerías.

## Tecnologías y Librerías Utilizadas

- **HTML5**: Utilizado para estructurar el contenido del sitio.
- **CSS3 con Bootstrap 5**: Se emplea para el diseño y estilos del sitio, utilizando la última versión de Bootstrap.
- **JavaScript**: Utilizado para la lógica de interactividad en la interfaz de usuario.
- **PHP**: Se utiliza para gestionar el registro de usuarios a través de formularios y la interacción con la base de datos.
- **MySQL**: Base de datos utilizada para almacenar la información de los usuarios registrados.
- **Typewriter Effect (typewriter-effect.js)**: Librería para crear el efecto de máquina de escribir en la sección de contacto.

## Estructura de Carpetas

- **css**: Contiene archivos de estilo, incluyendo Bootstrap y estilos personalizados.
- **img**: Almacena imágenes utilizadas en el sitio.
- **js**: Contiene scripts JavaScript utilizados en el sitio.

## Archivos Principales

### `index.php`

Este archivo PHP gestiona el registro de usuarios a través de un formulario y almacena la información en la base de datos MySQL llamada `formulario`. Se encarga de verificar la integridad de los datos ingresados y muestra mensajes de éxito o error.

### `main.js`

Script JavaScript principal que incluye la lógica para un efecto de máquina de escribir (Typewriter Effect) en la sección de contacto. Utiliza la librería `typewriter-effect.js`.

### `typewriter.js`

Script JavaScript adicional que contiene configuraciones específicas para el efecto de máquina de escribir en la sección de contacto.

### `database.sql`

Script SQL que crea la base de datos `formulario` y la tabla `datos` utilizada para almacenar la información de los usuarios registrados.

### `index.html`

Archivo HTML principal que estructura el contenido del sitio. Incluye secciones como encabezado, navegación, slider de imágenes, introducción de servicios, tipos de servicios, información sobre el equipo, formulario de contacto y el pie de página.

## Instrucciones de Uso

1. Clona este repositorio en tu máquina local.
2. Configura un servidor web (por ejemplo, Apache) para ejecutar el archivo `index.php`.
3. Importa la estructura de la base de datos desde el archivo `database.sql` a tu servidor MySQL.
4. Accede al sitio a través de tu navegador y explora las diferentes secciones.
