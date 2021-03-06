Anexo IV: Validación accesibilidad
========================

La validación sobre accesibilidad se ha llevado a cabo sobre las siguientes páginas:

[Index](http://animas.herokuapp.com/index.php)
---------

![Index](images/accesibilidad/accesibilidad-index1.png)

En este apartado se muetran fallos alts en las imágenes y label y en los checkbox. Se puede solucionar con facilidad y cumple el nivel AA

![Index](images/accesibilidad/accesibilidad-index.png)

Tras crear una publicación, el propio framework (Yii2) generá automáticamente una etiqueta  `<b>` que no puede ser reemplazada o eliminada

-------------------------------------------------

[Login](http://animas.herokuapp.com/user/login.php)
---------


![Login](images/accesibilidad/accesibilidad-login.png)

La sección de "Login" presenta dos fallo que representan la falta de un label en un checkbox en un input de texto. Aún así, aunque a nivel de código presente un fallo de accesibilidad, se mantiene informado en todo momento al usuario de la acción de dicho checkbox. Este fallo, el cual es generado por el propio framework, no es accesible mediante código HTML o CSS
-------------------------------------------------

[Registro](http://animas.herokuapp.com/user/register.php)
---------


![Registro](images/accesibilidad/accesibilidad-registro.png)

La página del registro cumple el nivel AA de accesibilidad.

-------------------------------------------------

[Publicar](https://animas.herokuapp.com/publicaciones/create.php)
---------


![Publicar](images/accesibilidad/accesibilidad-formulario.png)

La sección de "Publicar" mediante un formulario presenta dos fallo que representan la falta de un label en un checkbox en un input de texto. Aún así, aunque a nivel de código presente un fallo de accesibilidad, se mantiene informado en todo momento al usuario de la acción de dicho checkbox. Este fallo, el cual es generado por el propio framework, no es accesible mediante código HTML o CSS


-------------------------------------------------

[Información publicación](http://animas.herokuapp.com/index.php)
"Accediendo mediante mediante el título o imágen de las publicacioens listadas en el index"
---------

![Información publicación](images/accesibilidad/accesibilidad-viewpub1.png)

A priori, la página presentaba fallos de accesibilidad, Como por ejemplo etiquetas `</i>` que deben ser reemplazadas por `</strong>`.

![Información publicación](images/accesibilidad/accesibilidad-viewpublicar2.png)

-------------------------------------------------

[Búsqueda Filtrada](http://animas.herokuapp.com/site/filtro)
---------
La página cumple el con el nivel de accesibilidad AA

![Filtrado](images/accesibilidad/accesibilidad-filtrado.png)


-------------------------------------------------

[Búsqueda Filtrada](http://animas.herokuapp.com/site/filtro)
---------
La página cumple el con el nivel de accesibilidad AA

![Filtrado](images/accesibilidad/accesibilidad-filtrado.png)


-------------------------------------------------

[Contacto](http://animas.herokuapp.com/site/contact)
---------
La página cumple el con el nivel de accesibilidad AA

![Filtrado](images/accesibilidad/accesibilidad-contacto.png)


-------------------------------------------------

[Mi Perfil](http://animas.herokuapp.com/user/14)
---------
La página cumple el con el nivel de accesibilidad AA

![Mi Perfil](images/accesibilidad/accesibilidad-miperfil.png)

-------------------------------------------------


[Comprobar](http://animas.herokuapp.com/publicaciones/comprobar)
---------
La página cumple el con el nivel de accesibilidad AA

![Comprobar](images/accesibilidad/publicaciones-comprobar.png)

-------------------------------------------------


Conclusión
-----------------

En coclusión, las mayoría de páginas cumplen las normas de accesibilidad AA, tan solo en algunas secciones no se ha podido completar el nivel de accesiblidad AA debido a etiquetas que genera el propio framework.
