# CCC_librarySystem
a library system devoloped by three person who's family name start with C

## How to use
1. put all files under the xampp/htdocs (xampp folder is automatically created by xampp after installing xampp)
2. open xampp application and turn on Apache and MySQL
3. open browser and enter http://localhost/
You should see the main page of the system

### How to login as Administrator (might need to set your phpmyadmin to no password)
1. In db_connect.php, $user and $password should be set to your phpmyadmin user and password
2. in phpmyadmin, add a database called final_project (db_connect.php line 5 dbname=final_project)
3. upload the sql file (located under database folder) into final_project database in phpmyadmin
4. Under final_project database, in administer relation, set your own Administer_ID and Password
7. go back to [adminpage](http://localhost/admin/adminSignIn.php) to test if the administer login works
