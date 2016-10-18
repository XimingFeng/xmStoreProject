use xmStore;

select * from product;

delimiter //
create procedure insert_product
	(brandID int,
    productEnglishName varchar(100),
    productChineseName nvarchar(100),
    NPCPrice int,
    USAPrice int,
    URL varchar(1000)
    )
	begin
	insert into product
    values(brandID, productEnglishName, 
    productChineseName, NPCPrice, USAPrice);
	end //
    

