CREATE DATABASE 2001CS40;

CREATE TABLE Student {
    stdID VARCHAR(10) PRIMARY KEY,
    passwd VARCHAR(255),
    stdNmae VARCHAR(20),
    Doj DATE,
    age INT(11),
    department VARCHAR(20),
    mobileNo INT(12),
    email VARCHAR(30)
}