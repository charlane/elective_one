<!-- Footer Start -->
<footer>
    <div class= "container">        
        <div class="footer-top">
            <p>Stay connected!</p> 
            <a href="#">
                <img alt= "fb" src="<?php echo base_url('resources/images/fb.png'); ?>" class="contacticon">
            </a>
            <a href="www.facebook.php">
                <img alt="google" src="<?php echo base_url('resources/images/gmail.png');?>" class="contacticon">
            </a> 
            <br/>
            <p> We'll contact you shortly! </p>
        </div>
        <div class = "footer-bot">
            <strong> All rights reserved GoTeam &copy; 2017.</strong></div>
        </div>
    </footer>
 <!-- Footer End -->
    <script type="text/javascript">$(document).on('click', '.panel-heading span.clickable', function(e){
        var $this = $(this);
        if(!$this.hasClass('panel-collapsed')) {
            $this.parents('.panel').find('.panel-body').slideUp();
            $this.addClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
        } else {
            $this.parents('.panel').find('.panel-body').slideDown();
            $this.removeClass('panel-collapsed');
            $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
        }
    })</script>
    



</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url('resources/vendors/bootstrap/js/jquery-1.10.2.js') ;?>"
    type="text/javascript"></script>
<script src="<?php echo base_url('resources/vendors/bootstrap/js/bootstrap.min.js') ;?>"
    type="text/javascript"></script>

<script src="<?php echo base_url('resources/js/loginsignup.js'); ?>"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="<?php echo base_url('resources/vendors/bootstrap/js/light-bootstrap-dashboard.js') ;?>"
    type="text/javascript"></script>
<script src="<?php echo base_url('resources/vendors/bootstrap/js/bootstrap-toggle.min.js') ;?>"
    type="text/javascript"></script>
    
</html>