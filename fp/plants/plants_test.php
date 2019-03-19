<?PHP include '../includes/config.php';?>
<?PHP include '../includes/header.php';?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- PAGE ID -->
    <div class="section group page-ID-container">
        <p class="col span_6_of_6 page-ID">Home > Plants</p>
    </div>
    <div class="section group main-aside">
        <!-- START COL -->
        <main class="col span_6_of_6 plant-gallery">
<!--          <div>-->
<!--            <select>-->
<!--              <option>Choose Category</option>  try to remove this option later-->
<!--              <option value="All">All</option>-->
<!--              <option value="Low Light">Low Light</option>-->
<!--              <option value="High Light">High Light</option>-->
<!--              <option value="Drought Tolerant">Drought Tolerant</option>-->
<!--              <option value="Pet Friendly">Pet Friendly</option>-->
<!--              <option value="Size: Lg">Size: Lg</option>-->
<!--            </select>-->
<!--          </div>-->
          <fieldset class="sizes">
            <legend>Sizes</legend>
            <input class="show-filter" type="checkbox" name="x-large" value="x-large" />
            <label class="show-filter">X-Large</label><br />
            <input class="show-filter" type="checkbox" name="large" value="large" />
            <label class="show-filter">Large</label><br />
            <input class="show-filter" type="checkbox" name="medium" value="medium" />
            <label class="show-filter">Medium</label><br />
            <input class="show-filter" type="checkbox" name="small" value="small" />
            <label class="show-filter">Small</label>
          </fieldset>
          <fieldset class="light-level">
            <legend>Light Level</legend>
            <input class="show-filter" type="checkbox" name="low-light" value="low-light" />
            <label class="show-filter">Low Light</label><br />
            <input class="show-filter" type="checkbox" name="high-light" value="high-light" />
            <label class="show-filter">High Light</label>
          </fieldset>
          <fieldset class="misc">
            <legend>Misc</legend>
            <input class="show-filter" type="checkbox" name="pet-friendly" value="pet-friendly" />
            <label class="show-filter">Pet friendly</label><br />
            <input class="show-filter" type="checkbox" name="drought-tolerant" value="drought-tolerant" />
            <label class="show-filter">Drought Tolerant</label>
          </fieldset>

<!--          <div class="show date-01 date-02 venue-01 genre-01 bx">-->
<!--            Show #1 (date 1 &amp; 2, venue 1, genre 1)-->
<!--          </div>-->
<!--          <div class="bx show date-03 date-04 venue-02 genre-02">-->
<!--            Show #2 (date 3 &amp; 4, venue 2, genre 2)-->
<!--          </div>-->
<!---->
<!--          <div class="show date-03 venue-02 genre-01">date3 venue2 genre 1</div>-->
<!---->
<!--          <div class="show date-04 venue-02 genre-01">date4 venue2 genre 1</div>-->


          <section class="no-touch">

                <div class="wrap">
                    <div class="c-ll box large low-light drought-tolerant">
                        <div class="boxInner">
                            <a href="chinese_money_plant.php">
                                <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/1.jpg"
                                     alt = "fill" title = "fill"/>
                            </a>
                            <div class="titleBox">Chinese Money Plant</div>
                        </div>
                    </div>

                    <div class="pet-friendly small c-hl box">
                        <div class="boxInner">
                            <a href="#">
                                <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/2.jpg"
                                     alt = "fill" title = "fill" />
                            </a>
                            <div class="titleBox">Purple wildflowers</div>
                        </div>
                    </div>
                    <div class="c-pf x-large low-light box">
                        <div class="boxInner">
                            <a href="#">
                                <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/3.jpg"
                                     alt = "fill" title = "fill" />
                            </a>
                            <div class="titleBox">A birdfeeder</div>
                        </div>
                    </div>
                    <div class="c-sz-lg low-light box">
                      <div class="boxInner">
                        <a href="#">
                          <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/10.jpg"
                               alt = "fill" title = "fill" />
                        </a>
                        <div class="titleBox">Crocus close-up</div>
                      </div>
                    </div>
                    <div class="box medium large small high-light">
                      <div class="boxInner">
                        <a href="#">
                          <img src="http://www.dwuser.com/education/content/creating-responsive-tiled-layout-with-pure-css/images/demo/4.jpg"
                               alt = "fill" title = "fill" />
                        </a>
                        <div class="titleBox">The garden shop</div>
                      </div>
                    </div>
                </div>
            </section>


        </main>
        <!-- END COL -->
    </div>
      <script>
          $(function () {
              $(':checkbox').change(function () {

                  // we need to do this in steps, so first we need to get a string of classes for each filter
                  var sizes = $('.sizes input:checked').map(function(){ return "." + this.value; }).get().join();
                  var lightLevel = $('.light-level input:checked').map(function(){ return "." + this.value; }).get().join();
                  var misc = $('.misc input:checked').map(function(){ return "." + this.value; }).get().join();


                  // start with all shows
                  var plants =  $('.box');

                  // filter for dates if we need to
                  if(sizes) {
                      plants = plants.filter(sizes);
                  }

                  // filter for venues if we need to
                  if(lightLevel) {
                      plants = plants.filter(lightLevel);
                  }

                  // filter for genres if we need to
                  if(misc) {
                      plants = plants.filter(misc);
                  }

                  // hide everything
                  $('.box').hide();
                  // show the ones we want. Pun intended
                  plants.show();
                  console.log(plants.length);



              });
          });
      </script>
<!--  <script>-->
<!--      $(document).ready(function() {-->
<!--          $("select").change(function() {-->
<!--              var category = $(this).val();-->
<!--              if (category == "Low Light") {-->
<!--                  $(".box").not(".c-ll").hide();-->
<!--                  $(".c-ll").show();-->
<!--              } else if (category == "High Light") {-->
<!--                  $(".box").not(".c-hl").hide();-->
<!--                  $(".c-hl").show();-->
<!--              } else if (category == "Drought Tolerant") {-->
<!--                  $(".box").not(".c-dt").hide();-->
<!--                  $(".c-dt").show();-->
<!--              } else if (category == "Pet Friendly") {-->
<!--                  $(".box").not(".c-pf").hide();-->
<!--                  $(".c-pf").show();-->
<!--              } else if (category == "Size: Lg") {-->
<!--                  $(".box").not(".c-sz-lg").hide();-->
<!--                  $(".c-sz-lg").show();-->
<!--              } else if (category == "All") {-->
<!--                  $(".box").show();-->
<!--              }-->
<!--          });-->
<!--      });-->
<!--  </script>-->

    <!--START FOOTER HERE-->
<?PHP include '../includes/footer.php';?>