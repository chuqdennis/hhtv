<?php
        include_once ("admin.php");
        
        $site = new admin;
        $name = $site->posty("name");
        $style = $site->posty("style");
        $category = $site->posty("category");
        $ig_link = $site->posty("ig_link");
        $email = $site->posty("email");
        $bio = $site->posty("bio");
        $address = $site->posty("address");
        $state = $site->posty("state");
        $phone = $site->posty("phone");
        $bus_email = $site->posty("bus_email");
        $pass_char = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $n1 = $_FILES['file_1']; 
        $n2 = $_FILES['file_2'];
        $n3 = $_FILES['file_3']; 
        $designer_id= substr(str_shuffle($pass_char), 0, 7);
        $file_1= substr(str_shuffle($pass_char), 0, 15).'.jpg';
        $file_2= substr(str_shuffle($pass_char), 0, 15).'.jpg';
        $file_3= substr(str_shuffle($pass_char), 0, 15).'.jpg';
        $rphoto=$_FILES['file_1']['tmp_name'];
        $rphoto1=$_FILES['file_2']['tmp_name'];
        $rphoto2=$_FILES['file_3']['tmp_name'];
        $target="../designers/images/";
        $check = $site->checkUserDuplicate($email,$phone,$bus_email);
        if ($check > 0 ) {
            echo "Sorry this email address or phone number already exist";
        }else{
            if ($n1 != '') {
              move_uploaded_file($rphoto, $target.$file_1);  
            }if ($n2 != '') {
              move_uploaded_file($rphoto1, $target.$file_2);  
            }if ($n3 != '') {
              move_uploaded_file($rphoto2, $target.$file_3);  
            }
            $date = date('d-M-Y');
            $query = "INSERT INTO designers (designer_id, designer_name, style, gender, ig_link, email, pc_1, pc_2, pc_3, bio, store_addr, state, bus_phone, bus_email, date_joined) VALUES('$designer_id','$name','$style','$category','$ig_link','$email','$file_1','$file_2','$file_3','$bio','$address','$state','$phone','$bus_email','$date')";
            $ins = $site->siteQuery($query);
            if ($ins == 'done') {
                echo 'done';
            }else{
                echo $ins;
            }
        }


?>