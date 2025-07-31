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

-- DELETAR AS TABELAS
DROP TABLE alunos;
DROP TABLE cursos;
DROP TABLE matriculas;

DROP DATABASE SENAC;

