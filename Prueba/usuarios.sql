DROP TABLE IF EXISTS usuarios;

CREATE TABLE usuarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
	nombre VARCHAR(100) NOT NULL,
	rut_chileno VARCHAR(12) NOT NULL,
	correo VARCHAR(100) NOT NULL,
	fecha_nacimiento DATE NOT NULL,
	empleo VARCHAR(100),
	estado VARCHAR(50)
);

-- Insertar 25 usuarios
INSERT INTO usuarios (nombre, rut_chileno, correo, fecha_nacimiento, empleo, estado) VALUES
('Juan Pérez', '11111111-1', 'juan.perez@example.com', '1985-01-15', 'Ingeniero', 'Activo'),
('María González', '22222222-2', 'maria.gonzalez@example.com', '1990-05-20', 'Doctora', 'Activo'),
('Pedro Sánchez', '33333333-3', 'pedro.sanchez@example.com', '1978-03-10', 'Profesor', 'Inactivo'),
('Ana López', '44444444-4', 'ana.lopez@example.com', '1983-11-25', 'Abogada', 'Activo'),
('Luis Martínez', '55555555-5', 'luis.martinez@example.com', '1992-07-30', 'Diseñador', 'Inactivo'),
('Carla Romero', '66666666-6', 'carla.romero@example.com', '1980-02-15', 'Arquitecta', 'Activo'),
('Jorge Silva', '77777777-7', 'jorge.silva@example.com', '1987-09-05', 'Contador', 'Inactivo'),
('Laura Castro', '88888888-8', 'laura.castro@example.com', '1995-06-12', 'Enfermera', 'Activo'),
('Sergio Rojas', '99999999-9', 'sergio.rojas@example.com', '1975-12-01', 'Mecánico', 'Inactivo'),
('Beatriz Flores', '10101010-0', 'beatriz.flores@example.com', '1989-10-10', 'Psicóloga', 'Activo'),
('Alberto Vargas', '12121212-1', 'alberto.vargas@example.com', '1982-04-22', 'Chef', 'Inactivo'),
('Natalia Torres', '13131313-2', 'natalia.torres@example.com', '1991-08-14', 'Administrativa', 'Activo'),
('Ricardo Mendoza', '14141414-3', 'ricardo.mendoza@example.com', '1984-03-25', 'Desarrollador', 'Inactivo'),
('Carmen Soto', '15151515-4', 'carmen.soto@example.com', '1979-07-18', 'Periodista', 'Activo'),
('Andrés Castillo', '16161616-5', 'andres.castillo@example.com', '1993-09-29', 'Analista', 'Inactivo'),
('Marta Fuentes', '17171717-6', 'marta.fuentes@example.com', '1986-12-13', 'Investigadora', 'Activo'),
('Gustavo Peña', '18181818-7', 'gustavo.pena@example.com', '1977-05-04', 'Electricista', 'Inactivo'),
('Rosa Durán', '19191919-8', 'rosa.duran@example.com', '1981-11-02', 'Marketing', 'Activo'),
('Julio Reyes', '20202020-9', 'julio.reyes@example.com', '1994-07-21', 'Ingeniero', 'Inactivo'),
('Patricia Herrera', '21212121-0', 'patricia.herrera@example.com', '1988-01-09', 'Diseñadora', 'Activo'),
('Felipe Ortega', '23232323-1', 'felipe.ortega@example.com', '1990-04-18', 'Doctor', 'Inactivo'),
('Daniela Navarro', '24242424-2', 'daniela.navarro@example.com', '1983-08-26', 'Abogada', 'Activo'),
('Manuel Rivera', '25252525-3', 'manuel.rivera@example.com', '1985-03-06', 'Profesor', 'Inactivo'),
('Liliana Gutiérrez', '26262626-4', 'liliana.gutierrez@example.com', '1976-09-17', 'Contadora', 'Activo'),
('Eduardo Morales', '27272727-5', 'eduardo.morales@example.com', '1992-06-25', 'Mecánico', 'Inactivo');
