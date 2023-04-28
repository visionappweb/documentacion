# documentacion
Proyecto con ejemplos de estandarización de Commits para proyectos de Vision App Web.

Dada la siguiente historia se realiza documentacion de estandarización de Commits y Pull Request para proyectos de Vision App Web.

### DOC-1 (historia) Desarrollo api para modulo universitario.

Como PO Requiero que se dearrolle una api en laravel 9 que permita crear profesores y estudiantes y listar la información de estos.

- El alcance de esta historia es: 
Crear un proyecto para una api en laravel 9 que permita crear profesores y estudiantes agrupando las rutas por rol, "estudiantes", "profesores"; teniendo en cuenta que las rutas deben estar agrupadas dentro de una ruta "universitario".

- Criterio de aceptación: 
Que el proyecto permita crear Profesores - Estudiantes y listar los datos.

### DOC-1 / DOC-2 (subtarea) Desarrollo ruta estudiante.
Como PO Requiero que se desarrollen las rutas de creacion de estudiante y consultar estudiante.

- El alcance de esta historia es: desarrollar las rutas de creación y listar estudiante.
- Protocolos permitidos:
  - GET/estudiante
  - POST/estudiante

- Criterio de aceptación: que las rutas de tipo GET muestren la información del estudiante y la ruta de POST retorne un mensaje "Recurso creado exitosamente con la data del estudiante."


### DOC-1 / DOC-3 (subtarea) Desarrollo ruta profesor.

Como PO Requiero que se desarrollen las rutas de creacion de profesor y consultar profesor.

- El alcance de esta historia es: desarrollar las rutas de creación y listar profesor.
- Protocolos permitidos:
    - GET/profesor
    - POST/profesor

- Criterio de aceptación: que las rutas de tipo GET muestren un la información del profesor y la ruta de POST retorne un mensaje "Recuerso creado exitosamente con la data del profesor."

### DOC-1 / DOC-4 (subtarea) listar estudiantes.

Como PO Requiero que se desarrolle la ruta para listar estudiantes.

Criterios de aceptacion:
crear 1 ruta para listar los estudiantes.

Protocolos permitidos:
GET/estudiantes

- Criterio de aceptación: que la ruta retorne los datos de estudiantes en formato array.

### DOC-1 / DOC-5 (subtarea) listar profesores

Como PO Requiero que se desarrolle la ruta de listar profesores.

Criterios de aceptacion:
crear 1 ruta para listar los profesores.

Protocolos permitidos:
GET/profesores

- Criterio de aceptación: que la ruta retorne los datos de profesores en formato array.
