# aleser-hijo

Tema hijo de **Twenty Twenty-Five** para el blog WOW me gusta IAW (práctica 4 de IAW, ASIR).

## Qué hace
- Define la identidad visual en `theme.json`: paleta de 4 colores propios, colores de fondo, texto, enlaces y encabezados, y tipografía de los títulos.
- Sustituye el pie del tema padre por uno propio (`parts/footer.html`) con nombre, curso, enlace a Contacto y el año mediante el código corto `[anio]`.
- Conserva la plantilla de la página Contacto (`templates/page-contacto.html`).
- Aporta los estilos del pie y de la caja de contacto de las entradas (`.aleser-caja-contacto`).

## Instalación
1. Ten instalado el tema padre Twenty Twenty-Five.
2. Copia esta carpeta en `wp-content/themes/aleser-hijo`.
3. En el panel: Apariencia › Temas › Activar.

## Dependencias
- WordPress con soporte de temas de bloques y el tema padre `twentytwentyfive`.
- Plugin `aleser-utilidades`: genera la caja de contacto y el código corto `[anio]` que este tema usa y estiliza.
