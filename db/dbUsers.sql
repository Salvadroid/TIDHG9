-- Create a new database called 'dbUsers'
-- Connect to the 'master' database to run this snippet
USE master
GO
-- Create the new database if it does not exist already
IF NOT EXISTS (
    SELECT name
        FROM sys.databases
        WHERE name = N'dbUsers'
)
CREATE DATABASE dbUsers
GO;
-- Create a new table called 'usuarios' in schema 'SchemaName'
-- Drop the table if it already exists
IF OBJECT_ID('SchemaName.usuarios', 'U') IS NOT NULL
DROP TABLE SchemaName.usuarios
GO
-- Create the table in the specified schema
CREATE TABLE SchemaName.usuarios
(
    usuariosId INT NOT NULL PRIMARY KEY, -- primary key column
    userName [NVARCHAR](45) NOT NULL,
    passwordHash [NVARCHAR](200) NOT NULL,
    email [NVARCHAR](45) NOT NULL,
    imagen [NVARCHAR] (200) NOT NULL
    -- specify more columns here
);
GO