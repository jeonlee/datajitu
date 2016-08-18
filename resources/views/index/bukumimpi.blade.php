@extends('layouts.index')

@section('content')
<?php function get_script() { ?>
  <link rel="stylesheet" href="css/galleriffic-5.css" type="text/css" />
   <link rel="stylesheet" href="css/white.css" type="text/css" />
  <script type="text/javascript" src="js/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="js/jquery.history.js"></script>
    <script type="text/javascript" src="js/jquery.galleriffic.js"></script>
    <script type="text/javascript" src="js/jquery.opacityrollover.js"></script>
    <script type="text/javascript">
      document.write('<style>.noscript { display: none; }</style>');
    </script>
    <script type="text/javascript">
      jQuery(document).ready(function($) {
        // We only want these styles applied when javascript is enabled
        $('div.content').css('display', 'block');

        // Initially set opacity on thumbs and add
        // additional styling for hover effect on thumbs
        var onMouseOutOpacity = 0.67;
        $('#thumbs ul.thumbs li, div.navigation a.pageLink').opacityrollover({
          mouseOutOpacity:   onMouseOutOpacity,
          mouseOverOpacity:  1.0,
          fadeSpeed:         'fast',
          exemptionSelector: '.selected'
        });
        
        // Initialize Advanced Galleriffic Gallery
        var gallery = $('#thumbs').galleriffic({
          delay:                     2500,
          numThumbs:                 10,
          preloadAhead:              10,
          enableTopPager:            false,
          enableBottomPager:         false,
          imageContainerSel:         '#slideshow',
          controlsContainerSel:      '#controls',
          captionContainerSel:       '#caption',
          loadingContainerSel:       '#loading',
          renderSSControls:          true,
          renderNavControls:         true,
          playLinkText:              'Play Slideshow',
          pauseLinkText:             'Pause Slideshow',
          prevLinkText:              '&lsaquo; Previous Photo',
          nextLinkText:              'Next Photo &rsaquo;',
          nextPageLinkText:          'Next &rsaquo;',
          prevPageLinkText:          '&lsaquo; Prev',
          enableHistory:             true,
          autoStart:                 false,
          syncTransitions:           true,
          defaultTransitionDuration: 900,
          onSlideChange:             function(prevIndex, nextIndex) {
            // 'this' refers to the gallery, which is an extension of $('#thumbs')
            this.find('ul.thumbs').children()
              .eq(prevIndex).fadeTo('fast', onMouseOutOpacity).end()
              .eq(nextIndex).fadeTo('fast', 1.0);

            // Update the photo index display
            this.$captionContainer.find('div.photo-index')
              .html('Photo '+ (nextIndex+1) +' of '+ this.data.length);
          },
          onPageTransitionOut:       function(callback) {
            this.fadeTo('fast', 0.0, callback);
          },
          onPageTransitionIn:        function() {
            var prevPageLink = this.find('a.prev').css('visibility', 'hidden');
            var nextPageLink = this.find('a.next').css('visibility', 'hidden');
            
            // Show appropriate next / prev page links
            if (this.displayedPage > 0)
              prevPageLink.css('visibility', 'visible');

            var lastPage = this.getNumPages() - 1;
            if (this.displayedPage < lastPage)
              nextPageLink.css('visibility', 'visible');

            this.fadeTo('fast', 1.0);
          }
        });

        /**************** Event handlers for custom next / prev page links **********************/

        gallery.find('a.prev').click(function(e) {
          gallery.previousPage();
          e.preventDefault();
        });

        gallery.find('a.next').click(function(e) {
          gallery.nextPage();
          e.preventDefault();
        });

        /****************************************************************************************/

        /**** Functions to support integration of galleriffic with the jquery.history plugin ****/

        // PageLoad function
        // This function is called when:
        // 1. after calling $.historyInit();
        // 2. after calling $.historyLoad();
        // 3. after pushing "Go Back" button of a browser
        function pageload(hash) {
          // alert("pageload: " + hash);
          // hash doesn't contain the first # character.
          if(hash) {
            $.galleriffic.gotoImage(hash);
          } else {
            gallery.gotoIndex(0);
          }
        }

        // Initialize history plugin.
        // The callback is called at once by present location.hash. 
        $.historyInit(pageload, "advanced.html");

        // set onlick event for buttons using the jQuery 1.3 live method
        $("a[rel='history']").live('click', function(e) {
          if (e.button != 0) return true;

          var hash = this.href;
          hash = hash.replace(/^.*#/, '');

          // moves to a new page. 
          // pageload is called at once. 
          // hash don't contain "#", "?"
          $.historyLoad(hash);

          return false;
        });

        /****************************************************************************************/
      });
    </script>
<?php } ?>  
<div class="col-xs-12">
              <div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>BUKU MIMPI</h3>
                  </div>
                </div>

                <div class="panel-body p15">
                  <div style="overflow:hidden;">
        <!-- Start Advanced Gallery Html Containers -->       
        <div class="navigation-container">
          <div id="thumbs" class="navigation">
            <a class="pageLink prev" style="visibility: hidden;" href="#" title="Previous Page"></a>
          
            <ul class="thumbs noscript">
              <li>
                <a class="thumb" name="Buku-Mimpi-0" href="images/buku-mimpi/buku-mimpi-0.jpg" title="Buku-Mimpi-0">
                  <img src="images/buku-mimpi/buku-mimpi-0.jpg" alt="Buku-Mimpi-00" width="50" /> <span class="thumbnail-buku-mimpi">00</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #00</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-1" href="images/buku-mimpi/Buku-Mimpi-1.jpg" title="Buku-Mimpi-1">
                  <img src="images/buku-mimpi/Buku-Mimpi-1.jpg" alt="Buku-Mimpi-1" width="50" /> <span class="thumbnail-buku-mimpi">01</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #01</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-2" href="images/buku-mimpi/Buku-Mimpi-2.jpg" title="Buku-Mimpi-2">
                  <img src="images/buku-mimpi/Buku-Mimpi-2.jpg" alt="Buku-Mimpi-2" width="50" /> <span class="thumbnail-buku-mimpi">02</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #02</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-3" href="images/buku-mimpi/Buku-Mimpi-3.jpg" title="Buku-Mimpi-3">
                  <img src="images/buku-mimpi/Buku-Mimpi-3.jpg" alt="Buku-Mimpi-3" width="50" /> <span class="thumbnail-buku-mimpi">03</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #03</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-4" href="images/buku-mimpi/Buku-Mimpi-4.jpg" title="Buku-Mimpi-4">
                  <img src="images/buku-mimpi/Buku-Mimpi-4.jpg" alt="Buku-Mimpi-4" width="50" /> <span class="thumbnail-buku-mimpi">04</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #04</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-5" href="images/buku-mimpi/Buku-Mimpi-5.jpg" title="Buku-Mimpi-5">
                  <img src="images/buku-mimpi/Buku-Mimpi-5.jpg" alt="Buku-Mimpi-5" width="50" /> <span class="thumbnail-buku-mimpi">05</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #05</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-6" href="images/buku-mimpi/Buku-Mimpi-6.jpg" title="Buku-Mimpi-6">
                  <img src="images/buku-mimpi/Buku-Mimpi-6.jpg" alt="Buku-Mimpi-6" width="50" /> <span class="thumbnail-buku-mimpi">06</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #06</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-7" href="images/buku-mimpi/Buku-Mimpi-7.jpg" title="Buku-Mimpi-7">
                  <img src="images/buku-mimpi/Buku-Mimpi-7.jpg" alt="Buku-Mimpi-7" width="50" /> <span class="thumbnail-buku-mimpi">07</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #07</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-8" href="images/buku-mimpi/Buku-Mimpi-8.jpg" title="Buku-Mimpi-8">
                  <img src="images/buku-mimpi/Buku-Mimpi-8.jpg" alt="Buku-Mimpi-8" width="50" /> <span class="thumbnail-buku-mimpi">08</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #08</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-9" href="images/buku-mimpi/Buku-Mimpi-9.jpg" title="Buku-Mimpi-9">
                  <img src="images/buku-mimpi/Buku-Mimpi-9.jpg" alt="Buku-Mimpi-9" width="50" /> <span class="thumbnail-buku-mimpi">09</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #09</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-10" href="images/buku-mimpi/Buku-Mimpi-10.jpg" title="Buku-Mimpi-10">
                  <img src="images/buku-mimpi/Buku-Mimpi-10.jpg" alt="Buku-Mimpi-10" width="50" /> <span class="thumbnail-buku-mimpi">10</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #10</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-11" href="images/buku-mimpi/Buku-Mimpi-11.jpg" title="Buku-Mimpi-11">
                  <img src="images/buku-mimpi/Buku-Mimpi-11.jpg" alt="Buku-Mimpi-11" width="50" /> <span class="thumbnail-buku-mimpi">11</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #11</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-12" href="images/buku-mimpi/Buku-Mimpi-12.jpg" title="Buku-Mimpi-12">
                  <img src="images/buku-mimpi/Buku-Mimpi-12.jpg" alt="Buku-Mimpi-12" width="50" /> <span class="thumbnail-buku-mimpi">12</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #12</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-13" href="images/buku-mimpi/Buku-Mimpi-13.jpg" title="Buku-Mimpi-13">
                  <img src="images/buku-mimpi/Buku-Mimpi-13.jpg" alt="Buku-Mimpi-13" width="50" /> <span class="thumbnail-buku-mimpi">13</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #13</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-14" href="images/buku-mimpi/Buku-Mimpi-14.jpg" title="Buku-Mimpi-14">
                  <img src="images/buku-mimpi/Buku-Mimpi-14.jpg" alt="Buku-Mimpi-14" width="50" /> <span class="thumbnail-buku-mimpi">14</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #14</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-15" href="images/buku-mimpi/Buku-Mimpi-15.jpg" title="Buku-Mimpi-15">
                  <img src="images/buku-mimpi/Buku-Mimpi-15.jpg" alt="Buku-Mimpi-15" width="50" /> <span class="thumbnail-buku-mimpi">15</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #15</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-16" href="images/buku-mimpi/Buku-Mimpi-16.jpg" title="Buku-Mimpi-16">
                  <img src="images/buku-mimpi/Buku-Mimpi-16.jpg" alt="Buku-Mimpi-16" width="50" /> <span class="thumbnail-buku-mimpi">16</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #16</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-17" href="images/buku-mimpi/Buku-Mimpi-17.jpg" title="Buku-Mimpi-17">
                  <img src="images/buku-mimpi/Buku-Mimpi-17.jpg" alt="Buku-Mimpi-17" width="50" /> <span class="thumbnail-buku-mimpi">17</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #17</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-18" href="images/buku-mimpi/Buku-Mimpi-18.jpg" title="Buku-Mimpi-18">
                  <img src="images/buku-mimpi/Buku-Mimpi-18.jpg" alt="Buku-Mimpi-18" width="50" /> <span class="thumbnail-buku-mimpi">18</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #18</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-19" href="images/buku-mimpi/Buku-Mimpi-19.jpg" title="Buku-Mimpi-19">
                  <img src="images/buku-mimpi/Buku-Mimpi-19.jpg" alt="Buku-Mimpi-19" width="50" /> <span class="thumbnail-buku-mimpi">19</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #19</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-20" href="images/buku-mimpi/Buku-Mimpi-20.jpg" title="Buku-Mimpi-20">
                  <img src="images/buku-mimpi/Buku-Mimpi-20.jpg" alt="Buku-Mimpi-20" width="50" /> <span class="thumbnail-buku-mimpi">20</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #20</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-21" href="images/buku-mimpi/Buku-Mimpi-21.jpg" title="Buku-Mimpi-21">
                  <img src="images/buku-mimpi/Buku-Mimpi-21.jpg" alt="Buku-Mimpi-21" width="50" /> <span class="thumbnail-buku-mimpi">21</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #21</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-22" href="images/buku-mimpi/Buku-Mimpi-22.jpg" title="Buku-Mimpi-22">
                  <img src="images/buku-mimpi/Buku-Mimpi-22.jpg" alt="Buku-Mimpi-22" width="50" /> <span class="thumbnail-buku-mimpi">22</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #22</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-23" href="images/buku-mimpi/Buku-Mimpi-23.jpg" title="Buku-Mimpi-23">
                  <img src="images/buku-mimpi/Buku-Mimpi-23.jpg" alt="Buku-Mimpi-23" width="50" /> <span class="thumbnail-buku-mimpi">23</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #23</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-24" href="images/buku-mimpi/Buku-Mimpi-24.jpg" title="Buku-Mimpi-24">
                  <img src="images/buku-mimpi/Buku-Mimpi-24.jpg" alt="Buku-Mimpi-24" width="50" /> <span class="thumbnail-buku-mimpi">24</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #24</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-25" href="images/buku-mimpi/Buku-Mimpi-25.jpg" title="Buku-Mimpi-25">
                  <img src="images/buku-mimpi/Buku-Mimpi-25.jpg" alt="Buku-Mimpi-25" width="50" /> <span class="thumbnail-buku-mimpi">25</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #25</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-26" href="images/buku-mimpi/Buku-Mimpi-26.jpg" title="Buku-Mimpi-26">
                  <img src="images/buku-mimpi/Buku-Mimpi-26.jpg" alt="Buku-Mimpi-26" width="50" /> <span class="thumbnail-buku-mimpi">26</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #26</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-27" href="images/buku-mimpi/Buku-Mimpi-27.jpg" title="Buku-Mimpi-27">
                  <img src="images/buku-mimpi/Buku-Mimpi-27.jpg" alt="Buku-Mimpi-27" width="50" /> <span class="thumbnail-buku-mimpi">27</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #27</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-28" href="images/buku-mimpi/Buku-Mimpi-28.jpg" title="Buku-Mimpi-28">
                  <img src="images/buku-mimpi/Buku-Mimpi-28.jpg" alt="Buku-Mimpi-28" width="50" /> <span class="thumbnail-buku-mimpi">28</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #28</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-29" href="images/buku-mimpi/Buku-Mimpi-29.jpg" title="Buku-Mimpi-29">
                  <img src="images/buku-mimpi/Buku-Mimpi-29.jpg" alt="Buku-Mimpi-29" width="50" /> <span class="thumbnail-buku-mimpi">29</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #29</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-30" href="images/buku-mimpi/Buku-Mimpi-30.jpg" title="Buku-Mimpi-30">
                  <img src="images/buku-mimpi/Buku-Mimpi-30.jpg" alt="Buku-Mimpi-30" width="50" /> <span class="thumbnail-buku-mimpi">30</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #30</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-31" href="images/buku-mimpi/Buku-Mimpi-31.jpg" title="Buku-Mimpi-31">
                  <img src="images/buku-mimpi/Buku-Mimpi-31.jpg" alt="Buku-Mimpi-31" width="50" /> <span class="thumbnail-buku-mimpi">31</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #31</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-32" href="images/buku-mimpi/Buku-Mimpi-32.jpg" title="Buku-Mimpi-32">
                  <img src="images/buku-mimpi/Buku-Mimpi-32.jpg" alt="Buku-Mimpi-32" width="50" /> <span class="thumbnail-buku-mimpi">32</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #32</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-33" href="images/buku-mimpi/Buku-Mimpi-33.jpg" title="Buku-Mimpi-33">
                  <img src="images/buku-mimpi/Buku-Mimpi-33.jpg" alt="Buku-Mimpi-33" width="50" /> <span class="thumbnail-buku-mimpi">33</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #33</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-34" href="images/buku-mimpi/Buku-Mimpi-34.jpg" title="Buku-Mimpi-34">
                  <img src="images/buku-mimpi/Buku-Mimpi-34.jpg" alt="Buku-Mimpi-34" width="50" /> <span class="thumbnail-buku-mimpi">34</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #34</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-35" href="images/buku-mimpi/Buku-Mimpi-35.jpg" title="Buku-Mimpi-35">
                  <img src="images/buku-mimpi/Buku-Mimpi-35.jpg" alt="Buku-Mimpi-35" width="50" /> <span class="thumbnail-buku-mimpi">35</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #35</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-36" href="images/buku-mimpi/Buku-Mimpi-36.jpg" title="Buku-Mimpi-36">
                  <img src="images/buku-mimpi/Buku-Mimpi-36.jpg" alt="Buku-Mimpi-36" width="50" /> <span class="thumbnail-buku-mimpi">36</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #36</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-37" href="images/buku-mimpi/Buku-Mimpi-37.jpg" title="Buku-Mimpi-37">
                  <img src="images/buku-mimpi/Buku-Mimpi-37.jpg" alt="Buku-Mimpi-37" width="50" /> <span class="thumbnail-buku-mimpi">37</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #37</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-38" href="images/buku-mimpi/Buku-Mimpi-38.jpg" title="Buku-Mimpi-38">
                  <img src="images/buku-mimpi/Buku-Mimpi-38.jpg" alt="Buku-Mimpi-38" width="50" /> <span class="thumbnail-buku-mimpi">38</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #38</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-39" href="images/buku-mimpi/Buku-Mimpi-39.jpg" title="Buku-Mimpi-39">
                  <img src="images/buku-mimpi/Buku-Mimpi-39.jpg" alt="Buku-Mimpi-39" width="50" /> <span class="thumbnail-buku-mimpi">39</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #39</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-40" href="images/buku-mimpi/Buku-Mimpi-40.jpg" title="Buku-Mimpi-40">
                  <img src="images/buku-mimpi/Buku-Mimpi-40.jpg" alt="Buku-Mimpi-40" width="50" /> <span class="thumbnail-buku-mimpi">40</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #40</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-41" href="images/buku-mimpi/Buku-Mimpi-41.jpg" title="Buku-Mimpi-41">
                  <img src="images/buku-mimpi/Buku-Mimpi-41.jpg" alt="Buku-Mimpi-41" width="50" /> <span class="thumbnail-buku-mimpi">41</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #41</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-42" href="images/buku-mimpi/Buku-Mimpi-42.jpg" title="Buku-Mimpi-42">
                  <img src="images/buku-mimpi/Buku-Mimpi-42.jpg" alt="Buku-Mimpi-42" width="50" /> <span class="thumbnail-buku-mimpi">42</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #42</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-43" href="images/buku-mimpi/Buku-Mimpi-43.jpg" title="Buku-Mimpi-43">
                  <img src="images/buku-mimpi/Buku-Mimpi-43.jpg" alt="Buku-Mimpi-43" width="50" /> <span class="thumbnail-buku-mimpi">43</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #43</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-44" href="images/buku-mimpi/Buku-Mimpi-44.jpg" title="Buku-Mimpi-44">
                  <img src="images/buku-mimpi/Buku-Mimpi-44.jpg" alt="Buku-Mimpi-44" width="50" /> <span class="thumbnail-buku-mimpi">44</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #44</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-45" href="images/buku-mimpi/Buku-Mimpi-45.jpg" title="Buku-Mimpi-45">
                  <img src="images/buku-mimpi/Buku-Mimpi-45.jpg" alt="Buku-Mimpi-45" width="50" /> <span class="thumbnail-buku-mimpi">45</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #45</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-46" href="images/buku-mimpi/Buku-Mimpi-46.jpg" title="Buku-Mimpi-46">
                  <img src="images/buku-mimpi/Buku-Mimpi-46.jpg" alt="Buku-Mimpi-46" width="50" /> <span class="thumbnail-buku-mimpi">46</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #46</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-47" href="images/buku-mimpi/Buku-Mimpi-47.jpg" title="Buku-Mimpi-47">
                  <img src="images/buku-mimpi/Buku-Mimpi-47.jpg" alt="Buku-Mimpi-47" width="50" /> <span class="thumbnail-buku-mimpi">47</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #47</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-48" href="images/buku-mimpi/Buku-Mimpi-48.jpg" title="Buku-Mimpi-48">
                  <img src="images/buku-mimpi/Buku-Mimpi-48.jpg" alt="Buku-Mimpi-48" width="50" /> <span class="thumbnail-buku-mimpi">48</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #48</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-49" href="images/buku-mimpi/Buku-Mimpi-49.jpg" title="Buku-Mimpi-49">
                  <img src="images/buku-mimpi/Buku-Mimpi-49.jpg" alt="Buku-Mimpi-49" width="50" /> <span class="thumbnail-buku-mimpi">49</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #49</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-50" href="images/buku-mimpi/Buku-Mimpi-50.jpg" title="Buku-Mimpi-50">
                  <img src="images/buku-mimpi/Buku-Mimpi-50.jpg" alt="Buku-Mimpi-50" width="50" /> <span class="thumbnail-buku-mimpi">50</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #50</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-51" href="images/buku-mimpi/Buku-Mimpi-51.jpg" title="Buku-Mimpi-51">
                  <img src="images/buku-mimpi/Buku-Mimpi-51.jpg" alt="Buku-Mimpi-51" width="50" /> <span class="thumbnail-buku-mimpi">51</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #51</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-52" href="images/buku-mimpi/Buku-Mimpi-52.jpg" title="Buku-Mimpi-52">
                  <img src="images/buku-mimpi/Buku-Mimpi-52.jpg" alt="Buku-Mimpi-52" width="50" /> <span class="thumbnail-buku-mimpi">52</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #52</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-53" href="images/buku-mimpi/Buku-Mimpi-53.jpg" title="Buku-Mimpi-53">
                  <img src="images/buku-mimpi/Buku-Mimpi-53.jpg" alt="Buku-Mimpi-53" width="50" /> <span class="thumbnail-buku-mimpi">53</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #53</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-54" href="images/buku-mimpi/Buku-Mimpi-54.jpg" title="Buku-Mimpi-54">
                  <img src="images/buku-mimpi/Buku-Mimpi-54.jpg" alt="Buku-Mimpi-54" width="50" /> <span class="thumbnail-buku-mimpi">54</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #54</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-55" href="images/buku-mimpi/Buku-Mimpi-55.jpg" title="Buku-Mimpi-55">
                  <img src="images/buku-mimpi/Buku-Mimpi-55.jpg" alt="Buku-Mimpi-55" width="50" /> <span class="thumbnail-buku-mimpi">55</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #55</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-56" href="images/buku-mimpi/Buku-Mimpi-56.jpg" title="Buku-Mimpi-56">
                  <img src="images/buku-mimpi/Buku-Mimpi-56.jpg" alt="Buku-Mimpi-56" width="50" /> <span class="thumbnail-buku-mimpi">56</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #56</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-57" href="images/buku-mimpi/Buku-Mimpi-57.jpg" title="Buku-Mimpi-57">
                  <img src="images/buku-mimpi/Buku-Mimpi-57.jpg" alt="Buku-Mimpi-57" width="50" /> <span class="thumbnail-buku-mimpi">57</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #57</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-58" href="images/buku-mimpi/Buku-Mimpi-58.jpg" title="Buku-Mimpi-58">
                  <img src="images/buku-mimpi/Buku-Mimpi-58.jpg" alt="Buku-Mimpi-58" width="50" /> <span class="thumbnail-buku-mimpi">58</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #58</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-59" href="images/buku-mimpi/Buku-Mimpi-59.jpg" title="Buku-Mimpi-59">
                  <img src="images/buku-mimpi/Buku-Mimpi-59.jpg" alt="Buku-Mimpi-59" width="50" /> <span class="thumbnail-buku-mimpi">59</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #59</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-60" href="images/buku-mimpi/Buku-Mimpi-60.jpg" title="Buku-Mimpi-60">
                  <img src="images/buku-mimpi/Buku-Mimpi-60.jpg" alt="Buku-Mimpi-60" width="50" /> <span class="thumbnail-buku-mimpi">60</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #60</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-61" href="images/buku-mimpi/Buku-Mimpi-61.jpg" title="Buku-Mimpi-61">
                  <img src="images/buku-mimpi/Buku-Mimpi-61.jpg" alt="Buku-Mimpi-60" width="50" /> <span class="thumbnail-buku-mimpi">61</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #61</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-62" href="images/buku-mimpi/Buku-Mimpi-62.jpg" title="Buku-Mimpi-62">
                  <img src="images/buku-mimpi/Buku-Mimpi-62.jpg" alt="Buku-Mimpi-61" width="50" /> <span class="thumbnail-buku-mimpi">62</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #62</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-63" href="images/buku-mimpi/Buku-Mimpi-63.jpg" title="Buku-Mimpi-63">
                  <img src="images/buku-mimpi/Buku-Mimpi-63.jpg" alt="Buku-Mimpi-63" width="50" /> <span class="thumbnail-buku-mimpi">63</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #63</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-64" href="images/buku-mimpi/Buku-Mimpi-64.jpg" title="Buku-Mimpi-64">
                  <img src="images/buku-mimpi/Buku-Mimpi-64.jpg" alt="Buku-Mimpi-64" width="50" /> <span class="thumbnail-buku-mimpi">64</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #64</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-65" href="images/buku-mimpi/Buku-Mimpi-65.jpg" title="Buku-Mimpi-65">
                  <img src="images/buku-mimpi/Buku-Mimpi-65.jpg" alt="Buku-Mimpi-65" width="50" /> <span class="thumbnail-buku-mimpi">65</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #65</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-66" href="images/buku-mimpi/Buku-Mimpi-66.jpg" title="Buku-Mimpi-66">
                  <img src="images/buku-mimpi/Buku-Mimpi-66.jpg" alt="Buku-Mimpi-66" width="50" /> <span class="thumbnail-buku-mimpi">66</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #66</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-67" href="images/buku-mimpi/Buku-Mimpi-67.jpg" title="Buku-Mimpi-67">
                  <img src="images/buku-mimpi/Buku-Mimpi-67.jpg" alt="Buku-Mimpi-67" width="50" /> <span class="thumbnail-buku-mimpi">67</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #67</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-68" href="images/buku-mimpi/Buku-Mimpi-68.jpg" title="Buku-Mimpi-68">
                  <img src="images/buku-mimpi/Buku-Mimpi-68.jpg" alt="Buku-Mimpi-68" width="50" /> <span class="thumbnail-buku-mimpi">68</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #68</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-69" href="images/buku-mimpi/Buku-Mimpi-69.jpg" title="Buku-Mimpi-69">
                  <img src="images/buku-mimpi/Buku-Mimpi-69.jpg" alt="Buku-Mimpi-69" width="50" /> <span class="thumbnail-buku-mimpi">69</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #69</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-70" href="images/buku-mimpi/Buku-Mimpi-70.jpg" title="Buku-Mimpi-70">
                  <img src="images/buku-mimpi/Buku-Mimpi-70.jpg" alt="Buku-Mimpi-70" width="50" /> <span class="thumbnail-buku-mimpi">70</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #70</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-71" href="images/buku-mimpi/Buku-Mimpi-71.jpg" title="Buku-Mimpi-71">
                  <img src="images/buku-mimpi/Buku-Mimpi-71.jpg" alt="Buku-Mimpi-71" width="50" /> <span class="thumbnail-buku-mimpi">71</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #71</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-72" href="images/buku-mimpi/Buku-Mimpi-72.jpg" title="Buku-Mimpi-72">
                  <img src="images/buku-mimpi/Buku-Mimpi-72.jpg" alt="Buku-Mimpi-72" width="50" /> <span class="thumbnail-buku-mimpi">72</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #72</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-73" href="images/buku-mimpi/Buku-Mimpi-73.jpg" title="Buku-Mimpi-73">
                  <img src="images/buku-mimpi/Buku-Mimpi-73.jpg" alt="Buku-Mimpi-73" width="50" /> <span class="thumbnail-buku-mimpi">73</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #73</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-74" href="images/buku-mimpi/Buku-Mimpi-74.jpg" title="Buku-Mimpi-74">
                  <img src="images/buku-mimpi/Buku-Mimpi-74.jpg" alt="Buku-Mimpi-74" width="50" /> <span class="thumbnail-buku-mimpi">74</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #74</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-75" href="images/buku-mimpi/Buku-Mimpi-75.jpg" title="Buku-Mimpi-75">
                  <img src="images/buku-mimpi/Buku-Mimpi-75.jpg" alt="Buku-Mimpi-75" width="50" /> <span class="thumbnail-buku-mimpi">75</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #75</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-76" href="images/buku-mimpi/Buku-Mimpi-76.jpg" title="Buku-Mimpi-76">
                  <img src="images/buku-mimpi/Buku-Mimpi-76.jpg" alt="Buku-Mimpi-76" width="50" /> <span class="thumbnail-buku-mimpi">76</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #76</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-77" href="images/buku-mimpi/Buku-Mimpi-77.jpg" title="Buku-Mimpi-77">
                  <img src="images/buku-mimpi/Buku-Mimpi-77.jpg" alt="Buku-Mimpi-77" width="50" /> <span class="thumbnail-buku-mimpi">77</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #77</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-78" href="images/buku-mimpi/Buku-Mimpi-78.jpg" title="Buku-Mimpi-78">
                  <img src="images/buku-mimpi/Buku-Mimpi-78.jpg" alt="Buku-Mimpi-78" width="50" /> <span class="thumbnail-buku-mimpi">78</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #78</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-79" href="images/buku-mimpi/Buku-Mimpi-79.jpg" title="Buku-Mimpi-79">
                  <img src="images/buku-mimpi/Buku-Mimpi-79.jpg" alt="Buku-Mimpi-79" width="50" /> <span class="thumbnail-buku-mimpi">79</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #79</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-80" href="images/buku-mimpi/Buku-Mimpi-80.jpg" title="Buku-Mimpi-80">
                  <img src="images/buku-mimpi/Buku-Mimpi-80.jpg" alt="Buku-Mimpi-80" width="50" /> <span class="thumbnail-buku-mimpi">80</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #80</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-81" href="images/buku-mimpi/Buku-Mimpi-81.jpg" title="Buku-Mimpi-81">
                  <img src="images/buku-mimpi/Buku-Mimpi-81.jpg" alt="Buku-Mimpi-81" width="50" /> <span class="thumbnail-buku-mimpi">81</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #81</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-82" href="images/buku-mimpi/Buku-Mimpi-82.jpg" title="Buku-Mimpi-82">
                  <img src="images/buku-mimpi/Buku-Mimpi-82.jpg" alt="Buku-Mimpi-82" width="50" /> <span class="thumbnail-buku-mimpi">82</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #82</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-83" href="images/buku-mimpi/Buku-Mimpi-83.jpg" title="Buku-Mimpi-83">
                  <img src="images/buku-mimpi/Buku-Mimpi-83.jpg" alt="Buku-Mimpi-83" width="50" /> <span class="thumbnail-buku-mimpi">83</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #83</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-84" href="images/buku-mimpi/Buku-Mimpi-84.jpg" title="Buku-Mimpi-84">
                  <img src="images/buku-mimpi/Buku-Mimpi-84.jpg" alt="Buku-Mimpi-84" width="50" /> <span class="thumbnail-buku-mimpi">84</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #84</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-85" href="images/buku-mimpi/Buku-Mimpi-85.jpg" title="Buku-Mimpi-85">
                  <img src="images/buku-mimpi/Buku-Mimpi-85.jpg" alt="Buku-Mimpi-85" width="50" /> <span class="thumbnail-buku-mimpi">85</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #85</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-86" href="images/buku-mimpi/Buku-Mimpi-86.jpg" title="Buku-Mimpi-86">
                  <img src="images/buku-mimpi/Buku-Mimpi-86.jpg" alt="Buku-Mimpi-86" width="50" /> <span class="thumbnail-buku-mimpi">86</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #86</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-87" href="images/buku-mimpi/Buku-Mimpi-87.jpg" title="Buku-Mimpi-87">
                  <img src="images/buku-mimpi/Buku-Mimpi-87.jpg" alt="Buku-Mimpi-87" width="50" /> <span class="thumbnail-buku-mimpi">87</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #87</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-88" href="images/buku-mimpi/Buku-Mimpi-88.jpg" title="Buku-Mimpi-88">
                  <img src="images/buku-mimpi/Buku-Mimpi-88.jpg" alt="Buku-Mimpi-88" width="50" /> <span class="thumbnail-buku-mimpi">88</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #88</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-89" href="images/buku-mimpi/Buku-Mimpi-89.jpg" title="Buku-Mimpi-89">
                  <img src="images/buku-mimpi/Buku-Mimpi-89.jpg" alt="Buku-Mimpi-89" width="50" /> <span class="thumbnail-buku-mimpi">89</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #89</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-90" href="images/buku-mimpi/Buku-Mimpi-90.jpg" title="Buku-Mimpi-90">
                  <img src="images/buku-mimpi/Buku-Mimpi-90.jpg" alt="Buku-Mimpi-90" width="50" /> <span class="thumbnail-buku-mimpi">90</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #90</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-91" href="images/buku-mimpi/Buku-Mimpi-91.jpg" title="Buku-Mimpi-91">
                  <img src="images/buku-mimpi/Buku-Mimpi-91.jpg" alt="Buku-Mimpi-91" width="50" /> <span class="thumbnail-buku-mimpi">91</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #91</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-92" href="images/buku-mimpi/Buku-Mimpi-92.jpg" title="Buku-Mimpi-92">
                  <img src="images/buku-mimpi/Buku-Mimpi-92.jpg" alt="Buku-Mimpi-92" width="50" /> <span class="thumbnail-buku-mimpi">92</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #92</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-93" href="images/buku-mimpi/Buku-Mimpi-93.jpg" title="Buku-Mimpi-93">
                  <img src="images/buku-mimpi/Buku-Mimpi-93.jpg" alt="Buku-Mimpi-93" width="50" /> <span class="thumbnail-buku-mimpi">93</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #93</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-94" href="images/buku-mimpi/Buku-Mimpi-94.jpg" title="Buku-Mimpi-94">
                  <img src="images/buku-mimpi/Buku-Mimpi-94.jpg" alt="Buku-Mimpi-94" width="50" /> <span class="thumbnail-buku-mimpi">94</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #94</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-95" href="images/buku-mimpi/Buku-Mimpi-95.jpg" title="Buku-Mimpi-95">
                  <img src="images/buku-mimpi/Buku-Mimpi-95.jpg" alt="Buku-Mimpi-95" width="50" /> <span class="thumbnail-buku-mimpi">95</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #95</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-96" href="images/buku-mimpi/Buku-Mimpi-96.jpg" title="Buku-Mimpi-96">
                  <img src="images/buku-mimpi/Buku-Mimpi-96.jpg" alt="Buku-Mimpi-96" width="50" /> <span class="thumbnail-buku-mimpi">96</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #96</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-97" href="images/buku-mimpi/Buku-Mimpi-97.jpg" title="Buku-Mimpi-97">
                  <img src="images/buku-mimpi/Buku-Mimpi-97.jpg" alt="Buku-Mimpi-97" width="50" /> <span class="thumbnail-buku-mimpi">97</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #97</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-98" href="images/buku-mimpi/Buku-Mimpi-98.jpg" title="Buku-Mimpi-98">
                  <img src="images/buku-mimpi/Buku-Mimpi-98.jpg" alt="Buku-Mimpi-98" width="50" /> <span class="thumbnail-buku-mimpi">98</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #98</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
              <li>
                <a class="thumb" name="Buku-Mimpi-99" href="images/buku-mimpi/Buku-Mimpi-99.jpg" title="Buku-Mimpi-99">
                  <img src="images/buku-mimpi/Buku-Mimpi-99.jpg" alt="Buku-Mimpi-99" width="50" /> <span class="thumbnail-buku-mimpi">99</span>
                </a>
                <div class="caption">
                  <div class="image-title">Buku Mimpi #99</div>
                  <!-- <div class="image-desc">Description</div> -->
                  <div class="download">
                    <a href="images/buku-mimpi/download-buku-mimpi-2d-togelcc.zip" download="download-buku-mimpi-2d-togelcc.zip">Download</a>
                  </div>
                </div>
              </li>
            </ul>
            <a class="pageLink next" style="visibility: hidden;" href="#" title="Next Page"></a>
          </div>
        </div>
        <div class="content">
          <div class="slideshow-container">
            <div id="controls" class="controls"></div>
            <div id="loading" class="loader"></div>
            <div id="slideshow" class="slideshow"></div>
          </div>
          <div id="caption" class="caption-container">
            <div class="photo-index"></div>
          </div>
        </div>
        <!-- End Gallery Html Containers -->
        <div style="clear: both;"></div>
      </div>
    
                  
<?php get_script(); ?>
                </div>   <!-- end body -->   
          </div>
        </div>

@endsection