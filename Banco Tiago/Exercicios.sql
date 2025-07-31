-- 24/04/2025

-- Exerc�cios Pr�ticos

-- Selecionar todos os Clientes ( Customers )
SELECT * FROM Customers

SELECT CompanyName, ContactName, ContactTitle FROM Customers

SELECT 
	CompanyName As Empresa, 
	ContactName As Contato, 
	ContactTitle As Cargo 
FROM Customers

-- Selecionar nome e sobrenome dos funcion�rios
Select FirstName, LastName From Employees

-- Selecionar todos os produtos
Select * From Products

-- Selecionar o nome e o pre�o dos produtos
Select ProductName As Produto, UnitPrice As Pre�o From Products

-- Selecionar o nome e o pre�o dos produtos e um desconto de 20% no pre�o dos produtos


-- Calculando o pre�o de 12 produtos ( cada produto da lista )
Select 
  ProductName As Produto, 
  UnitPrice As Pre�o, 
  UnitPrice * 12 As Fardo12 
From Products

-- Aumentando o Estoque em 50 unidades para cada produto
           

SELECT concat(ProductName,' tem ',UnitsInStock,' unidade de estoque ') From Products

SELECT concat(ProductName,' vale ',UnitsInStock*UnitPrice,' reais,com base no seu estoque ') From Products


SELECT TitleOfCourtesy FROM Employees
SELECT distinct(TitleOfCourtesy) FROM Employees
SELECT distinct (OrderDate) FROM Orders


-- Usando WHERE para filtrar
SELECT * FROM territories
Select * From territories Where Regionid = 3 

SELECT 
	CompanyName As Empresa, 
	ContactName As Contato, 
	Country As Pa�s 
FROM Customers
Where Country <> 'Brazil' 
Order by Pa�s



-- Exercicio 08/05/2025  

SELECT *
FROM Customers
WHERE Country = 'france' or ContactTitle = 'Sales Representative'
ORDER by Country


SELECT * 
From Products
WHERE  CategoryID = 1 and ProductName LIKE 'C%'
ORDER BY ProductName 



SELECT TerritoryDescription
 FROM territories
 WHERE TerritoryID > 2 and TerritoryDescription LIKE 'A%'

SELECT *
From Products









FROM Shippers
WHERE ShipperID in (1,3)


SELECT RegionDescription
FROM Region
WHERE NOT RegionID = 3