<?php 
  session_start();
  include_once "php/config.php";
  if(!isset($_SESSION['reg_no'])){
    header("location: login.php");
  }
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="students">
      <header>
        <div class="content">
          <?php 
            $sql = mysqli_query($conn, "SELECT * FROM students WHERE reg_no = {$_SESSION['reg_no']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
          <img src="php/images/<?php echo $row['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row['stud_firstname']. " " . $row['stud_lastname'] ?></span>
            <p><?php echo $row['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['reg_no']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an student to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="students-list">
  
      </div>
    </section>
  </div>

  <script src="javascript/students.js"></script>

</body>
</html>
