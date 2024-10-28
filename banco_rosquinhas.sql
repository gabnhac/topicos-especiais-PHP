CREATE DATABASE IF NOT EXISTS Rosquinhas;

use Rosquinhas;

CREATE TABLE IF NOT EXISTS Rosquinhas (
    id_rosquinha INT AUTO_INCREMENT,
    sabor VARCHAR(20) NOT NULL,
    marca VARCHAR(20) NOT NULL,
    valor_unitario DECIMAL(5, 2) NOT NULL,
    PRIMARY KEY (id_rosquinha)
);

INSERT INTO Rosquinhas (sabor, marca, valor_unitario) VALUES
('Chocolate', 'Mabel', 6.80),
('Morango', 'We donut', 6.80),
('Maracujá', 'Mabel', 6.80),
('Limão', 'We donut', 6.80);
