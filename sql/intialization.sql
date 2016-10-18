create database xmStore;

use xmStore;

create table products
(
	productID int primary key,
    productEnglishName varchar(50),
    productChineseName nvarchar(50)    
)


INSERT into products
(
	1, 'haha', '曦明'
)