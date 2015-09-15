<!-- Top bar !-->
<nav class="top-bar" data-topbar>
  <ul class="title-area">
    <li class="name">
      <h1><a href="<?php echo base_url();?>">Testing SQL Injection Codeigniter</a></h1>
    </li>
    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
    	<li><a href><?php echo date('D').", ".date('d / m / Y');?></a></li>
    	
      	<li class="has-dropdown">
        	<a href=''>
          		News
        	</a>
	        	<ul class="dropdown">
                <?php 
                  foreach ($cat_news as $data) {
                    echo"<li><a href=".site_url()."main/cat_news/$data->name_cat>$data->name_cat</a></li>";
                  }
                ?>
            </ul>
      	</li>
      	<li class="active">
          <?php 
            if($this->session->userdata('islogin')==FALSE){
              echo"<a href=".site_url()."main/login>Login</a>";
            }else{
              echo"<a href=".site_url()."main/logout>Logout</a>";
            }
          ?>
        </li>
    </ul>
  </section>
</nav>
<!-- End Top bar !-->
<br><br>