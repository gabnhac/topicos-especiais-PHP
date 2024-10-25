CREATE DATABASE IF NOT EXISTS Rosquinhas;

use Rosquinhas;

CREATE TABLE IF NOT EXISTS Rosquinhas (
    id_rosquinha INT AUTO_INCREMENT PRIMARY KEY,
    quantidade INT NOT NULL,
    sabor VARCHAR(20) NOT NULL,
    marca VARCHAR(20) NOT NULL,
    valor_unitario DECIMAL(5, 2) NOT NULL,
);

INSERT INTO Rosquinhas (quantidade, sabor, marca, valor_unitario) VALUES
(10, 'Chocolate', 'Mabel', 6.80),
(14, 'Morango', 'We donut', 6.80),
(12, 'Maracujá', 'Mabel', 6.80),
(11, 'Limão', 'We donut', 6.80),
