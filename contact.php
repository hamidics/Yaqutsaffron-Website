<?php
include "header.php";
?>

    <div id="tooplate_main">
    	<div id="tooplate_content"  class="clear">
        <table width="100%" align="center"><tr><td  >
          <div style="width:470px">
          <h3>Our Location</h3>
          <b>Address:</b> 4rth Floor, Kasra Business Center, Chawk - e - Golha, Herat, Afghanistan<br/>
          <b>Tel:</b> +93-786-37 9003<br />
          <b>Email:</b> info@yaqutsaffron.com
          <br/><br/><br/>
          <br/>
        </div>
          <div style="width:400px"class="img_border img_border_b">
        <iframe width="400" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d739.5360158145946!2d62.19463983204721!3d34.348685801547255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f3ce6e65389a00d%3A0xada4dffab182919b!2sGolha+Sq%2C+Herat%2C+Afghanistan!5e0!3m2!1sen!2s!4v1451488386906"></iframe>
      </div>
            <div class="clear h30"></div>
          </div>
          </td>
          <td>
            <div  id="contact_form">
                  <h3>Our Contact Form</h3>
                  <form method="post" name="contact" action="#">
                      <label for="author">Name:</label>
                      <input type="text" id="author" name="author" class="required input_field" />
                      <div class="clear"></div>
                      <label for="email">Email:</label>
                      <input type="text" id="email" name="email" class="validate-email required input_field" />
                      <div class="clear"></div>
                      <label for="subject">Subject:</label>
                      <input type="text" id="subject" name="subject" class="required input_field" />
                      <div class="clear"></div>
                      <label for="text">Message:</label>
                      <textarea id="text" name="text" rows="0" cols="0" class="required"></textarea>
                      <div class="clear"></div>
                      <input type="submit" name="Submit" value="Submit" class="submit_button float_right" />
                  </form>
              </div>


        </td>
      </tr>
    </table>

        </div>

    </div>    <!-- END of tooplate_main -->


<?php
include "footer.php";
?>
</body>
</html>
