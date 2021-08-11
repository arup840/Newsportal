 <nav  class="navbar fixed-top navbar-expand-lg navbar-dark bg-white fixed-top">
      <div   class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">

                      <ul  class="navbar-nav ml-auto">
<?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
while($row=mysqli_fetch_array($query))
{
?>

                    <li class="nav-item">
                      <a style="color:black;" class="nav-link" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?>&nbsp</a>
                    </li>
<?php } ?>
                  
          
      <!--       <li class="nav-item">
              <a class="nav-link" href="about-us.php">About</a>
            </li>
             
             <li class="nav-item">
              <a class="nav-link" href="contact-us.php">Contact us</a>
            </li> -->
  
<li class="nav-item">
   <form name="search" action="search.php" method="post">
              <div class="input-group">
           
        <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Go!</button>
                </span>
              </form>

</li>

  
          </ul>
        </div>
      </div>
      
    </nav>