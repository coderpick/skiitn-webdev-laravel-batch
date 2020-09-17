    
    <div class="slider-area">
        <div class="container-fluid">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <?php 
                        $getslide = $slider->showHomeSlider();
                        if($getslide){
                          $i = 0;
                          while ($row = $getslide->fetch_assoc()) {
                              
                              if($i == 0 ){
                                echo '<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>';
                              }else{
                                echo '<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>';
                              }
                              $i++;
                          }
                        }
                     ?>
                   
                   

                  </ol>
                  <div class="carousel-inner">

                        <?php 
                        $getslide = $slider->showHomeSlider();
                        if($getslide){
                          $i = 0;
                          while ($row = $getslide->fetch_assoc()) {
                              
                              if($i == 0 ){
                                echo '<div class="carousel-item active" style="background: url(admin/'.$row['image'].')no-repeat center center / cover;">
                        <div class="slider-cover">                    
                          <div class="single-slide-item text-center">
                              <h1>'.$row['title'].'</h1>
                              <p>'.html_entity_decode($row['details']).'</p>
                          </div>
                      </div>
                    </div>';
                              }else{
                                echo '<div class="carousel-item" style="background: url(admin/'.$row['image'].')no-repeat center center / cover;">
                        <div class="slider-cover">                    
                          <div class="single-slide-item text-center">
                              <h1>'.$row['title'].'</h1>
                              <p>'.html_entity_decode($row['details']).'</p>
                          </div>
                      </div>
                    </div>';
                        }
                              $i++;
                          }
                        }
                     ?>
                 

                 
                 
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
        </div>
    </div>