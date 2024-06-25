


## Ingresos Tech - Evaluación 2024 - EMILIO VERNET

### 1) a) Crear un servicio RESTful 

#### Instrucciones para correr el proyecto

1) Clonar el proyecto

```bash
git clone https://github.com/emiliovernet/prueba-DGCIUD
```
2) Ir a la carpeta

```bash
cd prueba-DGCIUD
```
3) Instalar las dependencias del proyecto utilizando Composer

 ```bash
 composer install
 ```
 
4) Crear un archivo .env a partir del archivo de ejemplo ".env.example"

 ```bash
 cp .env.example .env
 ```
5) Genera una clave de aplicación única para Laravel

 ```bash
 php artisan key:generate
 ```

6) Crear la base de datos ejecutando las migraciones

 ```bash
 php artisan migrate
 ```

7) Llenar la base con los datos de prueba

 ```bash
 php artisan db:seed
 ```

8) Iniciar el servidor

 ```bash
 php artisan serve
 ```


### 1) b) Crear colección de Postman

Colección y entorno disponible [acá](https://github.com/emiliovernet/prueba-DGCIUD/tree/main/postman) 

### 2) Crear una página para de consulta de direcciones
- Con el proyecto corriendo se pueden testear las siguientes urls:
  - `http://127.0.0.1:8000/normalizar/?direccion=corrientes 100`
  - `http://127.0.0.1:8000/normalizar/?direccion=callao y corrientes, moron`
  - `http://127.0.0.1:8000/normalizar/?direccion=callao y corrientes`

### 3) Casos de GIT
Soluciones disponibles [acá](https://github.com/emiliovernet/prueba-DGCIUD/blob/main/ejerciciosGIT.md)

### 4) Casos de SQL
Soluciones disponibles [acá](https://github.com/emiliovernet/prueba-DGCIUD/blob/main/ejerciciosSQL.sql)

