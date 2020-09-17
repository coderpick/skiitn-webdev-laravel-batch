<?php 
    include 'layout/header.php';
 ?>
 
   <div class="container">
    <div class="content">
      <div class="support">
        <div class="support_desc">
          <h3>Live Support</h3>
          <p><span>24 hours | 7 days a week | 365 days a year &nbsp;&nbsp; Live Technical Support</span></p>
          <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
        </div>
          <img src="img/contact.png" alt="" />
        <div class="clear"></div>
      </div>
      </div>
     </div>
    
<section id="contact-area" class="mb-5">
  <div class="container" style="background-color: $ddd">
      <div class="row">
         <div class="col-md-8">
             <div class="contact-form">
                  <h3 class="text-center">Contact us</h3>
                   
                  <form action="fetch_data.php" method="post" id="myform">
                    <div class="form-group">
                      <label for="inputname">Name</label>
                      <input type="text" name="name" id="inputname" i class="form-control" placeholder="Enter name">
                    </div>  
                     <div class="form-group">
                      <label for="inputEmail">Email</label>
                      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Enter Email">
                    </div> 
                      <div class="form-group">
                      <label for="inputmobile">Mobile no.</label>
                      <input type="number" name="mobile" id="inputmobile" class="form-control" placeholder="Enter mobile no.">
                    </div> 
                     <div class="form-group">
                      <label for="message">Message</label>
                      <textarea name="message" class="form-control" id="message" rows="6"></textarea>
                    </div> 
                    <button class="btn btn-success" name="submit" type="submit">Submit</button>
                  </form>


                  <div id="success"></div>
             </div>
          
         </div>
        
         <div class="col-md-4">
            <h3 class="text-center">Company Address</h3>
                        <p>500 Lorem Ipsum Dolor Sit,</p>
                  <p>22-56-2-9 Sit Amet, Lorem,</p>
                  <p>USA</p>
              <p>Phone:(00) 222 666 444</p>
              <p>Fax: (000) 000 00 00 0</p>
            <p>Email: <span>info@mycompany.com</span></p>
              <p>Follow on: <span>Facebook</span>, <span>Twitter</span></p>
         </div>
       </div>
     
      </div>
  </section>


<?php

  include "layout/footer.php";
?>