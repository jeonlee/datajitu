@extends('layouts.index')

@section('content')


<style type="text/css">
/*Form styles*/
.styled fieldset, .styled fieldset ol, .styled fieldset li {border: none; padding: 0; margin: 0;}
.styled {font-family: Arial, sans-serif; font-size: 15px; color: #333;}
.styled fieldset {padding: 20px 0}
.styled input.text-input {background: none; border: 1px solid #ccc; padding: 5px; width: 246px; font-size: 16px; line-height: 1em;}
</style>

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
    
    



@endsection
