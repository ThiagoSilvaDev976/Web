/*Usando "SELECT"*/

SELECT * FROM 'alunos' WHERE 1
/* select [nome da coluna] from [nome da tabela] where [nome da coluna] = [valor da chave]*/

SELECT * FROM 'alunos' WHERE nome LIKE "A%"
/*Retorna todos os alunos que começam com a (minusc. ou maisc.)