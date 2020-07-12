create table employee(emp_no varchar(5),
	name varchar(20),
	dept_id varchar(10),
	emp_grade varchar(2),
	contact_no varchar(15),
	manager_id varchar(10));
create table department(dept_id	varchar(5),dept_desc varchar(20));
insert into employee values(101,'sonia',201,'A',9213912345,301);
insert into employee values(102,'john',202,'B',9213912543,302);
insert into employee values(103,'rashmi',203,'C',9213912567,303);
insert into employee values(104,'graddy',204,'A',9213975747,304);
insert into employee values(105,'henry',205,'A',9213959394,305);
insert into department values(201,'IT');
insert into department values(202,'EC');
insert into department values(203,'EN');
insert into department values(204,'CIV');
insert into department values(205,'CS');