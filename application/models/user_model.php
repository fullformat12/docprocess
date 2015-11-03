<?php
Class User_model extends CI_Model
{
    function login($username, $passwd)
    {
        $this -> db -> select('id, username, password');
        $this -> db -> from('user');
        $this -> db -> where('username',$username);
        $this -> db -> where('password',MD5($passwd));

        $query = $this -> db -> get();

        if($query -> num_rows() == 1)
        {
            return $query->result();
        }
        else
        {
            return false;
        }

    }
    function check_username_exist($email){
        $this -> db -> select('email');
        $this -> db -> from('user');
        $this -> db -> where('email',$email);

        $query = $this -> db -> get();

        if($query -> num_rows() > 0)
        {
            return false;
        }
        else
        {
            return true;
        }
    }
    function register($email,$real_name,$passwd){
        $date = date('Y-m-d H:i:s');
        $data = array(
            'email' => $email,
            'real_name' => $real_name,
            'passwd' => $passwd,
            'crtdate' => $date
        );
        $query = $this->db->insert('user',$data);
        if($query){
            return true;
        } else {
            return false;
        }
    }
}
?>