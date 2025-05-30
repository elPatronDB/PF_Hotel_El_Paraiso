CREATE DATABASE IF NOT EXISTS hotel_el_paraiso;
USE hotel_el_paraiso;

CREATE TABLE empleado (
    id_empleado INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    usuario VARCHAR(50) UNIQUE,
    contrasena VARCHAR(255)
);

CREATE TABLE huesped (
    id_huesped INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    edad INT,
    telefono VARCHAR(20),
    correo VARCHAR(100)
);

CREATE TABLE habitacion (
    id_habitacion INT AUTO_INCREMENT PRIMARY KEY,
    numero INT UNIQUE,
    estado ENUM('Vacía', 'Ocupada') DEFAULT 'Vacía',
    id_huesped INT,
    FOREIGN KEY (id_huesped) REFERENCES huesped(id_huesped)
);

CREATE TABLE reserva (
    id_reserva INT AUTO_INCREMENT PRIMARY KEY,
    id_huesped INT,
    id_habitacion INT,
    fecha_inicio DATE,
    fecha_fin DATE,
    costo_total DECIMAL(10,2),
    FOREIGN KEY (id_huesped) REFERENCES huesped(id_huesped),
    FOREIGN KEY (id_habitacion) REFERENCES habitacion(id_habitacion)
);

INSERT INTO empleado (nombre, usuario, contrasena) VALUES ('Admin', 'admin',  ('admin123'));
INSERT INTO habitacion (numero, estado) VALUES (1, 'Vacía'), (2, 'Vacía'), (3, 'Vacía'), (4, 'Vacía'), (5, 'Vacía'), (6, 'Vacía'), (7, 'Vacía'), (8, 'Vacía');