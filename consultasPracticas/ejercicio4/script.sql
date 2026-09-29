CREATE DATABASE IF NOT EXISTS tienda;
USE tienda;

DROP TABLE IF EXISTS ventas;
DROP TABLE IF EXISTS productos;
DROP TABLE IF EXISTS categorias;
DROP TABLE IF EXISTS usuarios;

CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS categorias (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);

CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL DEFAULT 0,
    categoria_id INT,
    FOREIGN KEY (categoria_id) REFERENCES categorias(id)
);

CREATE TABLE IF NOT EXISTS ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto_id INT NOT NULL,
    vendedor_id INT NOT NULL,
    cantidad INT NOT NULL,
    precio_unitario DECIMAL(10,2) NOT NULL,
    fecha DATE NOT NULL,
    FOREIGN KEY (producto_id) REFERENCES productos(id),
    FOREIGN KEY (vendedor_id) REFERENCES usuarios(id)
);

INSERT INTO usuarios (nombre) VALUES
('Ana'), ('Bruno'), ('Carla'), ('Diego'), ('Elena');

INSERT INTO categorias (nombre) VALUES
('Tecnologia'), ('Accesorios'), ('Perifericos');

INSERT INTO productos (nombre, precio, stock, categoria_id) VALUES
('Laptop', 800.00, 3, 1),
('Mouse', 15.00, 20, 3),
('Teclado', 30.00, 8, 3),
('Monitor', 250.00, 0, 1),
('Audifonos', 45.00, 2, 2),
('Webcam', 60.00, 15, 1);

INSERT INTO ventas (producto_id, vendedor_id, cantidad, precio_unitario, fecha) VALUES
(1, 1, 2, 800.00, '2026-01-10'),
(2, 1, 5, 15.00, '2026-01-12'),
(1, 2, 1, 800.00, '2026-02-01'),
(3, 2, 3, 30.00, '2026-02-05'),
(2, 3, 10, 15.00, '2026-02-10'),
(4, 3, 1, 250.00, '2026-03-01'),
(5, 1, 2, 45.00, '2026-03-05'),
(6, 4, 4, 60.00, '2026-03-10'),
(1, 4, 1, 800.00, '2026-03-15'),
(3, 5, 2, 30.00, '2026-04-01'),
(2, 5, 8, 15.00, '2026-04-05'),
(6, 2, 3, 60.00, '2026-04-10');
