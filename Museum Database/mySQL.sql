#All the Queries are embedded inside PHP files 



#Stored Proc for Art In each Wing
CREATE DEFINER=`root`@`%` PROCEDURE `ArtinWing`(in input varchar(20))
BEGIN
SELECT a.title FROM DatabaseProject.ArtPiece as a,DatabaseProject.Wing as w
where a.wingId = w.wingId and w.wing_Name=input;
END


#Add Artist to Database

insert into Artist(last_name, first_name, nationality, speciality) values ('$lastNameToAdd', '$firstNameToAdd', '$NationalityToAdd','$SpecialityToAdd')


#Add Art work to the database
insert into ArtPiece(artMedium, artistId, WingId, title) values ('$mediumToAdd', '$artistIdToAdd', '$Wing_IDToAdd', '$titleToAdd')

#Add Curator to the database
insert into Curator values ('$employeeIDResultNumber', '$salaryToAdd', '$wingToAdd')

#Add employee to an event
insert into Works values ('$empToAdd', '$eventId')


#Add employee to database
insert into Employee (last_name, first_name, phone_number) values ('$lastNameToAdd', '$firstNameToAdd', '$phoneNumberToAdd')

#Add event to database
insert into Event(event_Title, wingId, public) values ('$eventTitleToAdd', '$wingToAdd', '$publicToAdd')

#Add housekeeper to database
insert into Employee (last_name, first_name, phone_number, SSN) values ('$lastNameToAdd', '$firstNameToAdd', '$phoneNumberToAdd', '$snnToAdd')

select empId from Employee where SSN = '$snnToAdd'

insert into HouseKepper values ('$employeeIDResultNumber', '$wageToAdd)

#Add security to database

insert into Employee (last_name, first_name, phone_number, SSN) values ('$lastNameToAdd', '$firstNameToAdd', '$phoneNumberToAdd', '$snnToAdd')

select empId from Employee where SSN = '$snnToAdd'

insert into Security values ('$employeeIDResultNumber', '$salaryToAdd', '$shiftToAdd')

#To look at art in wing
#Calls the proc name ArtinWing

call DatabaseProject.ArtinWing('$WingNameToAdd');

#To look at people attending a event
Select * from attends

#Check log in
select empId, last_name from Employee where empId = '$employee' and last_name = '$lastName'

#Delete Artist
delete from Artist where empId = '$deleteArtist'

#Delete Art pieces
delete from ArtPiece where empId = '$deleteArtPiece'

#Delete Curator
delete from Curator where empId = '$employeeIdDelete'
delete from Employee where empId = '$employeeIdDelete'

#Delete event
delete from Event where eventId = '$deleteEvent'

#Delete housekeeper 
delete from Housekeeper where empId = '$employeeIdDelete'
delete from Employee where empId = '$employeeIdDelete'

#Delete security 
delete from Security where empId = '$employeeIdDelete'
delete from Employee where empId = '$employeeIdDelete'

#housekeeper working
Select * from Housekeeper
Select COUNT(*) from Housekeeper

#security working on each shift
Select * from Security WHERE shift = 'Night'
Select * from Security WHERE shift = 'Day'

#Space in a wing
SELECT *, `total_works_space`-`works_displayed` AS `difference` 
FROM `Wing`

#supervisor
Select * from Curator

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
