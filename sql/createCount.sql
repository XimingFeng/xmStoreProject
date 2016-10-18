use xmStore;

-- create account for Baozi
create user 'baozi'@'localhost'
identified by 'ximing5201314';

insert into employee
values(
	1,
	'ximing5201314',
    'baozi'
),
(
	2,
	'ximing5201314',
    'liaoxing'
),
(
	3,
	'ximing5201314',
    'coco'
),
(	
	4,
	'ximing5201314',
    'louzhu'
),
(
	5,
	'ximing5201314',
    'xianxian'
)

;
 
-- create account for LiaoXing
create user 'liaoxing'@'localhost'
identified by 'ximing5201314';
 
-- create account for coco
create user 'coco'@'localhost'
identified by 'ximing5201314';

-- create account for louzhu
create user 'louzhu'@'localhost'
identified by 'ximing5201314';
 
-- create account for xianxian
create user 'xianxian'@'localhost'
identified by 'ximing5201314';
 
select * 
from employee
where password = '1' AND userName = '1'
