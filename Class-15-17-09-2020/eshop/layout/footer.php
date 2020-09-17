<div class="footer-top">
    <div class="container">
        <div class="row">
        <div class="col-md-4">
            <h3>About</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod vel neque obcaecati libero ratione tempore earum maxime temporibus saepe magni doloribus, quas magnam perferendis pariatur, non, architecto molestias sunt voluptatum!</p>
        </div>
        <div class="col-md-4">
            <h3>Quick links</h3>
            <ul class="list-unstyled">
                <li><a href="">Home</a></li>
                <li><a href="">Products</a></li>
                <li><a href="">contact</a></li>
                <li><a href="">blog</a></li>
            </ul>
        </div>
        <div class="col-md-4">
            <h3>Follow us</h3>
             <div class="social-links">
               <a href=""><i class="icofont icofont-social-facebook fb"></i></a> 
                <i class="icofont icofont-social-twitter tw"></i>
                <i class="icofont icofont-social-skype skp"></i>
                <i class="icofont icofont-social-linkedin linkIn"></i>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="footer-bottom">
      <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>All right reserved &copy;2018</p>
            </div>
            <div class="col-md-6">
                <a href="">admin@admin.com</a>
            </div>
        </div>
    </div>
</div>
 
        <script src="js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script>
            $(document).ready(function(){

                $('#myform').submit(function(event){
                     event.preventDefault();

                        var name = $('#inputname').val();
                        var email = $('#inputEmail').val();
                        var mobile = $('#inputmobile').val();
                        var message = $('#message').val();                     

                        if (name == "" || email == "" || message == "" || mobile=="") {
                            alert('Field must not be empty!');
                            return false;
                        }

                     var formdata = $('#myform').serializeArray();
                     
                       console.log(formdata);

                     $.post(
                           $('#myform').attr('action'),                           
                             formdata,
                             function(data){
                                $('#success').html(data);
                                $('#success').fadeOut(5000);
                                $('input').val("");
                                $('textarea').val("");
                        });
                })
            })
        </script>

        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>
