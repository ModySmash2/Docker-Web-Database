
CREATE DATABASE IF NOT EXISTS team_data;

USE team_data;

CREATE TABLE IF NOT EXISTS students (
    student_ID INT PRIMARY KEY,
    student_Name VARCHAR(50),
    Age INT CHECK (Age > 0),
    CGPA DECIMAL(3, 2) CHECK (CGPA >= 0 AND CGPA <= 4) ,
    Gender VARCHAR(10) CHECK (Gender IN ('Male', 'Female'))
);

INSERT INTO students VALUES
(22010212, 'Mohamed Osama', 20, 4.0,'Male'),
(22010191, 'Farah Mohamed', 20, 4.0,'Female'),
(22010269, 'Menna Ibrahim', 20, 4.0,'Female'),
(22011646, 'Khaled Mohamed', 20, 4.0,'Male'),
(22011965, 'Mathew Bahgat',20, 4.0,'Male');


