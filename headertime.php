<div class="top_bar">
	  <div class="wrap">
	    <div class="min_logo"><img src="../../images/logo.png" /></div>
		<div class="ui inline dropdown" id="avatar">
		    <div class="text">
		      <img class="ui avatar image" src="<?php echo $user_info['4'];?>">
		      <?php echo $user_info['2'];?>
		    </div>
		    <i class="dropdown icon" style="color: white;"></i>
		    <div class="menu">
		      <a class="item" href="https://www.icm-tn.com/crm/sup/notifications.php">
		        <i class="ui green bell alternate icon"></i>
		        NOTIFICATIONS <div class="ui red horizontal label"><?php $querynbrappel = mysql_query("SELECT lu FROM `appel` where lu=1"); echo mysql_num_rows($querynbrappel); ?></div>
		      </a>
		    </div>
	  </div>
	    <div id="time2">
			<ul>
			  <li id="hours2"> </li>
			    <li id="point2">:</li>
			    <li id="min2"> </li>
			    <li id="point2">:</li>
			    <li id="sec2"> </li>
			</ul>
		</div>
		<div id="Date2"></div>
	    <div class="clear"></div>
	  </div>
	</div>

<script type="text/javascript">
	$('.ui.dropdown')
  .dropdown();
</script>