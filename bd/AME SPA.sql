create database AME;

USE AME;

CREATE TABLE receta (
    codigo INT AUTO_INCREMENT PRIMARY KEY,
    nombres VARCHAR(255),
    edad INT,
    temperatura FLOAT,
    tratamiento VARCHAR(255),
    TA VARCHAR(255),
    peso FLOAT,
    FC VARCHAR(255),
    talla FLOAT,
    FR VARCHAR(255),
    circun_abdom FLOAT,
    ID VARCHAR(255),
    alergias VARCHAR(255),
    indicaciones_generales VARCHAR(255),
    proxima_cita DATE
);

INSERT INTO
    receta (
        codigo,
        primer_apellido,
        segundo_apellido,
        nombres,
        edad,
        temperatura,
        tratamiento,
        TA,
        peso,
        FC,
        talla,
        FR,
        circun_abdom,
        ID,
        alergias,
        indicaciones_generales,
        proxima_cita
    )
VALUES
    (
        1,
        'Rodriguez',
        'Gonzalez',
        'Juan',
        32,
        36.5,
        'Antibióticos',
        '120/80',
        78.5,
        '80',
        1.75,
        '20',
        95,
        'Grupo sanguíneo A+',
        'Ninguna',
        'Ninguna',
        '2022-12-01'
    );
VALUES
    (
        'Juan',
        25,
        36.5,
        '120/80',
        75,
        80,
        1.8,
        20,
        90,
        'Grupo sanguíneo A-',
        'ninguna',
        'ninguna',
        '2022-05-01'
    );

SELECT
    *
FROM
    paciente;

CREATE TABLE agendar_cita (
    nombre VARCHAR (40) NOT NULL,
    fecha VARCHAR (40) NOT NULL,
    horario VARCHAR (40) NOT NULL,
    numero_telefono VARCHAR(20)
);
#https://www.notion.so/product/ai?wr=808911191f7b9168&utm_source=notionClient&utm_medium=copyButton&utm_campaign=ai-beta&utm_content=share