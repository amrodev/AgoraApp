  <?php 

  class Database{

  	  private $hostname_con = '';
      private $database_con = '';
      private $username_con = '';
      private $password_con = '';
      private $con;
      private $table_name;

  	//////// Open Connection ///////////////////////////////////////////////////////
    public function connect()
  	{	
  	    $this->hostname_con ='localhost';
  	    $this->database_con ='agora';
  	    $this->username_con ='amro';
  	    $this->password_con ='123';

        //$this->hostname_con ='localhost';
  	    //$this->database_con ='egyroaa_SPM';
  	    //$this->username_con ='egyroaa_amro';
  	    //$this->password_con ='SPM@amro123';

       
          $this->con = mysql_connect($this->hostname_con , $this->username_con, $this->password_con) or die("MySQL Error: " . mysql_error());
          mysql_select_db($this->database_con) or die("MySQL Error: " . mysql_error());
          if ($this->con) {
             mysql_query("SET NAMES 'utf8'", $this->con);

          	return TRUE;
              
          }
          else { return FALSE; }
  	}

      
      //////// Close Connection ///////////////////////////////////////////////////////
      public function close_connection()
      {
           //mysql_close($this->con);
           return TRUE;
      }

      //////// Get X random records ///////////////////////////////////////////////////
      public function get_random_records($table_name,$n_records)
      {
          $connection = $this->connect();
          if ($connection) 
          {
             $q = 'SELECT * FROM '.$table_name.' ORDER BY RAND() LIMIT '.$n_records;
             $query = mysql_query($q);
             $count = 0;
             $i=0;
             while ($row = mysql_fetch_array($query)) 
             {
               $r[$i] = $row; 
               $i++;
             }
             return $r;
             $this->close_connection();
          }
          else
          {
             return FALSE;
             $this->close_connection();
          }
      }



      ///////////////////////////////////////////////////////////
      public function get_by_query($q)
      {
        $q;
          $connection = $this->connect();
          if ($connection) 
          {
             $query = mysql_query($q);
             $count = 0;
             $i=0;
             $r = array();
             while ($row = mysql_fetch_array($query)) 
             {   
               $r[$i] = $row; 
               $i++;                                         
             }
             return $r; 
             $this->close_connection();
          }
          else
          {
             return FALSE;
             close_connection();
          }
      }
      ////////////////////////////////////////////////////////////////////////////////


      ////////////////////////////////////////////////////////////////////////////////
      public function get_number_records($table_name)
      {
          $connection = $this->connect();
          if ($connection) 
          {
             $query  = 'SELECT * from '.$table_name;
             $result = mysql_query($query);
             $num    = mysql_num_rows($result);
             return $num;
             $this->close_connection();
          }
          else
          {
             return FALSE;
             $this->close_connection();
          }
      }
      ////////////////////////////////////////////////////////////////////////////////

      ////////////////////////////////////////////////////////////////////////////////
      public function get_all($table_name)
      {
          $connection = $this->connect();
          if ($connection) 
          {
              $query = mysql_query("SELECT * FROM $table_name");
              $count = 0;
              $i=0;
              while ($row = mysql_fetch_array($query)) 
              {    
                  $r[$i] = $row;
                  //echo $row['user_name'];
                  $i++;                                         
              }            
              $this->close_connection();
              if (isset($r)) {
               return $r;
              }
              
          }
          else
          {
             return FALSE;
             $this->close_connection();
          }
      }
      ////////////////////////////////////////////////////////////////////////////////.

      public function GetXrecords($table_name,$nrecords,$OrderBy,$sort)
      {
          $connection = $this->connect();
          if ($connection) 
          {
              $q = 'SELECT * FROM '.$table_name.' ORDER BY '.$OrderBy.' '.$sort.' LIMIT '.$nrecords;
              $query = mysql_query($q);
              $count = 0;
              $i=0;
              while ($row = mysql_fetch_array($query)) 
              {    
                  $r[$i] = $row;
                  //echo $row['user_name'];
                  $i++;                                         
              }            
              $this->close_connection();
              if (isset($r)) {
               return $r;
              }
              
          }
          else
          {
             return FALSE;
             $this->close_connection();
          }
      }


      ////////////////////////////////////////////////////////////////////////////////
      
      public function get_by_where($table_name,$f_select,$where)
      {
          $connection = $this->connect();
          if ($connection) 
          {
              $i=0;
              $q = 'SELECT '.$f_select.' FROM '.$table_name.' WHERE '.$where;
              $result = mysql_query($q);
              while ($row = mysql_fetch_array($result)) 
              {   
                $r[$i] = $row;
                $i++;                                                
              } 
              if (isset($r)) 
              {
                return $r;          
              }   
             
          }
          else
          {
             return FALSE;
          }
          $this->close_connection();
      }
      ////////////////////////////////////////////////////////////////////////////////
      

      public function Get_all_ByWhere($table_name,$search_by,$value)
      {
          $connection = $this->connect();
          if ($connection) 
          {
              $i=0;
              $q = "SELECT * FROM ".$table_name." WHERE ".$search_by."="."'".$value."'";
              $query = mysql_query($q);
              while ($row = mysql_fetch_array($query)) 
              {   
                $r[$i] = $row;
                $i++;                                                
              } 
              if (isset($r)) 
              {
                return $r;          
              }   
             $this->close_connection();
          }
          else
          {
             return FALSE;
             $this->close_connection();
          }
      }




      ////////////////////////////////////////////////////////////////////////////////
      public function Search($table_name,$searchword)
      {
          $connection = $this->connect();
          if ($connection) 
          {           
             $this->close_connection();
          }
          else
          {
             return FALSE;
             $this->close_connection();
          }
      }
      ////////////////////////////////////////////////////////////////////////////////


      ////////////////////////////////////////////////////////////////////////////////
      public function insert($table_name , $fields , $values )
      {
          $connection = $this->connect();
          if ($connection) 
          {
             $query = 'INSERT INTO '.$table_name.' '.$fields.' VALUES'.$values ;
             $result = mysql_query($query);
             if ($result) 
             {
               return TRUE;
             }
             else 
             {
               return FALSE; 
               echo ' Error insert database ';
             } 
             $this->close_connection();
          }
          else
          {
             return FALSE;
             $this->close_connection();
          }
      }
      ////////////////////////////////////////////////////////////////////////////////
   
      public function update($table_name,$fileds,$values,$counter,$select,$select_value)
      {
          $connection = $this->connect();
          if ($connection) 
          {
             $query = "UPDATE ".$table_name." SET ";        
             //echo $table_name,$fileds,$values,$counter,$select,$select_value;
             for ($i=0; $i < $counter ; $i++) 
             {            
                if ($i != $counter-1) 
                {
                    $query .=  $fileds[$i]."='".$values[$i]."' , ";
                }
                if ($i == $counter-1) 
                {
                    $query .=  $fileds[$i]."='".$values[$i]."'";
                }
              }
              $query .= " WHERE ".$select."= '".$select_value."'";
              echo $query;
              $result = mysql_query($query);
          }
          else
          {
             return FALSE;
             close_connection();
          }
      }



      ///////////////////////////////////////////////////////////
      public function delete($table_name ,$where_select ,$where_value)
      {
          $connection = $this->connect();
          if ($connection) 
          {
            $query  = "DELETE  FROM ".$table_name." WHERE ".$where_select."=".$where_value;
            $result = mysql_query($query);
            if ($result) 
            {
              echo 'Delete is Successful';
              return TRUE;
            }
            else
            {
              echo 'Delete is Faild';
              return FALSE;
            }
          }
          else
          {
             return FALSE;
             close_connection();
          }
      }




      ///////////////////////////////////////////////////////////
      public function s()
      {
          $connection = connect();
          if ($connection) 
          {
             
          }
          else
          {
             return FALSE;
             close_connection();
          }
      }
      /////////////////////////////////////////////////////////////

      public function is_admin($table_name,$username)
      {
          $connection = $this->connect();
          if ($connection) 
          {
             $query  = "SELECT * FROM ".$table_name." WHERE userName='".$username."' ";
             $result = mysql_query($query);
             $_is    = mysql_num_rows($result);
          }
          else
          {
             return FALSE;
             close_connection();
          }

          return $_is;

      }

      public function is_user($table_name,$username)
      {
          $connection = $this->connect();
          if ($connection) 
          {
             $query  = "SELECT * FROM ".$table_name." WHERE userName='".$username."' ";
          $result = mysql_query($query);
          $_is    = mysql_num_rows($result);
          }
          else
          {
             return FALSE;
             close_connection();
          }

          return $_is;

      }

      ///////////////////////////////////////////////////////////
      public function get_one_record($table_name,$search_by,$value)
      {
          $connection = $this->connect();
          if ($connection) 
          {
              $r = array();
              $i = 0;
              $query = "SELECT * FROM ".$table_name." WHERE ".$search_by." = '".$value."'";
              $result = mysql_query($query);
              while($row = mysql_fetch_array($result)) 
             {   
                //$count++; 
                $r[$i] = $row;
                //var_dump($row);
                $i++;                                                
              }             
          }
          else
          {
             return FALSE;
             close_connection();
          }
          return $r;
          close_connection();
      }
      /////////////////////////////////////////////////////////////
      // InnerJoin 2 tables
      public function InnerJoin($table1,$table2,$selects,$OnStatement,$WhereStatement)
      {
        $connection = $this->connect();
        if ($connection) 
        {
            $i=0;
            
            /*
            SELECT test_questions.QuestionID, test_questions.TestID, test_questions.QuestionType, test_questions.Question, test_questions.ModelAnswer,tests_answer.QuestionAnswer
            FROM test_questions
            INNER JOIN tests_answer ON test_questions.QuestionID = tests_answer.QuestionID
            WHERE StudentUserName =  'S1' 
            */
            if ($WhereStatement == "") {
              $q = "SELECT ".$selects." FROM ".$table1." INNER JOIN ".$table2. " ON ".$OnStatement; 
              $query = mysql_query($q);
              while ($row = mysql_fetch_array($query)) 
              {   
                $r[$i] = $row;
                $i++;                                                
              } 
              if (isset($r)) 
              {
                return $r;          
              }   
              $this->close_connection();
              
            }
            else{
              $q = "SELECT ".$selects." FROM ".$table1." INNER JOIN ".$table2. " ON ".$OnStatement." WHERE ".$WhereStatement; 
              $query = mysql_query($q);
              while ($row = mysql_fetch_array($query)) 
              {   
                $r[$i] = $row;
                $i++;                                                
              } 
              if (isset($r)) 
              {
                return $r;          
              }   
              $this->close_connection();
            }
        }
        else
        {
           return FALSE;
           $this->close_connection();
        }
      }

      /////////////////////////////////////////////////////////////
      // InnerJoin morethan 4 tables
      public function InnerJoin5($table1,$table2,$table3,$table4,$table5,$table6,$selects,$OnStatement1,$OnStatement2,$OnStatement3,$OnStatement4,$OnStatement5,$WhereStatement)
      {
        $connection = $this->connect();
        if ($connection) 
        {
            $i=0;
            
            /*
            SELECT  classes.ClassName,
                    subjects.SubjectName,
                    teachers.TeacherName,
                    timetable.DayId,
                    timetable.LessonId
            FROM timetable
              INNER JOIN classes
                ON classes.ClassID = timetable.ClassID
              INNER JOIN subjects
                ON subjects.SubjectID = timetable.SubjectID
              INNER JOIN teachers
                ON teachers.TeacherId = timetable.TeacherId
              where timetable.DayId=1 and timetable.LessonId=1
            */
              //days.DayNameEn,
            
            $q = 'SELECT  '.$selects.'  FROM '.$table1.' INNER JOIN '.$table2.' ON '.$OnStatement1.' INNER JOIN '.$table3.' ON '.$OnStatement2. ' INNER JOIN '.$table4.' ON '.$OnStatement3.' INNER JOIN '.$table5.' ON '.$OnStatement4.' INNER JOIN '.$table6.' ON '.$OnStatement5.' where '.$WhereStatement;
            $query = mysql_query($q);
            while ($row = mysql_fetch_array($query)) 
            {   
              $r[$i] = $row;
              $i++;                                                
            } 
            if (isset($r)) 
            {
              return $r;          
            }   
            $this->close_connection();
        }
        else
        {
           return FALSE;
           $this->close_connection();
        }
      }

      public function count($tablename)
      {
        //select count(*) from project_management.customers
         $connection = $this->connect();
          if ($connection) 
          {
              $query = mysql_query("select count(*) from $tablename");
              $count = 0;
              $i=0;
              while ($row = mysql_fetch_array($query)) 
              {    
                  $r[$i] = $row;
                  //echo $row['user_name'];
                  $i++;                                         
              }            
              $this->close_connection();
              if (isset($r)) {
               return $r;
              }
              
          }
          else
          {
             return FALSE;
             $this->close_connection();
          }
      }

  }
  ?>