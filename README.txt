El contenido de las carpetas es el siguiente:

/clicfans -> contiene el backend de la aplicacion, se utilizo PHP, y el framework de slim para el modelo MVC y eloquent como ORM
/clicfans-ui -> contiene el frontend de la aplicacion, hecha en AngularJS, se uso el proyecto https://github.com/angular/angular-seed como base, se utilizo ui.grid (http://ui-grid.info/) para la funcionalidad del grid
/database -> contiene el script de la base de datos

Los proyectos se corrieron en los servidores de desarrollo que incluye PHP para el backend y el NPM para el frontend:

Para correr el backend
>php -S localhost:80 -t public public/index.php

Para correr el frontend
>npm start