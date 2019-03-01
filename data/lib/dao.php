<?php
include_once 'dbconnect.php';
include_once  'interface1.php';

class dao implements interface1 
{    
    private $conn;
    function __construct() 
    {
        //include_once './config.php';
       
        $db=new DbConnect();
        $this->conn=$db->connect();
    }

    //data insert funtion
    function insert($table,$value)
    {
        $field="";
        $val="";
        $i=0;
        
        foreach ($value as $k => $v)
        {
            $v= str_replace("'", "", $v);
            if($i == 0)
            {
                $field.=$k;
                $val.="'".$v."'";
            }
            
            else 
            {
                $field.=",".$k;
                $val.=",'".$v."'";
                
            }
            $i++;
            
        }
        return mysqli_query($this->conn,"INSERT INTO $table($field) VALUES($val)") or die(mysqli_error($this->conn));
    }

    //using insert funtion for procedures 
    function insert1($table, $value)
    {
        $field="";
        $val="";
        $i = 0;
        
          foreach($value as $k => $v)
          {
            $v= str_replace("'", "", $v);
              if($i==0)
             
               {
                  $field.=$k;
                  $val.="'" . $v . "'";
              }
              else 
              {
                  $field.="," . $k ;
                  $val.=", '" . $v . "'";
              }
              $i++;
          }
          return mysqli_query($this->conn,"CALL $table($val)")or die(mysqli_error($this->conn));;
    }
    
      //select funtion display data
    function select($table, $where='', $other='')
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }
        $select = mysqli_query($this->conn,"SELECT * FROM $table $where $other") or die(mysqli_error($this->conn));
        return $select;
    }
   
   
      //delete using update query(active_flag)
     function delete1($table ,$var, $where)
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }
        if($var != '')
        {
            $var= 'active_flag= ' .$var;
        }
        return mysqli_query($this->conn,"update $table set $var $where");
    }

     //Comment ()
     function comment($table ,$var, $where)
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }
        if($var != '')
        {
            $var= 'status= ' .$var;
        }
        return mysqli_query($this->conn,"update $table set $var $where");
    }
     //delete permanataly  function
    function delete($table , $where='')
    {
        if($where != '')
        {
        $where= 'where ' .$where;
        }
        return mysqli_query($this->conn,"delete FROM $table $where");
    }

    //Upadate funtion
    function update($table ,$value, $where)
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }


        $val="";
        $i=0;
        foreach ($value as $k => $v)
        {
            $v= str_replace("'", "", $v);
            if($i == 0)
            {
              $val.=$k."='".$v."'";    
            }
            
            else 
            {
              $val.=",".$k."='".$v."'";
            }
            $i++;
            
        }
        return mysqli_query($this->conn,"update $table SET $val $where");
    }
     //select next auto_increment_id
    function last_auto_id($table)
    {
        
        $select_id = mysqli_query($this->conn,"SHOW TABLE STATUS LIKE '$table'" ) or die(mysqli_error($this->conn));
        return $select_id;
    }

        //Count Data of Table
    function count_data($field='' ,$table ,$where='')
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }

        $count_data = mysqli_query($this->conn,"SELECT $field,COUNT(*)  FROM $table $where" ) or die(mysqli_error($this->conn));
        return $count_data;

    }
     //Count sum of  Table field
    function sum_data($field='' ,$table ,$where='')
    {
        if($where != '')
        {
            $where= 'where ' .$where;
        }

        $sum_data = mysqli_query($this->conn,"SELECT SUM($field) from `$table` $where" ) or die(mysqli_error($this->conn));
        return $sum_data;

    }
}
?>