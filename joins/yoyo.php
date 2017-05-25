<?php
$categories = get_categories(array(
    'orderby' => 'name',
    'order'   => 'ASC',
	
)); 

foreach ($categories as $category) 

{
	$name =$category->name;
	$term_id = $category->term_id;
	 $image   = category_image_src( array('term_id'=>$term_id) , false );
	 $discription =$category->description; 

 echo '<div style="padding-top:60px;padding-bottom:10px;border-top-width:px;border-top-style:solid;border-top-color:;border-bottom-width:px;border-bottom-style:solid;border-bottom-color:;" class="row four-columns cf ui-sortable section row2   " id="le_body_row_4" data-style="eyJjc3NDbGFzcyI6InJvdzIiLCJwYWRkaW5nVG9wIjoiNjAiLCJwYWRkaW5nQm90dG9tIjoiMTAiLCJib3JkZXJUb3BXaWR0aCI6IiIsImJvcmRlclRvcENvbG9yIjoiIiwiYm9yZGVyQm90dG9tV2lkdGgiOiIiLCJib3JkZXJCb3R0b21Db2xvciI6IiIsImFkZG9uIjp7fSwiZWxlbWVudElkIjoibGVfYm9keV9yb3dfMyJ9">';
echo '<div class="fixed-width">';
echo '<div class="one-fourth column cols narrow" id="le_body_row_4_col_1">';
echo '<div class="element-container cf" data-style="" id="le_body_row_4_col_1_el_1">';
echo '<div class="element">';
             echo '<div class="image-caption" style="width:420px;margin-top:0px;margin-bottom:0px;margin-right:auto;margin-left:auto;">';
			  echo '<img src="'.$image.'" border="0" class="full-width" >'; echo '</div>';
             echo '</div>'; echo '</div>';
			 echo'<div class="element-container cf" data-style="" id="le_body_row_4_col_1_el_2">';
			 echo '<div class="element"> ';
echo '<div id="27fc19934fcde6a4e0c3680ac4404dc6" class="feature-box-creator feature-box-creator-style-1" style=" border: 1px #000 solid; border-width: 0px; width: 265px; background-color: #f8f9f9;">';
       echo '<div class="feature-box-content cf" style=" padding-top: 25px; padding-right: 20px; padding-bottom: 30px; padding-left: 20px;" data-epicbox-title="Feature Box Creator Content" "="">';
	   echo '<div class="row element-container cf ">';
	    echo '<h2 style="text-align:center;margin-bottom:15px;">'.$name.'</h2>';
 echo '</div>';
 echo '<div class="row element-container cf center">';
 echo'<div class="op-text-block" style="width:100%; text-align: left;">';
 echo '<p>'.$discription.'</p>';
 echo '</div>';
 echo '</div>';
 echo '<div class="row element-container cf ">';
 echo '<div style="text-align:center">';
 echo '<style type="text/css">
 #btn_1_329770b482aab96cd741332defddfd87 .text {font-size:18px;color:#fff;font-weight:bold;}#btn_1_329770b482aab96cd741332defddfd87 {padding:12px 20px;border-color:#d66b0a;border-width:1px;-moz-border-radius:0px;-webkit-border-radius:0px;border-radius:0px;background:#f59a18;background:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #f59a18), color-stop(100%, #ffa035));background:-webkit-linear-gradient(top, #f59a18 0%, #ffa035 100%);background:-moz-linear-gradient(top, #f59a18 0%, #ffa035 100%);background:-ms-linear-gradient(top, #f59a18 0%, #ffa035 100%);background:-o-linear-gradient(top, #f59a18 0%, #ffa035 100%);background:linear-gradient(to bottom, #f59a18 0%, #ffa035 100%);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#f59a18, endColorstr=#ffa035, GradientType=0);box-shadow:none;}#btn_1_329770b482aab96cd741332defddfd87 .gradient {-moz-border-radius:0px;-webkit-border-radius:0px;border-radius:0px;}#btn_1_329770b482aab96cd741332defddfd87 .shine {-moz-border-radius:0px;-webkit-border-radius:0px;border-radius:0px;}#btn_1_329770b482aab96cd741332defddfd87 .active {-moz-border-radius:0px;-webkit-border-radius:0px;border-radius:0px;}#btn_1_329770b482aab96cd741332defddfd87 .hover {-moz-border-radius:0px;-webkit-border-radius:0px;border-radius:0px;}</style>';
 echo '<a href="http://writetofame.com/mypelessons/category/'.$name.'" id="btn_1_329770b482aab96cd741332defddfd87" class="css-button style-1">';
 echo '<span class="text">View Course';
 echo '</span>';
 echo '<span class="hover"></span><span class="active"></span></a></div>';
 echo '</div>'; echo '</div>';
 echo '</div>';  echo '</div>'; echo '</div>'; echo '</div>'; echo '</div>'; echo '</div>';
}
?>