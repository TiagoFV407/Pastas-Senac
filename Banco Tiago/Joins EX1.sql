CREATE TABLE TabelaA (
  Nome varchar(50) NULL
)

GO

CREATE TABLE TabelaB (
  Nome varchar(50) NULL 
)

INSERT INTO TabelaA VALUES('Fernanda')
INSERT INTO TabelaA VALUES('Josefa')
INSERT INTO TabelaA VALUES('Luiz')
INSERT INTO TabelaA VALUES('Fernando')

INSERT INTO TabelaB VALUES('Carlos')
INSERT INTO TabelaB VALUES('Manoel')
INSERT INTO TabelaB VALUES('Luiz')
INSERT INTO TabelaB VALUES('Fernando')

-- INNER JOIN: Comando onde vou consultar dados comuns nas tablas
SELECT a.Nome, b.Nome
FROM TabelaA as A
INNER JOIN TabelaB as B
on a.Nome = b.Nome

-- LEFT JOIN
SELECT a.Nome, b.Nome
FROM TabelaA as A
LEFT JOIN TabelaB as B
on a.Nome = b.Nome

--
SELECT a.Nome, b.Nome
FROM TabelaA as A
RIGHT JOIN TabelaB as B
on a.Nome = b.Nome

--
SELECT a.Nome, b.Nome
FROM TabelaA as A
FULL OUTER JOIN TabelaB as B
on a.Nome = b.Nome


SELECT a.Nome, b.Nome
FROM TabelaA as A
RIGHT JOIN TabelaB as B
         on a.Nome = b.Nome
WHERE a.nome is null


SELECT a.Nome, b.Nome
FROM TabelaA as A
RIGHT JOIN TabelaB as B
         on a.Nome = b.Nome
WHERE a.nome is null or b.Nome is null