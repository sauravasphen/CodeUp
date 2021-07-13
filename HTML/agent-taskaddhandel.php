<?php
session_start();
include("connection.php");
      $id=$_POST['username'];
      $subject=$_POST['subject'];
      $task=$_POST['task'];
      $report=$_POST['report'];

if(isset($_POST['adduser-btn'])){
            $sql= "INSERT INTO Task(company_id,subject,task,report,issued_date)
            VALUES($id,'$subject','$task','$report',CURRENT_DATE())";


            if(mysqli_multi_query($conn,$sql)){
              // echo"task added successfully";
              header("location:agent-taskview.php");
            }
            else{
              echo "error:".$sql."<br>".mysqli_error($conn);
            }
    }

    if(isset($_POST['edit-btn'])){

      $task_id=$_POST['task-id'];
      $subject=$_POST['subject'];
      $task=$_POST['task'];
      $report=$_POST['report'];
      $status=$_POST['status'];


        $sql ="UPDATE Task
               SET report='$report', status='$status', closed_date=CURRENT_DATE()
               WHERE task_id='$task_id' ";

               if(mysqli_multi_query($conn,$sql)){
                 echo"task added successfully";
                 header("location:agent-taskview.php");
               }
               else{
                 echo "error:".$sql."<br>".mysqli_error($conn);
               }


    }



     mysqli_close($conn);

  ?>
