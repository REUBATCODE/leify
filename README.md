# Leify

## Introducción
![image-removebg-preview (9)](https://github.com/REUBATCODE/leify/assets/126991341/022bcf7d-b8c1-4cf1-9082-c0699ac6cbaf)

Este proyecto es realizado por alumnos de la Universidad Tecnológica de Hermosillo. La aplicación pretende ser un sitio como Spotify y Soundcloud, donde usuarios pueden ver y calificar música, mientras que ésta última es subida por los artistas.
## Contenido

### Detalles técnicos

###Stack tecnológico: 
React, Laravel y MongoDB.

- Los usuarios y los artistas son entidades distintas.

##Colecciones
##Usuarios
ID de usuario
Nombre
Correo electrónico
Contraseña (almacenada de forma segura)
Listas de reproducción (referencias a la colección de Listas de Reproducción)
Imagen de usuario

##Canciones
ID de canción
Título
ID del artista (referencia a la colección de Artistas)
ID del álbum (referencia a la colección de Álbumes)
Género
Duración
URL del archivo de audio

##Artistas
ID de artista
Nombre
Bio
Canciones (referencias a la colección de Canciones)
Imagen de artista

##Álbumes
ID de álbum
Título
Año de lanzamiento
Canciones (referencias a la colección de Canciones)
ID del artista (referencia a la colección de Artistas)
Imagen de album

##Listas de Reproducción
ID de lista de reproducción
Título
ID del usuario (referencia a la colección de Usuarios)
ID de Canciones (referencias a la colección de Canciones)
Reproducciones
ID de reproducción
ID del usuario (referencia a la colección de Usuarios)
ID de canción (referencia a la colección de Canciones)
Fecha y hora de reproducción

### Entidad-Relación
![image](https://github.com/REUBATCODE/leify/assets/126991341/40d745af-64fe-4f61-b035-6f0a3cf2c285)


> "Cada nota en una aplicación de música refleja no solo un sonido, sino también la convergencia de la creatividad artística y la innovación tecnológica." -Dr. Alex Harmon.

## Resultados y Discusión
...

## Conclusión
...

## Referencias
