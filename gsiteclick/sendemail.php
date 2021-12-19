<?php
         $to = $_POST['emailteacher'];
         $subject = "Score for sheet: ".$_POST['sheetname'];
         
         $message = "<b>Score of: ".$_POST['namestudent']." for Sheet: ".$_POST['sheetname']." was: ".$_POST['score']."</b>";
         //$message .= "<h1>This is headline.</h1>";
         
         $header = "From:info@riadaamericanschool.org \r\n";
         $header .= "Cc:".$_POST['emailstudent']." \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
          //  echo "Message sent successfully...";
                        header("location: ./endofsheet.html");

         }else {
          //  echo "Message could not be sent...";
                        header("location: ./endofsheet.html");
         }
      ?>