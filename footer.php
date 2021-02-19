 <footer>
  <div class="container">
    <div class="row">
      <div class="col-lg-3">
       <div>
        <h6 class="footerHeadings mt-5">Popular Searches</h6>
        <ul id="menu-popular-searches" class="menu">
          <li id="menu-item-6080" class="menu-item">
            <a href="/half-map-left/?category%5B%5D=510">Apartment for Rent</a>
          </li>
          <li id="menu-item-6082" class="menu-item">
            <a href="/half-map-left/">Apartment Low to hide</a>
          </li>
          <li id="menu-item-6081" class="menu-item">
            <a href="/list-view-standard/?category%5B%5D=509">Offices for Buy</a>
          </li>
          <li id="menu-item-6083" class="menu-item">
            <a href="/list-view-standard/?category%5B%5D=510">Offices for Rent</a>
          </li>
          <li id="menu-item-6152" class="menu-item">
            <a href="/listing-sidebar-right/">Townhome Hide to low</a>
          </li>
        </ul>
       </div>
      </div>
      <div class="col-lg-3">
       <div>
        <h6 class="footerHeadings mt-5">Homepress Markets</h6>
        <ul id="menu-homepress-markets" class="menu">
          <li class="menu-item ">
            <a href="/list-view-standard/?region=514">Los Angeles Offices</a>
          </li>
          <li class="menu-item ">
            <a href="/half-map-left/?region=515">Las Vegas Apartments</a>
          </li>
          <li class="menu-item">
            <a href="/listing-sidebar-right/?region=516">Sacramento Townhome</a>
          </li>
          <li class="menu-item">
            <a href="/list-view-standard/?region=518">San Francisco Offices</a>
          </li>
          <li class="menu-item">
            <a href="/half-map-left/?region=515">Philadelphia Apartments</a>
          </li>
        </ul>
       </div>
      </div>
      <div class="col-lg-3">
       <div>
        <h6 class="footerHeadings mt-5">Quick Links</h6>
        <ul id="menu-quick-links" class="menu">
          <li class="menu-item"><a href="/pricing-plan/">Pricing Plans</a></li>
          <li class="menu-item"><a href="/services/">Our Services</a></li>
          <li class="menu-item"><a href="/about-us/">About Us</a></li>
          <li class="menu-item"><a href="/contact-us/">Contact Us</a></li>
          <li class="menu-item"><a href="/">Privacy Policy</a></li>
        </ul>
       </div>
      </div>
      <div class="col-lg-3">
       <div>
        <h6 class="footerHeadings mt-5">Subscribe</h6>
        <div>
          <form>
            <div class="input-group">
              <span>
                <i class="fas fa-envelope footerIcons"></i>
              </span>
              <input type="text" class="form-control footerFormFields" placeholder="Your Email Address" />
            </div>
            <div>
              <input type="submit" name="submit" value="subscribe" class="submitButton">
            </div>
          </form>
        </div>
       </div>
      </div>
      <div class="col-lg-12">
        <div class="mt-4 d-lg-block d-md-none">
          <ul class="menu-footer-menu">
            <li class="menu-item-home">
              <a href="https://homepress.stylemixthemes.com/">Front Page</a>
            </li>
            <li class="menu-item-home">
              <a href="https://homepress.stylemixthemes.com/about-us/">About us</a>
            </li>
            <li class="menu-item-home">
              <a href="https://homepress.stylemixthemes.com/contact-us/">Contact Us</a>
            </li>
            <li class="menu-item-home">
              <a href="https://homepress.stylemixthemes.com/news/">News</a>
            </li>
            <li class="menu-item-home">
              <a href="https://homepress.stylemixthemes.com/typography/">Typography</a>
            </li>
            <li class="menu-item-home">
              <a href="https://homepress.stylemixthemes.com/wishlist/">Wishlist</a>
            </li>
          </ul>
        </div>
        <div class="copyrightBox">
          <div class="row">
            <div class="col-lg-9"> 
              <div class="mt-3 mb-4">
                <span style="color: rgba(255,255,255, 0.8); font-size: 13px;">Copyright © 2021. <a style="color: #ffffff;" href="https://stylemixthemes.com/homepress/">HomePress</a> – Real Estate WordPress Theme by <a style="color: #ffffffcc; a: link {text-decoration: none;" href="https://stylemixthemes.com/">StylemixThemes</a>. </span>
              </div>
            </div>
            <div class="col-lg-3">
              <div class="socialMenu mt-3 mb-4">
                <div class="socialIcons">
                  <i class="fab fa-facebook-f"></i>
                </div>
                <div class="socialIcons">
                  <i class="fab fa-twitter"></i>
                </div>
                <div class="socialIcons">
                  <i class="fab fa-youtube"></i>
                </div>
                <div class="socialIcons">
                  <i class="fab fa-linkedin-in"></i>
                </div>
                <div class="socialIcons">
                  <i class="fab fa-instagram"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </footer> 





    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    
	<script>
		$(document).ready(function() {
	    $("[href]").each(function() {
	        if (this.href == window.location.href) {
	            $(this).addClass("active");
	        }
	    });
	});
	</script>

	
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/fontawesome.min.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
  <script type="text/javascript">
    $(function () {
      $('#span1').click(function () {
          $('#datalist li:hidden').slice(0, 40).show();
          if ($('#datalist li').length == $('#datalist li:visible').length) {
              $('#span1 ').hide();
          }
      });
    });
  </script>
  <script type="text/javascript">
    $(function () {
      $('#span').click(function () {
          $('#datalist1 li:hidden').slice(0, 40).show();
          if ($('#datalist1 li').length == $('#datalist1 li:visible').length) {
              $('#span').hide();
          }
      });
    });
  </script>
	<script type="text/javascript">
		const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function() {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function() {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function() {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
	</script>
  
	<script type="text/javascript">
		$('#selectUl').hover(
    function(){
        $(this).find('li').click(
            function(){
                $('.unselected').removeClass('unselected');
                $(this).siblings('li').addClass('unselected');
                var index = $(this).index();
                $('select[name=size]')
                    .find('option:eq(' + index + ')')
                    .attr('selected',true);
            });
    },
    function(){
    });
	</script>
	<script>
    $(document).ready(function(){


        $(function() {
          AOS.init();
        });

        $(window).on('load', function() {
          AOS.refresh();
        });
     });
</script>

<script type="text/javascript">
  $(function(){
    var current = location.pathname;
    $('#nav li a').each(function(){
        var $this = $(this);
        // if the current path is like this link, make it active
        if($this.attr('href').indexOf(current) !== -1){
            $this.addClass('sides');
        }
    })
})
</script>
<script type="text/javascript">
	$(document).ready(function() {
	$(".fa-search").click(function() {
	   $(".togglesearch").toggle();
	   $("input[type='text']").focus();
	 });
});
</script>
</body>
</html>