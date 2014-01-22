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


create table cat_partidas(
    id varchar(50) NOT NULL
    ,description varchar(150) NOT NULL
    ,status char(1) NOT NULL
    ,PRIMARY KEY (id)
    );
    

create table cat_rubros(
    id varchar(50) NOT NULL
    ,description varchar(150) NOT NULL
    ,status char(1) NOT NULL
    ,PRIMARY KEY (id)
    );
    
    
create table rubros_vs_partidas(
    idPartida  varchar(50) NOT NULL
    ,idRubro  varchar(50) NOT NULL
    ,PRIMARY KEY (idPartida,idRubro)
    ,constraint foreign key(idPartida) references cat_partidas(id) on delete RESTRICT
    ,constraint foreign key(idRubro) references cat_rubros(id) on delete RESTRICT
    );
    

create table budget_vs_partidas(
    id INT UNSIGNED zerofill NOT NULL auto_increment
    ,idBudget INT UNSIGNED NOT NULL
    ,idPartida  VARCHAR(50) NOT NULL
    ,amount decimal(28,7) not null    
    ,periodFrom DATE NOT NULL 
    ,periodTo DATE NOT NULL
    ,status char(1) NOT NULL
    ,creationTime timestamp DEFAULT CURRENT_TIMESTAMP 
    ,creationUser INT UNSIGNED NOT NULL
    ,PRIMARY KEY (id)    
    ,constraint foreign key(idBudget) references budget(id) on delete RESTRICT
    ,constraint foreign key(idPartida) references cat_partidas(id) on delete RESTRICT
    );
    


create table budget_vs_rubros(
    id INT UNSIGNED zerofill NOT NULL auto_increment
    ,idBudget INT UNSIGNED NOT NULL
    ,idRubro  VARCHAR(50) NOT NULL
    ,amount decimal(28,7) not null    
    ,periodFrom DATE NOT NULL 
    ,periodTo DATE NOT NULL
    ,status char(1) NOT NULL
    ,creationTime timestamp DEFAULT CURRENT_TIMESTAMP 
    ,creationUser INT UNSIGNED NOT NULL
    ,PRIMARY KEY (id)    
    ,constraint foreign key(idBudget) references budget(id) on delete RESTRICT
    ,constraint foreign key(idRubro) references cat_rubros(id) on delete RESTRICT
    );
    

create table providers(
    id INT UNSIGNED zerofill NOT NULL auto_increment
    ,name VARCHAR(100) NOT NULL
    ,description  VARCHAR(100) NOT NULL
    ,RFC  VARCHAR(50) NOT NULL
    ,PRIMARY KEY (id)
    );


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



