/*
 *
    silver sql script
============================

*/

-- here settings : timezone and time parameters and audit parameters to database




CREATE database IF NOT EXISTS silver
DEFAULT CHARACTER SET latin1;

use silver;

CREATE USER silver identified by 'qwerTy';
grant all on silver.* to 'silver'@'localhost' identified by 'qwerTy';
flush privileges;



create table budget(
    id INT UNSIGNED zerofill not null auto_increment
    ,amount decimal(28,7) not null    
    ,description varchar(300) unique
    ,periodFrom date not null
    ,periodTo date not null
    ,type varchar(50) not null
    ,status char(1) not null
    ,creationTime timestamp DEFAULT CURRENT_TIMESTAMP 
    ,creationUser INT UNSIGNED not null
    ,PRIMARY KEY (id)    
    );
    
    -- Test
insert into  budget (amount,description,periodFrom,periodTo,type,status,creationUser) values
    (100123123123123.12345,'100 billones','2014-01-01','2014-12-31','Presupuesto',0,'0000000001') ;


create table partidas();
create table rubros();
create table providers();


/*

create trigger budget_deny_updates
before update on budget
for each row
begin
    if (old.amount IS NOT NULL) then
        SIGNAL msgCode 'budget already set'
    end if ;
end;
//



delimiter //
create trigger budget_deny_updates
before update on budget
for each row
        SIGNAL SQLSTATE '45000'
            SET MESSAGE_TEXT = "budget already set"
end;
//
*/



