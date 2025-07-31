-- Crie o banco de dados
create database senac;

--Criando as tabelas
--Criando uma tabela 'alunos'
CREATE TABLE alunos(
  ID_Alunos INT,
  Nome_Aluno VARCHAR(100),
  Email VARCHAR(100)
);

--Criando uma tabela 'matriculas'
CREATE TABLE matriculas(
  ID_Matricula INT,
  ID_Aluno INT,
  ID_Curso INT,
  Data_Cadastro DATE
);
  --Criando uma tabela 'cursos'
CREATE TABLE cursos(
	ID_Curso INT,
	Nome_Curso VARCHAR(100),
	Preco_Curso DECIMAL(10,2)
  );

  select * from alunos;
  select * from cursos;
  select * from matriculas;

  INSERT INTO alunos(ID_Alunos,Nome_Aluno, Email)
  VALUES
  (1, 'Ana' , 'ana123@gmail.com'  ),
  (2, 'Bruno' , 'bruno_vargas@outlook.com'  ),
  (3,  'Carla' , 'carlinha1999@gmail.com'   ),
  (4,  'Diego' , 'diicastroneves@gmail.com' );

    INSERT INTO cursos(ID_Curso,Nome_Curso, Preco_Curso)
  VALUES
  (1, 'Excel' , 100),
  (2, 'VBA', 200 ),
  (3,  'Power BI',  150);


    INSERT INTO matriculas(ID_Matricula,ID_Aluno,ID_Curso,Data_Cadastro)
  VALUES
  (1, 1, 1, '2021/03/11'),
  (2, 1, 2, '2021/06/21'),
  (3, 2, 3, '2021/01/08'),
  (4, 3, 1, '2021/04/03'),
  (5, 4, 1, '2021/05/10'),
  (6, 4, 3, '2021/05/10');


-- Atualizando o valor do curso de Excel
UPDATE cursos -- Seleciona tabela
SET Preco_Curso = 300 -- Seleciona coluna
WHERE ID_Curso = 1; --Indica linha


-- Excluindo a linha 6 da tabela de matriculas.

DELETE FROM matriculas
WHERE ID_Matricula = 6;