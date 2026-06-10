-- Create the database table for the UWM Chess Club Registration Website.
-- Run this SQL in phpMyAdmin before testing the PHP forms.

CREATE TABLE chess_members (
    member_id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    student_status VARCHAR(50) NOT NULL,
    skill_level VARCHAR(50) NOT NULL,
    play_style VARCHAR(75) NOT NULL,
    interests VARCHAR(255),
    meeting_day VARCHAR(20) NOT NULL,
    grad_month VARCHAR(20),
    grad_year VARCHAR(10),
    comments VARCHAR(500),
    registration_date DATETIME NOT NULL
);
