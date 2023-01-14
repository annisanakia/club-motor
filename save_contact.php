<?php
    require 'database.php';
    $db = new database();

    if(isset($_POST['name']))
    {
        $name = strip_tags($_POST['name']);
        $phone_no = strip_tags($_POST['phone_no']);
        $email = strip_tags($_POST['email']);
        $detail = strip_tags($_POST['detail']);
        
        $tabel = 'contact';
        $data[] = array(
            'name'	    	=>$name,
            'phone'	    =>$phone_no,
            'email'	    	=>$email,
            'detail'		=>$detail
        );
        $db->tambah_data($tabel,$data);
        echo '<script>alert("Tambah Contact Berhasil");window.location="contact.php"</script>';
    }
?>