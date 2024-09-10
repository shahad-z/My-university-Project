<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
<a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
	<h1 class="m-0 text-primary">Craftify</h1>
</a>

    <div class="collapse navbar-collapse" id="navbarCollapse">
       <div class="navbar-nav ms-auto p-4 p-lg-0">
        <a class="nav-item nav-link " href="index.php">Home</a>
        <a class="nav-item nav-link " href="products.php">Products</a>
      <?php
	  if(!isset($_SESSION)) 
		  session_start(); 
	  
	  if(!isset($_SESSION['customer_id'])) {
        echo '
                <a class="nav-item nav-link " href="customer_login.php">Customer Login</a>
             
                <a class="nav-item nav-link " href="customer_register.php">Customer Register</a>
             ';
		} 
	  else {
	     echo '
                  <a class="nav-item nav-link " href="customer_orders.php">Orders</a>
              
   
                <a class="nav-item nav-link " href="customer_profile.php">Profile</a>
             
                <a class="nav-item nav-link " href="customer_logout.php">Logout</a>
             ';		  	  
      }
      ?>
	  </div>  
  </div>
</nav>

