<?php

echo "<h1>Welcome to OpenShift Online Developer Preview</h1>";
echo "Running on pod named: <b>" . gethostname() . "</b>";
echo "<br>To test the database, hit the <a href=\"/dbtest.php\">dbtest.php</a> URL";
echo "<br>If you are using the MySQL Employees Sample Database, go to <a href=\"/top10employeenames.php\">top10employeenames.php</a> to see the first 10 rows in the database";


echo "<br><br>This assumes that you have the correct env variables set";
echo "<BR><BR>The environment variables required are MYSQL_USER, MYSQL_PASSWORD, and MYSQL_DATABASE";

