create database placement_db;
use placement_db;

create table students(
    student_id int AUTO_INCREMENT primary key,
    name varchar(100),
    email varchar(100) unique,
    branch varchar(10),
    cgpa Decimal(3,2),
    resume_link varchar(300)
);

create table tnp_faculty(
    faculty_id int AUTO_INCREMENT primary key,
    name varchar(100),
    email varchar(100) unique
);

create table companies(
    company_id int AUTO_INCREMENT primary key;
    name varchar(100),
    role varchar(100),
    package Decimal(10,2)
    eligibility_cgpa Decimal(3,2),
    drive_date DATE,
    deadline DATE,
    description TEXT
);

create table applications(
    app_id int AUTO_INCREMENT primary key
    student_id int not null,
    company_id int not null,
    applied_at timestamp default current_timestamp,
    status ENUM('Applied','Selected','Rejected') DEFAULT 'Applied',
    FOREIGN KEY (student_id) REFERENCES students(student_id) ON DELETE CASCADE,
    FOREIGN KEY (company_id) REFERENCES companies(company_id) ON DELETE CASCADE
);
