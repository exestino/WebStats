<?php

//SETS NUMBER OF USERS TO PRINT
function get_iconomy_user_count()
{
	$query = mysql_query("SELECT COUNT(username) FROM ".WS_CONFIG_ICONOMY."");
	$row = mysql_fetch_array($query);
	return $row[0];
}

//ICONOMY SORT
function get_iconomy_user_stats($sort, $start, $end)
{
	if($sort != 'balance') 
	{
		$sortkey = 'ORDER BY username ASC';
	}
	elseif($sort == 'balance')
	{
		$sortkey = 'ORDER BY balance DESC';
	}
	$query = mysql_query("SELECT username, balance FROM ".WS_CONFIG_ICONOMY." ".$sortkey." LIMIT ".$start.",".$end."");
	$time = 0;
	while($row = mysql_fetch_array($query)) 
	{
		$players[$time] = $row[0];
		$time++;
	}  
	return $players;	
}

//PLAYER MONEY COUNT
function iconomy_player_get_money($player)
{
	$query = mysql_query("SELECT username, balance FROM ".WS_CONFIG_ICONOMY." WHERE username = '".$player."'");
	$row = mysql_fetch_array($query);
	$money = explode('.', $row[1]);
	$money[2] = $row[0];
	return $money;
}

//SERVER MONEY COUNT
function iconomy_server_get_money()
{
	$query = mysql_query("SELECT COUNT(username), SUM(balance) FROM ".WS_CONFIG_ICONOMY." WHERE username != '".WS_ICONOMY_OMIT."'");
	$row = mysql_fetch_array($query);
	$money = explode('.', $row[1]);
	$money[2] = $row[0];
	return $money;
}

//PLAYER BOX MONEY COUNT
function iconomy_player_get_money_table($player)
{
	$money = iconomy_player_get_money($player);
	$output .= '<div class="head_contentbox_iconomy" style="clear:both">
					<div class="head_stat">'.translate("var50").':</div>
					<div class="head_content"> '.$money[0].' '.WS_ICONOMY_MAIN.'</div>
				</div>';
	$output .= "\n";
	return $output;
}

//SERVER BOX MONEY COUNT
function iconomy_server_get_money_table()
{
	$money = iconomy_server_get_money();
	$output .= '<div class="head_contentbox_iconomy" style="clear:both">
					<div class="head_stat">'.translate("var47").':</div>
					<div class="head_content"> '.$money[0].' '.WS_ICONOMY_MAIN.'</div>
				</div>';
	$output .= "\n";
	return $output;
}

//TOP BOX
function iconomy_server_details_table()
{
	$money = iconomy_server_get_money();
	
	$output = '<div class="head_logo" style="background-image:url('.WS_CONFIG_LOGO.');"></div>';

	$output .= '<div class="head_contentbox">';
	$output .= "\n";
	$output .= '<div style="clear:both">
					<div class="head_stat" style="width:350px; font-weight:bold;"><div align="center">'.translate('var44').':</div></div>
				</div>
				<br /><br />
				<div style="clear:both">
					<div class="head_stat">'.translate("var45").':</div>
					<div class="head_content"> '.WS_ICONOMY_MAIN.'</div>
				</div>
				
				<div>
					<div class="head_stat">'.translate("var46").':</div>
					<div class="head_content"> '.WS_ICONOMY_SUB.'</div>
				</div>
				
				<div>
					<div class="head_stat">'.translate("var47").':</div>
					<div class="head_content"> '.$money[0].' '.WS_ICONOMY_MAIN.'</div>
				</div>
				
				<div>
					<div class="head_stat">'.translate("var48").':</div>
					<div class="head_content"> '.floor($money[0] / $money[2]) .' '.WS_ICONOMY_MAIN.'</div>
				</div>';
	$output .= "\n";
	$output .= '</div>';
	return $output;
}

//LOWER PAGE PLAYER TABLE
function iconomy_server_player_table($player, $money)
{
		global $image_control;
		if($image_control == true) 
		{
			$image = small_image($player);
		}
		
		global $stats_control;
		if($stats_control == true)
		{ 
			$stats = '<a href="index.php?mode=show-player&user='.$player.'">'.$player.'</a>'; 
		}
		else
		{ 
			$stats = ''.$player.'';
		}
		
		$money = iconomy_player_get_money($player);
   		$output .= '<tr><td>&nbsp;&nbsp;'.$image.''.$stats.'</td>';
    		$output .= '<td>'.$money[0].' '.WS_ICONOMY_MAIN.'</td>';
		$output .= "</tr>";
	return $output;
}

?>