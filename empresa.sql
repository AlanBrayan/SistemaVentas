-- by Alan

-- crear bd

create database ubuntu;

-- usar bd

use ubuntu;


-- Crear la tabla 'empresas'
CREATE TABLE empresas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL
);

-- Crear la tabla 'productos' con una clave foránea hacia 'empresas'
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    precio DECIMAL(10, 2) NOT NULL,
    cantidad INT NOT NULL,
    empresa_id INT,
    FOREIGN KEY (empresa_id) REFERENCES empresas(id)
);
-- Crear la tabla 'ventas'

CREATE TABLE ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    fecha DATE NOT NULL,
    producto_id INT,
    cantidad INT NOT NULL,
    precio_total DECIMAL(10, 2) NOT NULL,
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);


-- Insertar datos sencillos

-- Insertar datos en la tabla 'empresas'
INSERT INTO empresas (nombre) VALUES
    ('Empresa A'),
    ('Empresa B'),
    ('Empresa C'),
    ('Empresa D'),
    ('Empresa E');

-- Insertar datos en la tabla 'productos' relacionados con las empresas
INSERT INTO productos (nombre, descripcion, precio, cantidad, empresa_id) VALUES
    ('Producto 1', 'Descripción del Producto 1', 10.99, 100, 1),
    ('Producto 2', 'Descripción del Producto 2', 15.49, 75, 1),
    ('Producto 3', 'Descripción del Producto 3', 5.99, 50, 2),
    ('Producto 4', 'Descripción del Producto 4', 8.75, 120, 3),
    ('Producto 5', 'Descripción del Producto 5', 12.99, 90, 4);
