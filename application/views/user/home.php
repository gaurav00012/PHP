<?php include "header.php" ?>
 <body>


  
  <div class = "img_one">
	  <div class = "col m12 s6">
	  	<div class="container" style = "height:100%; ">
	  	<div class="row">
	  	<div class = "col m12 s12">
	  	<h3 class="header center text_color text-lighten-2">A small intro of Gaurav</h3>
        <div class="row">
        <div class="col m6 s12">
          <div class="card blue-grey darken-1" style = "background-color:#369954 !important;">
            <div class="card-content white-text">
              <span class="card-title"><center><i class="fa fa-briefcase" aria-hidden="true"></i> <u>WORK</u></center></span>
              <p>1) Web Developer at BondPlus. (12/2017 – Present) </p>
              <p>2) Intern at TCS in ION process. (06/2015 – 08/2015) </p>
              <p>3) Trainee in Android from V India Infosystem Pvt Ltd. (06/2014 - 08/2014) </p>
             
            </div>
            <div class="card-action">
              <a href="<?php echo site_url(); ?>/user/home/work" style="color:#F5DE92">Click here for more information</a>
              
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="card blue-grey darken-1" style = "background-color:#369954 !important;">
            <div class="card-content white-text">
              <span class="card-title"><center><i class="fa fa-laptop" aria-hidden="true"></i> <u>SKILLS</u></center></span>
              <p>1) Tech Skills - PHP, MYSQL, Codeigniter, HTML5, AJAX, C++, Javascript, jQuery, BOOTSTAP, RESTFUL API, Youtube Data API</p><br>

              
            </div>
            <div class="card-action">
              <center><span class="badge black align-left" style="color: #F5DE92" data-badge-caption="IMPROVING SKILLS EVERYDAY"></span></center>
              <br>
            </div>
            
          </div>
        </div>
      </div>
         <div class="row">
        <div class="col s12 m6">
          <div class="card blue-grey darken-1" style = "background-color:#369954 !important;">
            <div class="card-content white-text">
              <span class="card-title"><center><i class="fa fa-tasks" aria-hidden="true"></i> <u>PROJECTS</u></center></span>
              <p>1) Developed and debug modules in AUMPARTNERS.</p>
              <p>2) Developed Expense manger app using SQLITE.</p>
              <p>3) Developed Content Base Image Retrival in JAVA.</p>

            </div>
            <div class="card-action">
              <a href="<?php echo site_url(); ?>/user/home/projects" style="color:#F5DE92">Click here for more information</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="card blue-grey darken-1" style = "background-color:#369954 !important">
            <div class="card-content white-text">
              <span class="card-title"><center><i class="fa fa-envelope" aria-hidden="true"></i> <u>WANT TO GET IN TOUCH</u></center></span>
              <p>E-Mail at AGGARWAL.GAURAV611@GMAIL.COM</p><br><br>
              
        	
      
            </div>
            <div class="card-action">
             <a href="https://www.linkedin.com/in/gaurav-aggarwal-7b70a5100/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true" style="color:#F5DE92"></i></a>
             <a href="https://www.facebook.com/gaurav00003" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true" style="color:#F5DE92"></i></a>
             <a href="https://plus.google.com/u/0/101498268347474296799" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true" style="color:#F5DE92"></i></a>
            </div>
          </div>
        </div>
      </div>
       </div>

       <div class = "col m12 s6">
	  	
         	
      
       </div>
	  	</div>
</div>
	  </div>
  </div>
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>LOGIN</h4>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate">
          <label for="email">E-Mail</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>
    </div>
    <div class = "row">

     	<div class = "col m6 s12 push-m3">
     		<a class="waves-effect waves-light btn btn-large">SIGUP</a>
     	</div>
     	<div class = "col m6 s12">
     		<a class="waves-effect waves-light btn btn-large">LOGIN</a>
     	</div>
    </div>
    
    <div class="modal-footer">
      
    </div>
  </div>
</body>

<?php include "footer.php"; ?>
<script>
 $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
</script>


        </html>
