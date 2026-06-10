UWM Chess Club Registration Website

Files included:
index.php - Main registration form
handle_form.php - Handles form submission and inserts registration into MySQL
view_members.php - Displays all saved registrations from the database
mysqli_connect.php - Database connection file
create_chess_members_table.sql - SQL table setup file for phpMyAdmin
style.css - CSS styling for the website

Setup steps:
1. Upload the uwm_chess_registration_website folder to your SOIS web server.
2. Create a MySQL database in cPanel/phpMyAdmin.
3. Run create_chess_members_table.sql in phpMyAdmin.
4. Update mysqli_connect.php with your real database username, password, and database name.
5. Open index.php in your browser and submit a test registration.
6. Open view_members.php to confirm the registration was stored in the database.
