<?php

Class crudApp{
    
    private $conn;

    public function __construct()
    {
       $dbhost = 'localhost';
       $dbuser = 'root';
       $dbpass = "";
       $dbname = 'crudapp';
       
       $this ->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

       if(!$this->conn){

        die("Database Connection Eorror.");
       }
    }


    public function add_data($data){

        $std_name = $data['std_name'];
        $std_roll = $data['std_roll'];
        $std_img = $_FILES['upload_img']['name'];
        $tmp_name = $_FILES['upload_img']['tmp_name'];

        $query = "INSERT INTO students(Name,Roll,img) VALUES('$std_name',$std_roll,'$std_img')";

        if(mysqli_query($this->conn, $query)){
            move_uploaded_file($tmp_name, 'upload/'.$std_img);
            return "Information Added Successfully";
        }

    }


    public function display_data(){

        $query = "SELECT * FROM students";

        if(mysqli_query($this->conn, $query)){
            $returndata = mysqli_query($this->conn, $query);
            return $returndata;
        }
    }


    public function display_data_by_id($id){

        $query = "SELECT * FROM students WHERE id=$id";

        if(mysqli_query($this->conn, $query)){
            $returndata = mysqli_query($this->conn, $query);
            $studentdata =mysqli_fetch_assoc($returndata);
            return $studentdata;
        }
    }

    public function update_data($data){
        $std_name = $data['u_std_name'];
        $std_roll = $data['u_std_roll'];
        $std_id = $data['std_id'];
        $std_img = $_FILES['u_upload_img']['name'];
        $tmp_name = $_FILES['u_upload_img']['tmp_name'];

        $query = "UPDATE students SET Name='$std_name',Roll=$std_roll,img='$std_img' WHERE id=$std_id";

        if(mysqli_query($this->conn, $query)){
            move_uploaded_file($tmp_name, 'upload/'.$std_img);
            return "Information Updated Successfully";
        }
    }


}


?>