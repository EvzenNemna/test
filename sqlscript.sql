create database hireMe;
  use hireMe;

  create table user(
    id int primary key auto_increment,
    username varchar(50),
	  email varchar(50),
    password varchar(255)
  );

  create table userProfile(
  id int primary key auto_increment,
  user_id int not null,
  pfp varchar(100),
  fullname varchar(20),
  price real,
  skills json,
  constraint FK_user_id foreign key(user_id) references user(id) 
  );
