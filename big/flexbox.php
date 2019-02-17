<?PHP include 'includes/config.php';?>
<?PHP include 'includes/header.php';?>
    <!-- START LEFT COL -->
    <section>
        <h2 class="pageID">Flexbox</h2>
        <p>
          Flexbox refers to the use of the CSS display value, flex, to make a web page layout. According to
          CSS-Tricks.com, the Flexbox layout is designed to be “...a more efficient way to lay out, align and
          distribute space among items in a container, even when their size is unknown and/or dynamic...”
          (CSS-Tricks). They go on to explain that a Flexbox container can change the width, height, and order of
          its items to allocate space inside the container appropriately. Although this is good layout tool, it does
          have its limitations.
        </p>
        <p>
          The Mozilla Developer Network (MDN) documentation states that, “flexbox deals with layout in one dimension
          at a time — either as a row or as a column. This can be contrasted with the two-dimensional model of CSS
          Grid Layout...” (MDN, Basic Flexbox) In other words, Flexbox is not meant to be used to design an entire
          web page. Rather, you should use it to display some content while leaving the heavy lifting of the layout
          up to something more robust like a grid system.
        </p>
        <p>
          Now that we understand the purpose and limitations of Flexbox, we can explore when it’s appropriate to use
          by asking a simple question “Do I need to layout content in a row or a column, or do I need to layout
          content in row(s) and column(s)?”. If it’s the first case, then use Flexbox. Otherwise, use a grid or
          another layout technique.
        </p>
        <p>
          The MDN documentation provides some great examples of when to use Flexbox such as: for a navigation
          bar--so the navigation links expand and contract as you resize the page; centering an item on a page;
          forcing a page’s footer down to the bottom of a page; and styling form controls (MDN, Typical Flexbox).
          The styling of the form controls could be particularly useful as these can be difficult to make
          aesthetically pleasing and uniform.
        </p>
    </section>
    <!-- END LEFT COL -->

    <!-- START RIGHT COL -->
    <aside>
        <h3>Citations</h3>
        <p><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox/" target="_blank">"A Complete Guide to
            Flexbox."</a><i> CSS-Tricks.</i> 31 January 2019, Accessed 9 February 2019.
        </p>
        <p>aria, Baltimora, et al.
          <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Basic_Concepts_of_Flexbox"
                              target="_blank">"Basic concepts of flexbox."</a>
          <i>MDN web docs.</i> 9 January 2019, Accessed 9 February 2019.
        </p>
        <p>Sutara79, mattbrundageMDN, et al.
          <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Typical_Use_Cases_of_Flexbox"
                              target="_blank">"Typical use cases of Flexbox."</a>
          <i>MDN web docs.</i> 31 August 2018, Accessed 9 February 2019.
        </p>
    </aside>
    <!-- END RIGHT COL -->
    <!--START FOOTER HERE-->
<?PHP include 'includes/footer.php';?>