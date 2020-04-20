use DatabaseProject;

create table Employee(
	empId Integer(3) not null unique , 
    last_name varchar(20) not null,
    first_name varchar(20) not null,
    DOB date not null, 
    phone_number Integer(10) not null,
    primary key(empId)
);

create table Housekeeper(
	empId Integer(3) not null unique,
    hours Integer(3),
    pay_rate Decimal(5,2),
    primary key(empId),
    foreign key(empId) references Employee(empId)
);

create table Curator(
	empId Integer(3) not null unique,
    salary decimal(8,2) not null,
    primary key(empId),
    foreign key(empId) references Employee(empId)
);

create table Security(
	empId Integer(3) not null unique,
    salary decimal(8,2) not null,
    shift Integer(2),
    primary key(empId),
    foreign key(empId) references Employee(empId)
);

create table Artist(
	artistId Integer(4) not null unique,
    last_name varchar(20) not null,
	first_name varchar(20) not null,
	nationality varchar(20) not null,
    speciality varchar(20) not null,
    primary key(artistId)
);

create table Wing(
    wingId Integer(2) not null unique,
    wing_Name varchar(20) not null,
    works_displayed Integer(3) not null,
    total_works_space Integer(3) not null,
    primary key(wingId)
);

create table ArtPiece(
	artId Integer(4) not null unique,
    artMedium varchar(30) not null,
	artistId Integer(4) not null,
	wingId Integer(2) not null,
    title varchar(30) not null,
    primary key(artId),
    foreign key(wingId) references Wing(wingId), 
	foreign key(artistId) references Artist(artistId)
);

create table Event(
	eventId Integer(3) not null unique,
    event_Title varchar(20) not null,
    wingId Integer(3) not null,
    public TinyInt(1) not null, 
    primary key(eventId)
);

create table Guest(
	guestId Integer(3) not null unique,
    last_name varchar(20) not null,
	first_name varchar(20) not null,
    email varchar(30) not null unique,
    status tinyint(1) not null, 
    primary key(guestId)
);

INSERT INTO Employee (empId, last_name, first_name, phone_number) VALUES (1, 'Smith', 'John', '8043334421');
INSERT INTO Housekeeper (empId, hours, pay_rate) VALUES (1, 40, 14.00);
INSERT INTO Housekeeper (empId, hours, pay_rate) VALUES (2, 30, 15.00);
INSERT INTO Curator (empId, salary) VALUES (3, 60000); 
INSERT INTO Security (empId, salary, Shift) VALUES (4, 40000, 'Night'); 
INSERT INTO Employee (empId, last_name, first_name, phone_number) VALUES (5, 'Howard', 'Dwight', '5159901234');
INSERT INTO Security (empId, salary, Shift) VALUES (5, 50000, 'Night'); 


insert into Event values(1, 'Cancer Fundraiser', 2, 1);
insert into Event values(2, 'Bob Wedding', 3, 0);
insert into Event values(3, 'Special Display', 4, 1);
insert into Artist values (1, 'Da Vinci', 'Leonardo', 'Italian', 'Painter');
insert into Artist values (2, 'Van Gogh', 'Vincent', 'Dutch', 'Painter');
insert into Artist values (3, 'Picasso', 'Pablo', 'Spanish', 'Painter');
insert into Artist values (4, 'Rodin', 'Auguste', 'French', 'Sculptor');
insert into Wing values(1, 'Eastern Art', 1, 50);
insert into Wing values(2, 'American Art', 1, 100);
insert into Wing values(3, 'European Art', 2, 75);
insert into Wing values(4, 'African Art', 0, 50); 

insert into ArtPiece values(1, "Les Femmes d'Alger", 3, 1, 'Oil On Canvas');
insert into ArtPiece values(2, "Portrait of Dr. Gachet", 2, 3, 'Oil On Canvas');
insert into ArtPiece values(3, "Mona Lisa", 1, 4, 'Oil On Canvas');
insert into ArtPiece values(4, "The Walking Man", 4, 2, 'Bronze Sculpture');
insert into Guest values(1, 'Smith', 'Joe', 'smith@email.com', 1);
insert into Guest values(2, 'Jones', 'Bob', 'jones@email.com', 0);
insert into Guest values(3, 'White', 'Bill', 'white@email.com', 0);

create table Works(
empId int(3),
eventId int(3),
primary key (empId, eventId), 
foreign key(empId) references Employee(empId),
foreign key(eventId) references Event(eventId)
)


#View Artists
"Select * from Artist"

#View Art Works
Select * from ArtPiece

#View employees
Select * from getEmployees

#view events
Select * from Event

#view Events for each wing
Select event_Title from Event where wingId = '$wingToAdd'

# Number of works in the event
SELECT * FROM DatabaseProject.Works as w, DatabaseProject.Employee as e, DatabaseProject.Event as v
where w.empId = e.empId and w.eventId = v.eventId;

--create view getEmployees as select last_name, first_name, phone_number from Employee;
