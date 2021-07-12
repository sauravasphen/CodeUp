<?php
  SESSION_start();
  if (isset($_SESSION['admin_name']) && isset($_SESSION['admin_id'])){
    include('connection.php');
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <link rel="stylesheet" href="../css/Portal-Navigation.css">
     <link rel="stylesheet" href="../css/Admin-Portal.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
     <script type="text/javascript" src="../JS/query-pop.js"></script>
     <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
   </head>
   <body>
     <!-- ************* Navigation ******************* -->
     <div class="navigation-container">
       <ul>
         <li>
           <a href="Admin-Dashboard.php">
             <span class="ti-panel"></span>
             <span>Dashboard</span>
           </a>
         </li>
         <li class="active">
           <a href="Admin-NewQueries.php">
             <span class="ti-email"></span>
             <span>New Queries</span>
           </a>
         </li>
         <li>
           <a href="Admin-AgentView.php">
             <span class="ti-user"></span>
             <span>Agents</span>
           </a>
         </li>
         <li>
           <a href="Admin-CompanyView.php">
             <span class="ti-briefcase"></span>
             <span>Companies</span>
           </a>
         </li>
         <li>
           <a href="Admin-TaskView.php">
             <span class="ti-check-box"></span>
             <span>Tasks</span>
           </a>
         </li>
         <li>
           <a href="Admin-AddUser.php">
             <span class="ti-plus"></span>
             <span>Add User</span>
           </a>
         </li>
         <li>
           <a href="logout.php">
             <span class="ti-back-left"></span>
             <span>Logout</span>
           </a>
         </li>
       </ul>
     </div>

     <!-- ***************** Body ********************** -->
     <div class="content">
       <div class="grid-container">
         <div class="grid-box query-box">
           <h2>New Queries</h2>
           <?php
           $sql="SELECT *FROM contactus";
           $query=mysqli_query($conn,$sql);
           while($res=mysqli_fetch_array($query)){
             ?>
           <div class="query-item">
             <div class="query-info">
            <h3><?php echo $res['subject']; ?></h3>
             <?php echo $res['contactus_id']; ?>
             <br>From <?php echo $res['company_name']; ?>
            </div>
            <div class="query-date">
              <?php echo $res['mgs_date']; ?>
            </div>
            <div id="query-item-pop" class="query-item-pop">
              Name: <?php echo $res['F_name']; ?>
              <br>Company: <?php echo $res['company_name']; ?>
              <br>Date: <?php echo $res['mgs_date']; ?>
              <br>Subject: <?php echo $res['subject']; ?>
              <br>Message: <?php echo $res['message']; ?>
              <br>Phone No: <?php echo $res['contact_num']; ?>
              <br>Message: <?php echo $res['Email']; ?><br>
              <span class="action_btn">
													<a href="#" class="delete delete-btn" data-id="<?php echo $res["contactus_id"]; ?>">Delete</a>
												</span>
            </div>
         </div>
       <?php }
         ?>
         </div>
       </div>
      </div>
      <!-- modal starts here -->
				<div id="delete_model" class="modal">
						<i class="fas fa-times modal-close"></i>

						<div class="modal-cont">
							<h2>Are you sure you want to delete?</h2>
						</div>

						<form action="delete_user.php" method="POST">
								<input type="hidden" id="Deliting_id" name="Deliting_id">
								<button class="modal-delete-btn" name="delete">Delete</button>
						</form>
				</div>

	         <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"></script>

				<script>
						$(document).ready(function(){
							$("#delete_model").hide();
						  $(".delete-btn").click(function(){
						    $("#delete_model").toggle();
						  });
						  $(".modal-close").click(function(){
						    $("#delete_model").hide();
						  });
						  $(document).on("click",".delete-btn", function(){
						            var Id = $(this).data("id");
						            $("#Deliting_id").val(Id);
						        });
						});
				</script>

    </body>
  </html>
  <?php
   }
   else{
    header("location:mainpage.php");
    exit();
  }
  ?>
