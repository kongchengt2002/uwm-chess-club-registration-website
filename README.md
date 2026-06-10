# UWM Chess Club Registration Website

## Overview

This project is a PHP and MySQL registration website created for a UWM Chess Club concept. It was completed as a final project for my website design class. The website allows users to submit registration information through a web form and stores the submitted data in a MySQL database.

The goal of this project was to practice building a database-connected web application using PHP, MySQL, HTML, and CSS. It demonstrates beginner full-stack web development skills, including form design, server-side processing, database connection, and project organization.

## Features

* Styled registration homepage
* Student registration form
* PHP form handling
* MySQL database connection
* Data storage using phpMyAdmin/MySQL
* Registered members view page
* Custom CSS styling
* Organized project files

## Technologies Used

* PHP
* MySQL
* HTML
* CSS
* phpMyAdmin
* cPanel / UWM SOIS web hosting
* GitHub

## Files Included

* `index.php` - Main registration form
* `handle_form.php` - Processes the form submission and inserts registration data into MySQL
* `view_members.php` - Displays saved registrations from the database
* `mysqli_connect.php` - Database connection file with placeholder credentials
* `create_chess_members_table.sql` - SQL table setup file for phpMyAdmin
* `style.css` - Custom CSS styling for the website
* `panther-logo.png` - Image used for the website design

## How It Works

1. The user opens the registration form on `index.php`.
2. The user enters student and chess club registration information.
3. The form submits the information to `handle_form.php`.
4. PHP connects to the MySQL database using `mysqli_connect.php`.
5. The submitted data is inserted into the `chess_members` table.
6. The user receives a registration confirmation.
7. Saved registrations can be viewed through `view_members.php`.

## Database

The project uses a MySQL table called `chess_members` to store registration information. The table includes fields for:

* First name
* Last name
* Email
* Student status
* Chess skill level
* Preferred play style
* Club interests
* Preferred meeting day
* Graduation month and year
* Comments
* Registration date

The database table setup is included in `create_chess_members_table.sql`.

## Setup Steps

1. Upload the project folder to a PHP-supported web server.
2. Create a MySQL database in cPanel or phpMyAdmin.
3. Run `create_chess_members_table.sql` in phpMyAdmin.
4. Update `mysqli_connect.php` with the correct database username, password, and database name.
5. Open `index.php` in a browser and submit a test registration.
6. Open `view_members.php` to confirm the registration was saved.

## Security Note

The uploaded version of `mysqli_connect.php` uses placeholder database credentials. Real database usernames, passwords, and server information should not be uploaded to GitHub.

## What I Learned

Through this final project, I practiced building a database-connected website using PHP, MySQL, HTML, and CSS. I gained experience creating forms, processing user input, connecting to a database, inserting records, displaying saved records, and organizing files for a web application.

I also practiced troubleshooting common issues such as database connection errors, form submission problems, file path issues, and CSS layout adjustments.

## Future Improvements

In the future, I would improve this project by adding:

* User login functionality
* Admin dashboard
* Better form validation
* Search and filter features
* Edit and delete member records
* Responsive mobile design improvements
* Prepared statements for stronger SQL security

## Author

**Kongcheng Thao**
Information Science & Technology Student
University of Wisconsin-Milwaukee
