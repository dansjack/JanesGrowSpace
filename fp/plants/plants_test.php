<?PHP include '../includes/config.php';?>
<?PHP include '../includes/header.php';?>
    <!-- PAGE ID -->
    <div class="section group page-ID-container">
        <p class="col span_6_of_6 page-ID">Home > Plants</p>
    </div>
    <div class="section group main-aside">
        <!-- START COL -->
        <main class="col span_6_of_6 plant-gallery">
          <fieldset class="sizes">
            <legend>Sizes</legend>
            <input class="cb-filter" type="checkbox" name="x-large" value="x-large" />
            <label class="cb-label">X-Large</label><br />
            <input class="cb-filter" type="checkbox" name="large" value="large" />
            <label class="cb-label">Large</label><br />
            <input class="cb-filter" type="checkbox" name="medium" value="medium" />
            <label class="cb-label">Medium</label><br />
            <input class="cb-filter" type="checkbox" name="small" value="small" />
            <label class="cb-label">Small</label>
          </fieldset>
          <fieldset class="light-level">
            <legend>Light Level</legend>
            <input class="cb-filter" type="checkbox" name="low-light" value="low-light" />
            <label class="cb-label">Low Light</label><br />
            <input class="cb-filter" type="checkbox" name="high-light" value="high-light" />
            <label class="cb-label">High Light</label>
          </fieldset>
          <fieldset class="misc">
            <legend>Misc</legend>
            <input class="cb-filter" type="checkbox" name="pet-friendly" value="pet-friendly" />
            <label class="cb-label">Pet friendly</label><br />
            <input class="cb-filter" type="checkbox" name="drought-tolerant" value="drought-tolerant" />
            <label class="cb-label">Drought Tolerant</label>
          </fieldset>

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
    <!--START FOOTER HERE-->
<?PHP include '../includes/footer.php';?>