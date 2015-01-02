            <footer id = "contact" class = "dark-blue border-bottom">
                
                <h2>Contact Us</h2>
                
                <div class = "fifty-percent">
                    
                    <div class = "fifty-percent headshot-wrapper" >
                        <img src="img/headshot.jpg" alt="headshot" width="235" height="235">
                        <div class = "clear"></div>
                    </div>
                    
                    <div class = "fifty-percent contact-details">
                        <p class = "name">Mason Sears</p>
                        <p>Sales & Marketing</p>
                        <p><a href = "#">msears@sfmarina.com</a></p>
                        <p>207.347.4237</p>
                        <p class = "address"><span class = "break">6364 Allmondsville Rd</span> Gloucester, VA 23061</p>
                    </div>
                    
                </div>
                
                <div class = "fifty-percent">
	                <form class="quform" action="quform/process-message.php" method="post" enctype="multipart/form-data" onclick="">
                        <div class = "fifty-percent">
                            <input placeholder="Name">
                            <input placeholder="Company">
                            <input placeholder="Street, City, State, Zip">
                            <input placeholder="Phone">
                            <input placeholder="Email">
                        </div>
                        <div class = "fifty-percent">
                            <span class="custom-dropdown">
                                <select>
                                    <option value="" disabled selected>Select a Product</option>
                                    <option value = "Marina Systems">Marina Systems</option>
                                    <option value = "Industrial Docking Systems">Industrial Docking Systems</option>  
                                    <option value = "Floating Breakwaters">Floating Breakwaters</option>
                                    <option value = "Specialized Structures and Floating Foundations">Specialized Structures and Floating Foundations</option>
                                </select>
                            </span>
                            <textarea id = "textarea" placeholder = "What can we help you with?"></textarea>
                            <div class = "quform-inner"></div>
                            
                            <div class = "centered btn-wrapper quform-submit"><a type = "submit" class = "rounded btn" href = "#">Submit</a></div>
                        </div>
                    </form>
                </div>
                
                <div class = "clear"></div>
                
                <div class = "tagline">
                    
                    <p class = "concrete">Concrete</p>
                    <p>Products, Reputation, Relationships</p>
                    
                </div>
                
            </footer>
            
        </div> <!-- END MAIN WRAPPER -->
        

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<!--         <script src="js/vendor/foundation-5.3.0%202/js/foundation.min.js"></script> -->
        <script src="js/vendor/pushy/pushy.min.js"></script>
        <script src="js/main.js"></script>
                     

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
