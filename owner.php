<?php 
include("header.php");
?> 
<!-- end header -->
            <section class="slider_section">
                <div class="banner_main">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-2 padding_left0">
                               
                            </div>
                                <div id="contact" class="contact">
        <div class="container">

            <div class="row">

			<div class="col-2"></div>
				<div class="col-10 col-xl-10">
				
                    <form class="contact_bg" method="POST" action="owner_action.php">
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12">
                                <select class="contactus" name="status">
								<option selected>Choose Owners list</option>
								<option value="living">Currently Living</option>
								<option value="left">Previous owners</option>
								</select>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <button class="send">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
                        </div>
                    </div>
                </div>
        
           </section>
        </div>
    </header>

<?php 
include("footer.php");
?> 