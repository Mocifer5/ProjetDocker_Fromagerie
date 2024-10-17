CREATE USER IF NOT EXISTS 'fromage_user'@'%' IDENTIFIED BY 'fromage_password';
CREATE DATABASE IF NOT EXISTS fromage_db;
GRANT ALL PRIVILEGES ON fromage_db.* TO 'fromage_user'@'%';
FLUSH PRIVILEGES;

USE fromage_db;

CREATE TABLE IF NOT EXISTS fromages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL
);

INSERT INTO fromages (nom, prix) VALUES
('Camembert', 4.50),
('Brie', 5.20),
('Roquefort', 6.80),
('Comté', 8.90);
