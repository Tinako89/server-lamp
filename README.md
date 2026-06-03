<p align="center">
  <a href="https://github.com/Tinako89/server-lamp/stargazers"><img src="https://img.shields.io/github/stars/Tinako89/server-lamp?style=flat&label=stars&color=2a7bff" alt="stars"></a>
  <img src="https://img.shields.io/badge/Apache%20httpd-2.4-d22128" alt="apache">
  <img src="https://img.shields.io/badge/MariaDB-10.11%7C11.4%7C11.8-003545" alt="mariadb">
  <img src="https://img.shields.io/badge/PHP-7.4~8.5-777bb4" alt="php">
  <img src="https://img.shields.io/badge/license-GPL--3.0-0057b8" alt="license">
</p>

<h1 align="center">SERVIDOR LAMP: LINUX + APACHE + MYSQL + PHP</h1>

<img width="1440" height="816" alt="lamp_stack_image_94d676a5" src="https://github.com/user-attachments/assets/7e5b31f4-2c96-453e-848b-693d8090da63" />

Un servidor LAMP es un entorno de software para alojar aplicaciones y sitios web dinámicos. Está formado por Linux como sistema operativo, Apache como servidor web, MySQL como gestor de bases de datos y PHP como lenguaje de programación. En este caso se monta en local, dentro de una máquina virtual creada con VirtualBox, lo que permite desarrollar y ejecutar aplicaciones web de forma eficiente sin necesidad de un servidor externo.

Paso 1: Crear la Máquina Virtual en VirtualBox.

Nombre: lamp-ubuntu

<img width="1032" height="580" alt="Captura de pantalla 2026-06-02 212458" src="https://github.com/user-attachments/assets/d06402aa-9147-4bc8-8f12-0e7ab3eb0254" />

Tipo: Linux, Versión: Ubuntu (64-bit)

<img width="1033" height="578" alt="Captura de pantalla 2026-06-02 212627" src="https://github.com/user-attachments/assets/f6579280-1235-4d90-b0ad-d905c4a2a25b" />

RAM: 4096 MB + 2 CPUs

<img width="1031" height="577" alt="Captura de pantalla 2026-06-02 212823" src="https://github.com/user-attachments/assets/15882882-b2c8-4a76-b42d-fad8ea84d7e8" />

Disco: Crear VDI, dinámico, 25 GB

<img width="1032" height="585" alt="Captura de pantalla 2026-06-02 213000" src="https://github.com/user-attachments/assets/1932373a-92f0-4303-8d6f-a0bfdd7bd7a8" />

Seleccionamos la imágen .iso descargada de: https://ubuntu.com/download/server

<img width="1032" height="580" alt="Captura de pantalla 2026-06-02 213331" src="https://github.com/user-attachments/assets/d66149d0-e468-449b-bc7a-68972ca5566a" />

Red: Adaptador Puente.

<img width="859" height="493" alt="Captura de pantalla 2026-06-02 213507" src="https://github.com/user-attachments/assets/698a8f4f-a302-4e2c-99d4-051dc0bca711" />

Con todas las configuraciones listas ya podemos iniciar nuestra máquina Ubuntu.

<img width="995" height="778" alt="Captura de pantalla 2026-06-02 213752" src="https://github.com/user-attachments/assets/ea064989-5758-4f37-bee9-2bac5c355138" />

Paso 2: instalar Ubuntu.

<img width="716" height="447" alt="Captura de pantalla 2026-06-02 222240" src="https://github.com/user-attachments/assets/7b127f69-3469-404e-88fd-5052e1991e9b" />

Una vez instalado nos aparecerá la siguiente pantalla de Login, el Usuario por defecto es `vboxuser` y contraseña `changeme` más adelante crearemos nuevos Usuarios.

<img width="563" height="278" alt="Captura de pantalla 2026-06-02 223117" src="https://github.com/user-attachments/assets/017fb1c8-ac90-40c1-80af-6abee885eba8" />

Paso 3: Entra con tu Usuario y Contraseña, debería de aparecer la presentación de Ubuntu.

<img width="775" height="693" alt="Captura de pantalla 2026-06-02 223547" src="https://github.com/user-attachments/assets/f830438b-1bb2-4fae-9638-1f5c00f5ca55" />

Cuando estés logueado, hacemos lo primero que se hace en cualquier servidor nuevo: actualizar con el comando `sudo apt update` Actualizará la lista de paquetes disponibles en los repositorios.
Te pedirá tu contraseña otra vez, ponla. Verás cómo descarga listas de paquetes.

<img width="805" height="296" alt="Captura de pantalla 2026-06-02 224008" src="https://github.com/user-attachments/assets/0d28ba7f-d7e6-4806-b3ab-862d299d05e0" />

Cuando termine y vuelva al prompt $ ejecuta el segundo comando, `sudo apt upgrade -y` Esto actualizará todos los paquetes instalados a sus versiones más recientes disponibles y la opción `-y` acepta automáticamente la confirmación.

<img width="484" height="61" alt="Captura de pantalla 2026-06-02 224748" src="https://github.com/user-attachments/assets/90cb0eec-7f90-4efa-8fdc-7d0c375461d9" />

<img width="1279" height="797" alt="Captura de pantalla 2026-06-02 224650" src="https://github.com/user-attachments/assets/d94aa656-34dd-4407-a309-95c792c40e2e" />

Ahora con el comando `sudo apt autoremove -y` busca paquetes que se instalaron como dependencia de otra cosa y ya no los necesita nadie.

<img width="1159" height="603" alt="Captura de pantalla 2026-06-02 225050" src="https://github.com/user-attachments/assets/6cfbb2cd-9fee-44c3-b983-1c06d8b8e003" />

Un extra opcional que yo suelo hacer después es con el comando `sudo apt autoclean` borra los instaladores descargados que ya no sirven, libera unos megas en el disco virtual.

<img width="375" height="72" alt="Captura de pantalla 2026-06-02 225341" src="https://github.com/user-attachments/assets/e9d1cf12-2c00-424c-90fe-bcc11b0381d5" />

Paso 5: Instalar Apache: `sudo apt install -y apache2` Verás cómo descarga unos 10-15 paquetes. Es normal que tarde un minuto.

<img width="1121" height="715" alt="Captura de pantalla 2026-06-03 111134" src="https://github.com/user-attachments/assets/a9c82300-2d3c-4752-a6d1-ff2c256ed911" />

Comprueba que está corriendo: `systemctl status apache2` Deberías ver una línea verde que dice active (running). Pulsa la tecla q para salir de esa vista.

<img width="1283" height="405" alt="Captura de pantalla 2026-06-03 111507" src="https://github.com/user-attachments/assets/cea84184-5662-4595-aa37-af1f59e5cf74" />

Ahora con el comando `curl` prueba desde dentro de la VM: `curl http://localhost` Te va a devolver un montón de HTML que empieza por <!DOCTYPE html> y en medio pone “Apache2 Ubuntu Default Page”. Eso significa que el servidor web ya funciona.

<img width="1108" height="624" alt="Captura de pantalla 2026-06-03 112509" src="https://github.com/user-attachments/assets/305ebb83-9d2b-4c65-8d40-609ee40e2458" />






















































En construcción...

<img width="500" height="375" alt="SITIO-EN-CONSTRUCCION" src="https://github.com/user-attachments/assets/17ee150e-edeb-46d7-a740-20ff1442a303" />


