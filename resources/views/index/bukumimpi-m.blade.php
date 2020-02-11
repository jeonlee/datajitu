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
<style type="text/css">
/*Form styles*/
.styled fieldset, .styled fieldset ol, .styled fieldset li {border: none; padding: 0; margin: 0;}
.styled {font-family: Arial, sans-serif; font-size: 15px; color: #333;}
.styled fieldset {padding: 20px 0}
.styled input.text-input {background: none; border: 1px solid #ccc; padding: 5px; width: 246px; font-size: 16px; line-height: 1em;}
</style>
<?php } ?>  
<div class="row">
        <div class="col-xs-12">
            <form id="live-search" action="" class="styled" method="post">
                <fieldset>
                    <input type="text" class="text-input" id="filter" value="" />
                    <span id="filter-count"></span>
                </fieldset>
            </form>
        </div>
        <ol class="commentlist">
          <li>aaaaaaaaaaaaa</li>
          <li>bbbbbbbbbbbbb</li>
        </ol>
  </div>
    
    


        
    
                  
<?php get_script(); ?>
            

@endsection
