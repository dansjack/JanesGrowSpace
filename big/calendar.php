<?PHP include 'includes/config.php';?>
<?PHP include 'includes/header.php';?>

    <!-- START LEFT COL -->
    <section>
        <h2 class="pageID">Google Calendar</h2>
        <!--Show/Hide Month View Calendar based upon resolution-->
        <div class="month-view embed-container">
          <iframe src='https://calendar.google.com/calendar/embed?showTitle=0&height=600&wkst=1&bgcolor=%23ffffff&src=i7726dhjn8o7o0hu465m1dc79g%40group.calendar.google.com&color=%2323164E&src=c500v45cdi4n35arbv4g6flt712sb07q%40import.calendar.google.com&color=%23711616&ctz=America%2FLos_Angeles' style='border-width:0' width='800' height='600' frameborder='0' scrolling='no'></iframe>
        </div>
      <!--Show/Hide Month Agenda Calendar based upon resolution-->
      <div class="agenda-view embed-container">
        <iframe src='https://calendar.google.com/calendar/embed?showTitle=0&mode=AGENDA&height=600&wkst=1&bgcolor=%23FFFFFF&src=i7726dhjn8o7o0hu465m1dc79g%40group.calendar.google.com&color=%2323164E&src=en.usa%23holiday%40group.v.calendar.google.com&color=%23125A12&src=c500v45cdi4n35arbv4g6flt712sb07q%40import.calendar.google.com&color=%23711616&ctz=America%2FLos_Angeles' style='border-width:0' width='800' height='600' frameborder='0' scrolling='no'></iframe>
      </div>
    </section>
    <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
    <aside>
        <h2>Upcoming Events</h2>
        <h3>Emerald City Comic Con: March 14-17</h3>
        <p>
          Emerald City Comic Con is the destination comic and pop culture show for the Pacific Northwest. ECCC
          delivers the best that the comics and pop culture industry has to offer directly from the creators,
          bringing super fans exactly what they crave: interaction with quality content and guests and an inclusive
          space to celebrate their fandom.
        </p>
        <p>For more information or to buy tickets, visit <a href="https://www.emeraldcitycomiccon.com/"
                                                          target="_blank">www.emeraldcitycomiccon.com</a>.</p>
    </aside>
    <!-- END RIGHT COL -->
    <!--START FOOTER HERE-->
<?PHP include 'includes/footer.php';?>