# Ventas

## Lista de Entidades

### clientes **(ED)**

- cliente_id **(PK)**
- nombre
- apellidos
- telefono **(UQ)**
- email **(UQ)**
- direccion
- cp
- ciudad
- pais **(FK)**

### productos **(ED|EC)**

- producto_id **(PK)**
- nombre
- descripcion
- foto
- precio
- cantidad

### ventas **(ED)**

- venta_id **(PK)**
- cliente_id **(FK)**
- fecha
- monto

### articulos_x_venta **(EP)**

- articulo_id **(PK)**
- venta_id **(FK)**
- producto_id **(FK)**
- cantidad

### paises **(EC)**

- pais_id
- nombre
- dominio **(UQ)**

## Relaciones

1. Un **cliente** tiene **pais** (_1 - 1_).
2. Una **venta** posee **cliente** (_1 - 1_).
3. Una **venta** tiene **articulo** (_1 - M_).
4. Un **articulo** es un **producto** (_1 - 1_).