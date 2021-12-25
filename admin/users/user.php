<?php
include '../includes/connection.php';


class User extends Database {

    public function all()
    {
        $sql = "SELECT * FROM users";
    
        if($query = mysqli_query($this->conn,$sql)){
            $result = mysqli_fetch_assoc($query);
        }

        return $result;

        mysqli_close($this->conn);
    }


    public function find($id){
        $sql = "SELECT * FROM users WHERE id='$id' LIMIT 1";

        if($query = mysqli_query($this->conn,$sql)){
            $result = mysqli_fetch_assoc($query);
        }

        return $result;

        mysqli_close($this->conn);
    }


    public function create($fname,$uname,$email,$reg_date){
        $sql = "INSERT INTO users('firstname' 'username', 'email', 'reg_date') VALUES ('$fname','$uname','$email','$reg_date') ";

        if(mysqli_query($this->conn,$sql)){
            $result = true;
        }

        return $result ?? false;

        mysqli_close($this->conn);
    }


    public function update($id,$fname,$uname,$email,$reg_date){
        $sql = "UPDATE users SET firstname='$fname',username='$uname',email='$email',reg_date='$reg_date' WHERE id = '$id'";

        if(mysqli_query($this->conn,$sql)){
            $result = true;
        }

        return $result ?? false;

        mysqli_close($this->conn);
    }


    public function delete($id)
    {
        $sql = "DELETE FROM users WHERE id='$id'";
        if(mysqli_query($this->conn,$sql)){
            $result = true;
        }

        return $result ?? false;

        mysqli_close($this->conn);
    }


    public function destroy($ids)
    {
        $sql = "DELETE FROM users WHERE id IN '$ids'";
        if(mysqli_query($this->conn,$sql)){
            $result = true;
        }

        return $result ?? false;

        mysqli_close($this->conn);
    }
    
}


$user = new User();
