<?php
session_start();



    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "CodeUp_db";


    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      $cname=$_POST['cname'];
      $subject=$_POST['subject'];
      $task=$_POST['task'];
      $report=$_POST['report'];
      $status=$_POST['status'];

      $sql="select * FROM Company
            where company_name='$cname'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_assoc($result);
            if($row['company_name']===$cname){
              $company_id=$row['company_id'];
            }
            else{
              echo "error:".$sql."<br>".mysqli_error($conn);
            }

if(isset($_POST['agent-create-btn'])){




            $sql= "INSERT INTO Task(company_id,subject,task,report,status,issued_date)
            VALUES($company_id,'$subject','$task','$report','$status',CURRENT_DATE())";


            if(mysqli_multi_query($conn,$sql)){
              echo"task added successfully";
              header("location:agent-taskadd.php");
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
