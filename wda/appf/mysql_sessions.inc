<?php
require "db.inc";

// Returns current time as a number. Used for recording the
// last session access.

function getMicroTime()
{
  // microtime() returns the number of seconds since
  // 0:00:00 January 1, 1970 GMT as a  microsecond part
  // and a second part. e.g.: 0.08344800 1000952237

  // Convert the two parts into an array
  $mtime = explode(" ", microtime());

  // Return the addition of the two parts e.g.: 1000952237.08344800
  return($mtime[1] + $mtime[0]);
}

// The database connection
$connection = NULL;
  
// The global variable that holds the table name
$session_table = NULL;

// The session open handler called by PHP whenever
// a session is initialized. Always returns true.

function sessionOpen($database_name, $table_name)
{
  // Save the database connection in a global variable
  global $connection;

  // Save the session table name in a global variable
  global $session_table;

  // Database credentials
  global $hostName;
  global $username;
  global $password;

  if (!($connection = @ mysql_connect($hostName, $username, $password)))
     showerror();

  if (!mysql_select_db($database_name, $connection))
     showerror();

  $session_table = $table_name;

  return true;
}

// This function is called whenever a session_start() call is
// made and reads the session variables associated with the session
// identified by the $sess_id parameter. Returns "" when a session
// is not found and the session variables as a serialized string
// when the session exists.

function sessionRead($sess_id)
{
  // Access the DBMS connection
  global $connection;

  // Access the sessions table
  global $session_table;

  // Formulate a query to find the session identified by $sess_id
  $search_query = "SELECT * FROM {$session_table}
                   WHERE session_id = '{$sess_id}'";

  // Execute the query
  if (!($result = @ mysql_query($search_query, $connection)))
     showerror();

  if(mysql_num_rows($result) == 0)
    // No session found - return an empty string
    return "";
  else
  {
    // Found a session - return the serialized string
    $row = mysql_fetch_array($result);
    return $row["session_variable"];
  }
}

function sessionWrite($sess_id, $val)
{
  // Access the DBMS connection
  global $connection;

  // Access the sessions table
  global $session_table;

  $time_stamp = getMicroTime();

  $search_query = "SELECT session_id FROM {$session_table}
                   WHERE session_id = '{$sess_id}'";

  // Execute the query
  if (!($result = @ mysql_query($search_query, $connection)))
     showerror();

  if(mysql_num_rows($result) == 0)
  {
     // No session found, insert a new one
     $insert_query = "INSERT INTO {$session_table}
                      (session_id, session_variable, last_accessed)
                      VALUES ('{$sess_id}', '{$val}', {$time_stamp})";

     if (!mysql_query($insert_query, $connection))
        showerror();
  }
  else
  {
     // Existing session found - Update the session variables
     $update_query = "UPDATE {$session_table}
                      SET session_variable = '{$val}',
                          last_accessed = {$time_stamp}
                      WHERE session_id = '{$sess_id}'";

     if (!mysql_query($update_query, $connection))
        showerror();
  }
}

// This function is executed on shutdown of the session. 
// Always returns true.

function sessionClose()
{
    return true;
}

// This is called whenever the session_destroy() function
// call is made. Returns true if the session  has successfully
// been deleted.

function sessionDestroy($sess_id)
{
  // Access the DBMS connection
  global $connection;

  // Access the sessions table
  global $session_table;

  $delete_query = "DELETE FROM {$session_table}
                   WHERE session_id = '{$sess_id}'";

  if (!($result = @ mysql_query($delete_query, $connection)))
     showerror();

  return true;
}

// This function is called on a session's start up with the
// probability specified in session.gc_probability.  Performs
// garbage collection by removing all sessions that haven't been
// updated in the last $max_lifetime seconds as set in
// session.gc_maxlifetime.
// Returns true if the DELETE query succeeded.

function sessionGC($max_lifetime)
{
  // Access the DBMS connection
  global $connection;

  // Access the sessions table
  global $session_table;

  $current_time = getMicroTime();

  $delete_query = "DELETE FROM {$session_table}
             WHERE last_accessed < ({$current_time} - {$max_lifetime})";

  if (!($result = @ mysql_query($delete_query, $connection)))
     showerror();

  return true;
}

// Call to register user call back functions.

session_set_save_handler("sessionOpen", 
                         "sessionClose", 
                         "sessionRead", 
                         "sessionWrite", 
                         "sessionDestroy", 
                         "sessionGC");
?>
