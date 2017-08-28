<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

       $to      = "brendanokeefe96@gmail.com";
       $subject = "New Swift-Carr Registration";
       $body    ="testing";

       $success = mail($to, $subject, $body);

       if ($success) {
           echo json_encode(['status' => 1]);

       } else {
           echo json_encode(['status' => 0]);
       }
   } else {
       echo json_encode(['status' => 0]);

}
