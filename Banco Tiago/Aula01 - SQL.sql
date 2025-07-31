CREATE DATABASE SENAC;

CREATE TABLE alunos(
	ID_Aluno INT,
	Nome_Aluno VARCHAR(100),
	Email VARCHAR(100)
);
CREATE TABLE cursos(
	ID_Cursos INT,
	Nome_Cursos VARCHAR(100),
	Preco_Cursos DECIMAL(10,2)
);

CREATE TABLE matriculas(
	ID_Matriculas INT,
	ID_Aluno INT,
	ID_Cursos INT,
	Data_Cadastro DATE
);

SELECT * FROM alunos;
SELECT * FROM cursos;
SELECT * FROM matriculas;

INSERT INTO alunos(ID_Aluno, Nome_Aluno,Email)
VALUES 
	(1, 'Ana','ana@gmail.com' ),
	(2, 'Bruno','bruno@gmail.com' ),
	(3, 'Carla','carla@gmail.com' ),
	(4, 'Diego','diego@gmail.com' );

SELECT * FROM alunos;

INSERT INTO cursos(ID_Cursos, Nome_Cursos,Preco_Cursos)
VALUES 
	(1, 'Excel', 100 ),
	(2, 'VBA', 200 ),
	(3, 'Power BI', 150 );

SELECT * FROM cursos;

INSERT INTO matriculas(ID_Matriculas, ID_Aluno,ID_Cursos,Data_Cadastro)
VALUES 
	(1,1,1, '2021/03/11' ),
	(2,1,2, '2021/03/11' ),
	(3,2,3, '2021/03/11' ),
	(4,3,1, '2021/03/11' ),
	(5,4,1, '2021/03/11' ),
	(6,4,3, '2021/03/11' );

SELECT * FROM matriculas;

UPDATE cursos
	SET Preco_Cursos = 300
	WHERE ID_Cursos = 1

SELECT * FROM cursos;

-- DELETE DE LINHA
DELETE FROM matriculas
WHERE ID_Matriculas = 6;

SELECT * FROM  alunos;  --Seleciona todas as colunas  e linhas da tabela

SELECT Nome_Aluno, Email FROM alunos; --Seleciona somente as colunas  desejadas da tabela 

SELECT  
	Nome_Aluno AS Estudante, -- O AS serve para mudar o nome da coluna na hora da demonstração
	Email AS Email_Aluno
FROM 
	alunos;

SELECT TOP 2 * FROM alunos; --SELECIONA O NÚMERO LIMITADO DE LINHAS

SELECT * FROM alunos
ORDER BY Nome_Aluno ASC; -- ORDENAR A TABLE EM ORDEM CRESCENTE

SELECT * FROM alunos
ORDER BY Nome_Aluno DESC;-- ORDNAR A TABLE EM ORDEM DECRESCENTE

SELECT * FROM cursos
WHERE Preco_Cursos < 220; --REALIZA O FILTRO  DA COLUNA  NÚMERICA

SELECT * FROM cursos
WHERE Preco_Cursos > 220;

INSERT INTO cursos (ID_Cursos,Nome_Cursos,Preco_Cursos)
VALUES
	(4, 'Maquiagem', 500.00),
	(5, 'PHP', 550.00),
	(6, 'HTML', 600.00),
	(7,  'CSS', 650.00),
	(8,  'Java Script', 700.00);

CREATE TABLE Salas(ID_Sala INT,
	Cadeiras INT,
	Computadores INT,
	Areas VARCHAR(30),
	);

INSERT INTO Salas(ID_Sala,Cadeiras,Computadores,Areas)
VALUES 
	(101,12,3,'Farmacia'),
	(102,23,24,'Informatica'),
	(103,50,1,'Maquiagem'),
	(104,27,2,'Segurança do Trabalho'),
	(105,20,21,'Informatica'),
	(106,18,20,'Informatica'),
	(107,23,1,'Maquiagem'),
    (108,12,3,'Enfermagem');

SELECT * FROM Salas;

SELECT *  FROM Salas
WHERE Areas = 'Informatica'; -- Filtrar a  tabela por nome

SELECT * FROM matriculas
WHERE Data_Cadastro = '2021-03-11' -- Filtrar a tabela por datas

UPDATE matriculas
SET Data_Cadastro = '2025-04-11' 
WHERE ID_Matriculas = 2;

UPDATE matriculas
SET Data_Cadastro = '2025-02-20' 
WHERE ID_Matriculas = 3;

UPDATE matriculas
SET Data_Cadastro = '2025-01-15' 
WHERE ID_Matriculas = 4;

UPDATE matriculas
SET Data_Cadastro = '2025-03-01' 
WHERE ID_Matriculas = 5;

UPDATE matriculas
SET Data_Cadastro = '2025-02-21' 
WHERE ID_Matriculas = 6;

ALTER TABLE alunos
ADD
	Estado_Civil varchar(10),
	Sexo varchar(10);

SELECT * FROM alunos;

UPDATE alunos
SET Estado_Civil = 'Solteiro'
WHERE ID_Aluno = 6;

UPDATE alunos
SET Sexo = 'feminino'
WHERE ID_Aluno = 1;

UPDATE alunos
SET Estado_Civil = 'Casado'
WHERE ID_Aluno = 4;

UPDATE alunos
SET Sexo = 'Masculino'
WHERE ID_Aluno = 2;

SELECT * FROM alunos
WHERE Estado_Civil = 'Solteiro' AND Sexo = 'Feminino';

INSERT INTO  alunos (ID_Aluno, Nome_Aluno, Email,Estado_Civil,Sexo)
VALUES
	(5, 'Lucas', 'lukas@gmail.com','Casado','Masculino'),
	(6, 'Beatriz', 'beatriz@gmail.com','Solteiro','Feminino'),
	(7, 'Miguel', 'miguel@gmail.com','Solteiro','Masculino'),
	(8, 'Juliana', 'juliana@gmail.com','Casado','Feminino'),
	(9, 'Tiago', 'tiago@gmail.com','Casado','Masculino'),
	(10, 'Rodrigo', 'rodrigo@gmail.com','Casado','Masculino');



 SELECT	* FROM alunos
 WHERE Estado_Civil = 'Casado' OR Sexo = 'Masculino'


 -- Exercicio 01

 SELECT * FROM alunos

SELECT Nome_Aluno, Estado_Civil, Sexo FROM alunos;

SELECT 
	Nome_Aluno AS Aluno,
	Estado_Civil AS Estado_Familiar,
	Sexo AS Genero
FROM 
	alunos;

SELECT TOP 5 * FROM matriculas;


--Exercicio 2

SELECT * FROM cursos
ORDER BY Preco_Cursos ASC;

ALTER TABLE alunos
ADD
	Sobremesa varchar(10);

UPDATE
	(1,'Fernandes'),
	(2,'Silva'),
	(3,'Oliveira'),
	(4,'Camargo'),
	(5,'Teixeira'),
	(6,'Castro'),
	(7,'Neto'),
	(8,'Moreira'),
	(9,''),
	(10,'');







-- DELETAR AS TABELAS
DROP TABLE alunos;
DROP TABLE cursos;
DROP TABLE matriculas;

DROP DATABASE SENAC;

DROP DATABASE exercicio1
