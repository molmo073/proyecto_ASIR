USE facturas;

CREATE TABLE IF NOT EXISTS facturas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(255),
    direccion VARCHAR(255),
    correo VARCHAR(255),
    producto VARCHAR(255),
    cantidad INT,
    precio DECIMAL(10,2)
);
