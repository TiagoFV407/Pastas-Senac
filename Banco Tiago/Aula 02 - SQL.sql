SELECT * FROM alunos; --Seleciona todas as colunas e linhas da tabela
SELECT * FROM cursos;
SELECT * FROM matriculas;

SELECT Nome_Aluno, Email FROM alunos; --Seleciona somente as colunas desejadas da tabela

SELECT 
	Nome_Aluno AS Estudante, -- O AS serve para mudar o nome da coluna na hora da demonstração
	Email AS Email_Aluno
FROM
	alunos;

SELECT TOP 2 * FROM alunos; --SELECIONA O NUMERO LIMITADO DE LINHAS

SELECT * FROM alunos
ORDER BY Nome_Aluno ASC; -- ORDENAR A TABLE EM ORDEM CRESCENTE

SELECT * FROM alunos
ORDER BY Nome_Aluno DESC;-- ORDENAR A TABLE EM ORDEM DECRESCENTE

SELECT * FROM cursos
WHERE Preco_Cursos > 220;--REALIZA O FILTRO A PARTIR DE UM OPERADOR

SELECT * FROM cursos
WHERE Preco_Cursos < 220;--REALIZA O FILTRO A PARTIR DE UM OPERADOR

--Incuindo dados na tabela
INSERT INTO	cursos (ID_Cursos,Nome_Cursos,Preco_Cursos)
VALUES 
	(4, 'Maquiagem', 500.00),
	(5, 'PHP', 550.00),
	(6, 'HTML', 600.00),
	(7, 'CSS', 650.00),
	(8, 'Java Script', 700.00);

CREATE TABLE Salas(
	ID_Sala INT,
	Cadeiras INT,
	Computadores INT,
	Areas VARCHAR(30)
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

SELECT * FROM Salas
WHERE Areas = 'Informatica'; --Filtrar a tabela por nome


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
SET Estado_Civil = 'Casado'
WHERE ID_Aluno = 4;

UPDATE alunos
SET Sexo = 'Masculino'
WHERE ID_Aluno = 4;

--Filtro utilizando duas colunas (AND)
SELECT * FROM alunos
WHERE Estado_Civil = 'Casado' AND Sexo = 'Masculino'; 

INSERT INTO alunos(ID_Aluno,Nome_Aluno,Email,Estado_Civil,Sexo)
VALUES
	(5,'Lucas','lukas@gmail.com','Casado','Masculino'),
	(6,'Beatriz','beatriz@gmail.com','Solteiro','Feminino'),
	(7,'Miguel','miguel@gmail.com','Solteiro','Masculino'),
	(8,'Juliana','juliana@gmail.com','Casado','Feminino'),
	(9,'Tiago','tiago@gmail.com','Casado','Masculino'),
	(10,'Rodrigo','rodrigo@gmail.com','Casado','Masculino');

--Filtro utilizando uma ou a outra condição (OR)
SELECT * FROM alunos
WHERE Estado_Civil = 'Casado' OR Sexo = 'Masculino';


--Exercicios 1

--a
SELECT * FROM alunos;

--b
SELECT Nome_Aluno,Estado_Civil,Sexo FROM alunos;

--c
SELECT TOP 5 * FROM alunos;

--Exercicios 2

--a
SELECT * FROM cursos
ORDER BY Preco_Cursos ASC;

--b
ALTER TABLE alunos
ADD
	Sobrenome varchar(30);

--c
UPDATE alunos
	SET Sobrenome ='Batista'
	WHERE ID_Aluno = 1;

UPDATE alunos
	SET Sobrenome ='Rodrigues'
	WHERE ID_Aluno = 2;

UPDATE alunos
	SET Sobrenome ='Perez'
	WHERE ID_Aluno = 3;

UPDATE alunos
	SET Sobrenome ='Matos'
	WHERE ID_Aluno = 4;

UPDATE alunos
	SET Sobrenome ='Oliveira'
	WHERE ID_Aluno = 5

UPDATE alunos
	SET Sobrenome ='Silva'
	WHERE ID_Aluno = 6;

UPDATE alunos
	SET Sobrenome ='Lopes'
	WHERE ID_Aluno = 7;

UPDATE alunos
	SET Sobrenome ='Valdez'
	WHERE ID_Aluno = 8;

UPDATE alunos
	SET Sobrenome ='Barbosa'
	WHERE ID_Aluno = 9;

UPDATE alunos
	SET Sobrenome ='Crispin'
	WHERE ID_Aluno = 10;

--d
SELECT * FROM alunos
ORDER BY Nome_Aluno ASC, Sobrenome ASC;