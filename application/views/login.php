<?php
if(isset($keterangan)){
echo"$keterangan";
}

?>
<form method="post" action="<?php echo site_url()?>main/act_login/">
                      
                          <table cellpadding="0" cellspacing="0" align="center" id="masuk" border='0'>
    
                              <tr>
                                  <td rowspan="4"><img src="<?php echo site_url();?>asset/images/lock.png"/></td>
                                  <td colspan="2"><small><h2>Login Administrator</h2></small></td>
                              </tr>

                              <tr>
                                  <td><small><h5>Username</h5></small></td>
                                  <td><input type="text" name="username" placeholder="Username" class="form_text" value="<?php echo set_value('username')?>"/> <?php echo form_error('username'); ?></td>
                              </tr>

                              <tr>
                                  <td><small><h5>Password</h5></small></td>
                                  <td><input type="password" name="password" placeholder="Password" value="<?php echo set_value('password')?>"/><?php echo form_error('password'); ?></td>
                              </tr>

                              <tr>
                                  <td></td>
                                  <td><input type="submit" class='tiny button small radius' value='Login' name='login'/></td>
                              </tr>
                          </table>
          </form>