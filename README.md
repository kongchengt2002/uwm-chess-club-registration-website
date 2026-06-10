# UWM Chess Club Registration Website

## Overview

This project is a PHP and MySQL registration website created for a UWM Chess Club concept. It was completed as a final project for my website design class. The website allows users to submit registration information through a web form and stores the submitted data in a MySQL database.

The goal of this project was to practice building a database-connected web application using PHP, MySQL, HTML, and CSS. It demonstrates basic full-stack web development skills, including form design, server-side processing, database connection, and project organization.

## Features

* Styled registration homepage
* User registration form
* PHP form handling
* MySQL database connection
* Data storage using phpMyAdmin/MySQL
* Custom CSS styling
* Organized project files
* Screenshot documentation

## Technologies Used

* PHP
* MySQL
* HTML
* CSS
* phpMyAdmin
* cPanel / UWM SOIS web hosting
* GitHub

## Project Structure

```text
uwm-chess-club-registration-website/
│
├── README.md
├── index.php
├── handle_form.php
├── mysqli_connect.php
├── style.css
├── database.sql
│
└── screenshots/
    ├── homepage.png
    ├── registration-form.png
    ├── confirmation-page.png
    └── database-table.png
```

## How It Works

1. The user opens the registration website.
2. The user fills out the registration form.
3. The form sends the information to a PHP processing file.
4. PHP connects to the MySQL database.
5. The submitted registration data is inserted into a database table.
6. A confirmation page or message is displayed to the user.

## Database

The project uses a MySQL database table to store member registration information. The table may include fields such as:

* First name
* Last name
* Email
* Skill level
* Chess experience
* Availability
* Registration date

A sample database structure is included in the `database.sql` file.

## Screenshots

Screenshots are included to show the website interface, registration form, confirmation page, and database table.

## What I Learned

Through this final project, I practiced connecting a PHP website to a MySQL database, handling form submissions, organizing project files, and styling a web application with CSS. I also gained experience troubleshooting database connection issues, form validation problems, and file structure errors.

This project helped me better understand how web applications collect, process, and store user-submitted data.

## Future Improvements

In the future, I would improve this project by adding:

* User login functionality
* Admin dashboard
* Better form validation
* Search and filter features
* Edit and delete member records
* Improved responsive design
* Stronger security practices using prepared statements

## Author

**Kongcheng Thao**
Information Science & Technology Student
University of Wisconsin-Milwaukee
