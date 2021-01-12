<?php
class registery{
    static public function getUser($c_ip,$c_fname,$c_lname,$c_email,$c_pass,$c_country,$c_city,$c_contact,$c_address){
        $insert_c = "INSERT INTO customers ( customer_ip, customer_fname, customer_lname, customer_email, customer_pass, customer_country,
		customer_city, customer_contact, Address) 
					VALUES (:c_ip,:c_fname,:c_lname,:c_email,:c_pass,:c_country,:c_city,:c_contact,:c_address)";
        $stmt=DB::connect()->prepare($insert_c);
        $stmt->execute(array(
            ':c_ip' =>$c_ip,
            ':c_fname' =>$c_fname,
            ':c_lname' =>$c_lname,
            ':c_email' =>$c_email,
            ':c_pass' =>$c_pass,
            ':c_country' =>$c_country,
            ':c_city' => $c_city,
            ':c_contact' => $c_contact,
            ':c_address' => $c_email
        ));
    }
}