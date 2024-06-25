-- a) Productos que tengan nombre pero no descripción.
SELECT *
FROM productos
WHERE nombre IS NOT NULL 
AND descripcion IS NULL;


-- b) Productos vendidos en las últimas 24 horas.
SELECT p.id_producto, p.nombre, p.precio, p.descripcion
FROM productos p
JOIN detalle_ventas dv ON p.id_producto = dv.id_producto
JOIN ventas v ON dv.id_venta = v.id_venta
WHERE v.fecha >= NOW() - INTERVAL 1 DAY;

--c) Recuento de todos los estados de venta.
SELECT estado, COUNT(*)
FROM ventas
GROUP BY estado;

-- d) Ventas en las que el cliente con email X gastó una suma mayor a Y.
-- En este caso email es 'email@email.com' y el monto Y es 1000.
SELECT v.id_venta, v.fecha, v.id_cliente, v.monto_total
FROM ventas v
JOIN clientes c ON v.id_cliente = c.id_cliente
WHERE c.email = 'email@email.com' AND v.monto_total > 1000;