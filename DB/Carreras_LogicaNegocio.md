# Maratones

## Listado de Entidades

### carreras **(ED)**

- carrera_id **(PK)**
- nombre
- tipo_carrera **(FK)**
- fecha
- tiempo
- mejor_tiempo
- altitud
- lugar
- pais **(FK)**
- foto

### tipos_carrera **(EC)**

- tipo_carrera **(PK)**
- descripcion
- distancia

### paises **(EC)**

- pais_id **(PK)**
- nombre

## Relaciones

1. Una **carrera** _pertenece_ a un **tipo de carrera**. (_1 a 1_)
1. Una **carrera** se _corre_ en un **pais**. (_1 a 1_)

## Diagramas

### Modelo Entidad - Relacion

![Modelo Entidad - Relacion](./CarrerasModeloE-R.png)

### Modelo Relacional de la BD

![Modelo Relacional de la BD](./CarrerasModeloRelacionalDB.png)

## Reglas de Negocio

### carreras

1. Crear el registro una carrera.
2. Leer el registro de una(s) carrera(s) dada una condicion en particular.
3. Leer todos los registros de la entidad carreras.
4. Actualizar los datos de una carrera.
5. Eliminar los datos de una carrera dada una condicion en particular.

### tipos_carreras

1. Crear el registro un tipo de carrera.
2. Leer el registro de un(os) tipo(s) de carrera(s) dada una condicion en particular.
3. Leer todos los registros de la entidad tipos carreras.
4. Actualizar los datos de un tipo de carrera dada una condicion en particular.
5. Eliminar los datos de un tipo de carrera dada una condicion en particular.

### paises

1. Crear el registro un pais.
2. Leer el registro de un(os) pais(es) dada una condicion en particular.
3. Leer todos los registros de la entidad paises.
4. Actualizar los datos de un pais dada una condicion en particular.
5. Eliminar los datos de un pais dada una condicion en particular.