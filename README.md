# Simple sql framework with php
Is an open source sql framework build to reduce the period of writing sql statement more easier.

** ** Confguration 
The configuration file is name config.php. the config.php is where you will configure your database (host, username, password, dbname)

** ** connecting to the database 
to connect to the database 
  - Include function.php in your project folder
  - after including function.php then add this code 
    > <?php $conn = new sql;?>
** ** fetching all rows in a database
      > <?php 
      public function fetch_all_rows(){
        conn = new sql;
        $rows = $conn->all('table_name');
        foreach($rows as $row){
          echo $row['column'];
        }
      }
        
      ?>

you can find how to fetch, binding parameters and lots more in index.php
