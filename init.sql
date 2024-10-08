CREATE TABLE fromages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prix DECIMAL(10, 2) NOT NULL
);

INSERT INTO fromages (nom, prix) VALUES
('Camembert', 4.50),
('Brie', 5.20),
('Roquefort', 6.80),
('Comté', 8.90);
