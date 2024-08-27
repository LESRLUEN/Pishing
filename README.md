# Proyecto de Phishing - Seguridad Informática

Este proyecto es parte de una práctica de la materia de Seguridad Informática. Consiste en una página de phishing que simula una página de inicio de sesión similar a la de TikTok. **Este proyecto tiene fines exclusivamente educativos** para entender la vulnerabilidad del phishing.

## Pagina que se replico

  `https://www.tiktok.com/login?lang=es&redirect_url=https%3A%2F%2Fwww.tiktok.com%2Fupload%3Flang%3Des`

## Vector de ataque

  - Enviar correo donde mediante el texto dar a entender que hubo una vulnerabilidad o necesita iniciar sesión nuevamente
  - Colocarla estrategicamnete en el navegador para ser la primera opcion antes que la original
  - Mandarla por whatsapp

## Requisitos Previos

- Servidor web (Apache)
- PHP
- MySQL

## Instrucciones para Configuración y Ejecución

### Paso 1: Clonar el Repositorio

1. Clona el repositorio desde GitHub:

    ```bash
    git clone https://github.com/LESRLUEN/Pishing.git
    cd tu_repositorio/Pishing
    ```

### Paso 2: Configurar la Base de Datos

1. Inicia MySQL y crea la base de datos necesaria utilizando el archivo `login.sql`:
    ```
    touch sql/login.sql (en caso de que no este el archivo)
    ```
    ```bash
    mysql -u root -p < sql/setup.sql
    ```


   - **Nota:** Reemplaza `root` con tu nombre de usuario de MySQL si es diferente.

### Paso 3: Configurar Apache

1. Copia los archivos del proyecto a la carpeta del servidor web de Apache:

    ```bash
    sudo cp -r . /var/www/html/Pishing
    ```

2. Asegúrate de que Apache esté corriendo:

    ```bash
    sudo service apache2 start
    ```

### Paso 3 opcion 2: En caso de no querer mover la carpeta

 1. entrar al directorio donde se guardo el repositorio  cd carpeta donde se guardo/Pishing

 2.  una vez dentro usar en la misma terminal $ php -S localhost:8000

 3. En el navegador usar

    ```
    http://localhost:8000/login.html
    ```
    para acceder a la pagina de pishing

### Paso 4: Acceder a la Página

- Abre tu navegador web y visita `http://localhost:8000/login.html` para acceder a la página de inicio de sesión.

### Paso 5: Verificar la Base de Datos

1. Después de realizar el inicio de sesión, verifica que los datos se hayan guardado en la base de datos en `ligon.sql`:

    ```
    cat lugar en el que se guardo el repositorio/Pishing/sql/login.sql
    ```

## Estructura de Archivos

Asegúrate de que los archivos estén organizados de la siguiente manera:

Phishing/
│

├── index.html            # Página principal que imita una página de inicio de sesión

├── login.html            # La página real donde los usuarios ingresan sus credenciales

├── save_login.php        # Script PHP para guardar credenciales en un archivo .sql

├── styles.css            # Archivo CSS para estilizar las páginas HTML

├── sql/

│   └── login.sql         # Archivo donde se almacenan las credenciales (creado manualmente)

├── img/
│   ├── logo.png          # Logo usado en las páginas

│   ├── qr.svg            # Imagen para la opción de código QR

│   ├── user.jpg          # Imagen de icono de usuario

│   └── [otras imágenes]  # Imágenes adicionales (Facebook, Google, etc.)

└── README.md             # Archivo con las instrucciones y documentación



## Nota Importante

Este proyecto se realiza con fines exclusivamente educativos para entender la vulnerabilidad del phishing. **No debe ser utilizado con fines malintencionados.**
