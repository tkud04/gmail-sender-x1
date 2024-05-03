<?php
$messageString = isset($message) ? $message : "";
$styleString = isset($style) ? $style : "";
?>
<div style="{{$styleString}}">
    <p style="color:#000000;">
       {{$messageString}}  <img src="images/loading.gif" class="img img-esponsive" style="width: 20px; height: 20px;">
    </p>
</div>
