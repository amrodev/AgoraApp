<?php
  
  require_once('db.php');
   
  class Cards{
  	public $con_state;
  	public $data = array();
    public $table_name   = 'cards';
    public $table_nameGC = 'giftcards';

  	public function connect(){
  		$db = new Database();
  		$this->con_state = $db->connect(); // return 1 if ture 0 of false
  		return $this->con_state;
  	}

    public function close_Connection(){
      $db = new Database();
      $this->con_state = $db->close_connection(); // return 1 if ture 0 of false
      return $this->con_state;
    }

  	public function get_all()
  	{
  		$this->con_state = $this->connect();
  		if ($this->con_state) {
  			$db = new Database();
  		    $r= $db->get_all($this->table_name);  		    
  		}
      $this->close_Connection();
      return $r;
  	}

    public function get_allGC()
  	{
  		$this->con_state = $this->connect();
  		if ($this->con_state) {
  			$db = new Database();
  		    $r= $db->get_all($this->table_nameGC);  		    
  		}
      $this->close_Connection();
      return $r;
  	}

    public function GetXRecords($nrecords,$OrderBy,$sort)
    {
      $this->con_state = $this->connect();
      if ($this->con_state) {
        $db = new Database();
          $r= $db->GetXrecords($this->table_name,$nrecords,$OrderBy,$sort);          
      }
      $this->close_Connection();
      return $r;
    }

    
    public function get_carddata($search_by,$value)
    {

        $this->con_state = $this->connect();
        $jobdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $jobdata= $db->Get_all_ByWhere($this->table_name,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $jobdata;
        //var_dump($userdata);
    }

    public function get_GCdata($search_by,$value)
    {

        $this->con_state = $this->connect();
        $jobdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $jobdata= $db->Get_all_ByWhere($this->table_name,$search_by,$value);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $jobdata;
        //var_dump($userdata);
    }

   	
  	public function get_by($username,$select)
  	{
  		$ar1 = array();
  		$this->con_state = $this->Check_Connection();
  		if ($this->con_state) {
  			$db = new Database();
  		    $value = $db->get_by($this->table_name,$username,$select);  
  		}
      $this->close_Connection();
  		return $value;
  	}

    public function get_by_where($select,$where)
    {

        $this->con_state = $this->connect();
        $userdata = array();
        if ($this->con_state) 
        {
          $db = new Database();
          $userdata= $db->get_by_where($this->table_name,$select,$where);
        }
        else {
          echo 'Sorry Connection was lost';
        }
        $this->close_Connection();
        return $userdata;
        //var_dump($userdata);
    }
    
    

    public function save($id,$cardText)
  	{
        $message ='';
  	    $this->con_state = $this->connect();
  		  if ($this->con_state) {
  			$db = new Database();
  		    if($id == NULL){ // Insert
  		        $sign_up_date = date("Y-m-d");
              $fields = "(cardText)";
  		    	  $values = "( '".$cardText."'  )";
              $db->insert($this->table_name , $fields , $values );
             $message = 'Job added Successful';
  		    } 
  		    	    
  		}
      $this->close_Connection();
      return true;  		
  	}

    public function saveGC($id,$cardText)
  	{
        $message ='';
  	    $this->con_state = $this->connect();
  		  if ($this->con_state) {
  			$db = new Database();
  		    if($id == NULL){ // Insert
  		        $sign_up_date = date("Y-m-d");
              $fields = "(cardText)";
  		    	  $values = "( '".$cardText."'  )";
              $db->insert($this->table_nameGC , $fields , $values );
              echo $message = 'Job added Successful';
  		    } 
  		    	    
  		}
      $this->close_Connection();
      return $message;  		
  	}



    public function delete($where_select ,$where_value)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) 
        {
          $db = new Database();
          $db->delete($this->table_name ,$where_select ,$where_value);       
          $this->close_Connection();
        }

    }    


    public function update($fileds,$values,$counter,$select,$id)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) 
        {
          $_db = new Database();
          $_db->update($this->table_name,$fileds,$values,$counter,$select,$id);
        } 
        return $message;      
    }

     public function updateGC($fileds,$values,$counter,$select,$id)
    {
        $message ='';
        $this->con_state = $this->connect();
        if ($this->con_state) 
        {
          $_db = new Database();
          $_db->update($this->table_nameGC,$fileds,$values,$counter,$select,$id);
        } 
        return $message;      
    }

  	
    
  } 
?>