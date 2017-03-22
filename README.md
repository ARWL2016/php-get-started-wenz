##PHP: Get Started (Pluralsight: Christian Wenz)

https://app.pluralsight.com/library/courses/php-get-started/table-of-contents 

####Startup 
1. Open Xampp and start up Apache and MySQL servers
2. http://localhost/php-get-started-wenz/select.php (served from C:/xampp/htdocs/)  
3. Go to http://localhost/phpmyadmin/ to view database  

####Featured technology 
- PHP 5.6.30
- MySQL / MySQLi 
- PHPMyAdmin  

####Basic Authorisation and Sessions
- The authorisation in this app involves the login screen, the auth.php file, and redirects on other pages. 
- Only authorised users can access the edit and delete pages 
- To be authorised, a user must have a password (set up on the insert page) and be an admin (granted on successful login)  
- On a successful login, SESSION data is stored as a superglobal for name and admin status. Notice that session_start() must be called on the login page (presumably this allows session data to be stored)    
- The auth.php page check for this SESSION data and redirects users to the login page if it is not there  
- The auth.php is then required at the top of every private page 

####Password Hashing 
- This involves two opposite function: `password_hash()` takes a password and returns a hash, while `password_verify()` takes a password and hash and checks if they match
- only the hash is stored in the database  
- password hashing is done on the insert form after form submission 
- password verification is done on login. Therefore, the hash for the account has to be retreived from the db  

####Importing other files
- `php` files can be imported with include or require. They are inserted into the file as they are.  
- HTML files can be brought in with `readfile(*rel url*)`  
