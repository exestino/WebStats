<!-- http://foundation.zurb.com/docs/navigation.php -->
<!-- add if statment if you are on the current page to then have it selected on the menu -->
<div class="row">
	<div class="twelve columns">
		<nav class="top-bar">
			<ul>
<li class="name"><a href="index.php" <?php echo (hover);?> ><span><?php echo translate(var6); ?></span></a></li>
<li class="toggle-topbar"><a href="#"></a></li>
			</ul>
			<section>
				<ul class="left">
<li class="divider"></li>
<li><?php if($stats_control === true && pluginconfigstatusstats === true){echo '<a class="" href="?mode=server-stats" title="'.translate(var7).'" '.hover.'><span>'.translate(var7).'</span></a>';} ?></li>
<li><?php if($iconomy_control === true && pluginconfigstatusiconomy === true){echo '<a class="" href="?mode=iconomy" title="'.translate(var44).'" '.hover.'><span>'.translate(var44).'</span></a>';} ?></li>
<li><?php if($statslolmewn_control === true && pluginconfigstatusmineconomy === true){echo '<a class="" href="?mode=mineconomy" title="'.translate(var44).'" '.hover.'><span>'.translate(var44).'</span></a>';} ?></li>
<li><?php if($jail_control === true && pluginconfigstatusjail === true){echo '<a class="" href="?mode=jail" title="'.translate(var83).'" '.hover.'><span>'.translate(var83).'</span></a>';} ?></li>
<li><?php if($job_control === true && pluginconfigstatusjobs === true){echo '<a class="" href="?mode=jobs" title="'.translate(var34).'" '.hover.'><span>'.translate(var34).'</span></a>';} ?></li>
<li><?php if($level_control === true){echo '<a class="" href="?mode=levelcraft" title="'.translate(var43).'"><span>'.translate(var43).'</span></a>';} ?></li>
<li><?php if($mcmmo_control === true && pluginconfigstatusmcmmo === true){echo '<a class="" href="?mode=mcmmo" title="'.translate(var78).'" '.hover.'><span>'.translate(var78).'</span></a>';} ?></li>
<li><?php if($InventorySQL_control === true){echo '<a class="" href="?mode=inventorysql" title="'.translate(var79).'" '.hover.'><span>'.translate(var79).'</span></a>';} ?></li>
				</ul>
				<ul class="right">
<li class="divider show-for-medium-and-up"></li>
<li><a title="Return to Main Site" href="<?php echo WS_MAINSITE;?>" <?php echo (hover);?>><?php echo translate(var84);?></a></li>
<li><?php if($idlist_control === true){echo '<a class="" href="?mode=id-list" title="'.translate(var75).'" '.hover.'><span>'.translate(var75).'</span></a>';} ?></li>
				</ul>
			</section>
		</nav>
	</div>
</div>