<?php

function changeDateFormat($date, $date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d',$date)->format($date_format);
}

function imgPath($image){
    return public_path('images/products/'.$image);
}
