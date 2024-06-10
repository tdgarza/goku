-- Tabla de Personajes
CREATE TABLE Personajes (
    PersonajeID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(100) NOT NULL,
    Alias VARCHAR(50) NOT NULL,
    FechaDeCreacion DATE,
    Descripcion TEXT
);

-- Tabla de Comics
CREATE TABLE Comics (
    ComicID INT AUTO_INCREMENT PRIMARY KEY,
    Titulo VARCHAR(100) NOT NULL,
    AnioPublicacion YEAR,
    Descripcion TEXT
);

-- Tabla de Superpoderes
CREATE TABLE Superpoderes (
    SuperpoderID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Descripcion TEXT
);

-- Tabla de relación entre Personajes y Comics
CREATE TABLE PersonajeComic (
    PersonajeID INT,
    ComicID INT,
    FOREIGN KEY (PersonajeID) REFERENCES Personajes(PersonajeID),
    FOREIGN KEY (ComicID) REFERENCES Comics(ComicID)
);

-- Tabla de relación entre Personajes y Superpoderes
CREATE TABLE PersonajeSuperpoder (
    PersonajeID INT,
    SuperpoderID INT,
    FOREIGN KEY (PersonajeID) REFERENCES Personajes(PersonajeID),
    FOREIGN KEY (SuperpoderID) REFERENCES Superpoderes(SuperpoderID)
);


INSERT INTO Personajes (Nombre, Alias, FechaDeCreacion, Descripcion) VALUES
    ('Peter Parker', 'Spider-Man', '1962-08-01', 'El superhéroe que teje telarañas.'),
    ('Tony Stark', 'Iron Man', '1963-03-01', 'Genio, multimillonario, playboy y filántropo.'),
    ('Steve Rogers', 'Captain America', '1941-03-01', 'El supersoldado con el escudo indestructible.'),
    ('Natasha Romanoff', 'Black Widow', '1964-04-01', 'Espía y luchadora experta.'),
    ('Bruce Banner', 'Hulk', '1962-05-01', 'Se convierte en un gigante verde cuando se enfurece.');


INSERT INTO Comics (Titulo, AnioPublicacion, Descripcion) VALUES
    ('The Amazing Spider-Man #1', 1963, 'El debut de Spider-Man.'),
    ('Tales of Suspense #39', 1963, 'El nacimiento de Iron Man.'),
    ('Captain America Comics #1', 1941, 'La primera aparición del Capitán América.'),
    ('Tales of Suspense #52', 1964, 'La presentación de Black Widow.'),
    ('The Incredible Hulk #1', 1962, 'El primer cómic de Hulk.');


INSERT INTO Superpoderes (Nombre, Descripcion) VALUES
    ('Trepar paredes', 'Spider-Man puede adherirse a superficies verticales y techos.'),
    ('Traje de Iron Man', 'Tony Stark utiliza una armadura con numerosas habilidades.'),
    ('Suero del supersoldado', 'Steve Rogers obtiene fuerza y agilidad sobrehumanas.'),
    ('Espionaje y combate', 'Black Widow es experta en espionaje y combate mano a mano.'),
    ('Transformación', 'Bruce Banner se convierte en Hulk con una gran fuerza.');


-- Sustituye los valores de PersonajeID y SuperpoderID con los IDs reales de tus personajes y superpoderes
INSERT INTO PersonajeSuperpoder (PersonajeID, SuperpoderID)
VALUES
    (1, 1), -- Spider-Man tiene el superpoder de "Trepar paredes"
    (2, 2), -- Iron Man tiene el superpoder de "Traje de Iron Man"
    (3, 3), -- Capitán América tiene el superpoder del "Suero del supersoldado"
    (4, 4), -- Black Widow tiene el superpoder de "Espionaje y combate"
    (5, 5); -- Hulk tiene el superpoder de "Transformación"
-- Agrega más relaciones si es necesario

-- Sustituye los valores de PersonajeID y ComicID con los IDs reales de tus personajes y cómics
INSERT INTO PersonajeComic (PersonajeID, ComicID)
VALUES
    (1, 1), -- Spider-Man aparece en el Comic 1
    (2, 2), -- Iron Man aparece en el Comic 2
    (3, 3), -- Capitán América aparece en el Comic 3
    (4, 4), -- Black Widow aparece en el Comic 4
    (5, 5); -- Hulk aparece en el Comic 5
-- Agrega más relaciones si es necesario
