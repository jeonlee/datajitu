@extends('layouts.index')

@section('content')
<?php function get_script() { ?>
<script>
  $(document).ready(function(){
    $("#filter").keyup(function(){
 
        // Retrieve the input field text and reset the count to zero
        var filter = $(this).val(), count = 0;
 
        // Loop through the comment list
        $(".commentlist li").each(function(){
 
            // If the list item does not contain the text phrase fade it out
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
 
            // Show the list item if the phrase matches and increase the count by 1
            } else {
                $(this).show();
                count++;
            }
        });
 
        // Update the count
        var numberItems = count;
        $("#filter-count").text("Number of Comments = "+count);
    });
});
</script>
<?php } ?>  
<div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading p15 black font">
                  <div class="panel-title">
                    <h3>BUKU MIMPI</h3>
                  </div>  
                    
                </div>
                
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                        <form id="live-search" action="" class="styled" method="post">
                            <fieldset>
                                <input type="text" class="form-control text-input" id="filter" value="" />
                                <span id="filter-count"></span>
                            </fieldset>
                        </form>
                    </div>
                </div>
                
                <ol class="commentlist">
  <li>aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa</li>
  <li>bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb</li>
  <li>ccccccccccccccccccccccccccccccccccc</li>
  <li>dddddddddddddddddddddddddddddddddddd</li>
  <li>eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee</li>
  <li>ffffffffffffffffffffffffffffffffffff</li>
</ol>
            </div>
        </div>
  </div>
    
    


        
      </div>
    
                  
<?php get_script(); ?>
                </div>   <!-- end body -->   
          </div>
        </div>

@endsection
