# MCQ Distance Evalution Platform

<div align="center">
  
https://user-images.githubusercontent.com/35493201/186771406-0569dd76-01bd-44ad-adb0-cf41e42e76b9.mp4

</div>



## Introduction
As part of my portfolio, this web application was designed and implemented from scratch as a personal project

## Context
This is an evaluation web app initially designed for a computer science department of the University of Bambili, Cameroon.

Each registered teacher can set MCQ test which will be accessible by students at a particular time, scheduled by an algorithm. and after the the test paper time is passed, the teacher can get the students' results in a PDF file. and on the other side, students can download the correction
## Objectives
As specific objectives, I wanted to built a functionnal web application which would:

Provide suitable online area to our beloved lecturers, where they will be able to set and schedule test papers wherever they are and at the end of the set time, download the test report as pdf file format to finally send it to the school record office.

Provide a user-friendly personal area where our students will be able to write their exams online, and as soon as the test paper ending time reaches, download to its correction such as to learn from their mistakes

Provide a suitable notice area where students will get information about the activities undertaken by the departmental club, such as the schedule of extra classes, the maintenance day, requests from the department, etc.

To easily get in touch with our departmental ‘staff as well as our delegates as soon as an issue occurs, one of our aim is to provide to the whole department, a very comfortable area each will be able to get their phone numbers, names and email addresses.

## Technologies
This project has been created using:
- ```Laravel``` version: 5.4
- ```VueJS``` version: 2.6.4
- ```Bootstrap``` version: 4.3.1

## Installation 
To get exactly the same result, install
- ```XAMMP``` version: 7.4.2
- ```Nodejs```version: 10.16.0
- ```Composer```version: 5.1.0.0

## Setup
Create a database named **"distance_evaluation"** and fill it using the file **"./distance_evaluation_DataBase.sql"**

Run the following commands to install Node and Laravel dependencies:
```sh
$ npm instal
$ composer install
```
Start MySql server and launch the server by typing the following command
```sh
$ php artisan serve
```
Verify the deployment by navigating in your favorite browser (Chrome is mine :-) in the following adress:

```sh
127.0.0.1:8000
```
You can use the following credentials to be identified as a teacher administrator 
***Phone: 672121212 Password "dada"***
or the following to be identified as a student administrator 
***Phone: 673131313 Password "madom"***

## Enjoy now! :-)


