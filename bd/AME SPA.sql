create database AME;

USE AME;

CREATE TABLE paciente (
    codigo INT PRIMARY KEY,
    primer_apellido VARCHAR(255),
    segundo_apellido VARCHAR(255),
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
    paciente (
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

    SELECT * FROM paciente;
