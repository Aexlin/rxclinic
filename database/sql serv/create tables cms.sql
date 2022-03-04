create table doctors(
	doctor_id int not null identity(1,1) primary key,
	fname varchar(25) not null,
	lname varchar(25) not null,
	email varchar(20) not null,
	pword varchar(20) not null,
	dept_name int null,
	acc_status int null,
);

create table patients(
	patient_id int not null identity(1,1) primary key,
	fname varchar(25) not null,
	lname varchar(25) not null,
	age int not null,
	gender varchar(6) not null,
	email varchar(20) not null,
	pword varchar(20) not null,
	contact_no int not null,
	p_address varchar(50) not null, 
	acc_status int null
);

create table appointments(
	app_id int not null identity(1,1) primary key,
	app_date date not null, 
	app_time time(6) not null,
	reason varchar (50) null,
	diagnosis varchar (50) null,
	doctor_id int not null,
	patient_id int not null,
	status_id int not null,
	constraint fk_assigned_doctor foreign key (doctor_id) references doctors(doctor_id),
	constraint fk_assigned_patient foreign key (patient_id) references patients(patient_id),
	constraint fk_appstatus foreign key (status_id) references appstatus(status_id)
);

create table appstatus(
	status_id int not null primary key,
	status_name varchar(10) not null
);

create table admin(
	admin_id int not null identity(1,1) primary key,
	admin_name varchar(10) not null,
	email varchar(20) not null,
	pword varchar(20)
)