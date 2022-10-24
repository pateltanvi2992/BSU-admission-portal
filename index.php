<?php 
session_start();
include('header.php');
include_once("db_connect.php");
?>
<body>
<title>BSU Admission</title>
<script type="text/javascript" src="script/ajax.js"></script>

<div class="ScriptTop">
    <div class="rt-container">
        <div class="col-rt-4" id="float-right">
 
            <!-- Ad Here -->
            
        </div>
        <div class="col-rt-2">
            <ul>
                <li><a href="https://www.bowiestate.edu/" title="Bowie State University"> Bowie State University </a></li>
                <li><a href="https://www.bowiestate.edu/" title="Bowie State University" style="right;"> Staff Login </a></li>
            </ul>
        </div>
    </div>
</div>

<header class="ScriptHeader">
    <div class="rt-container">
        <div class="col-rt-12">
            <div class="rt-heading">
                <h1>PREPARE FOR A LIFE</h1>
                <p>Bowie State University</p>
            </div>
        </div>
    </div>
</header>
<section>
    <div class="rt-container">
          <div class="col-rt-12">
              <div class="Scriptcontent">
                <form class="codehim-form">
                    <div class="form-title">
                        <div class="gr-bg"><img src="img/bsu-logo.svg" width="100" height="100"/>
                        <i class="fa"></i>
                        </div>
                 <h2> Applicant login </h2>
                        </div>
                        <?php if (isset($_SESSION['user_id'])) { ?>
                        <li><p class="navbar-text"><strong>Welcome!</strong> You're signed in as <strong><?php echo $_SESSION['user_name']; ?></strong></p></li>
                        <li><a href="logout.php">Log Out</a></li>
                        <?php } else { ?>
                        <li><h1><a href="login.php">Login</a></h1></li>
                        <li><h1><a href="register.php">Sign Up</a></h1></li>
                        <?php } ?>
                </form>
            </div>
        </div>
    </div>
</section>
			

</body>
<?php include('footer.php');?> 
