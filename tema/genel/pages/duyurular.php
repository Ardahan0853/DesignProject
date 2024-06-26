<?php echo !defined("GUVENLIK") ? die("Erisim Engellendi!.") : null;?>
<?php 
$page = @intval($_GET['s']);
if(!$page) $page = 1;
$ttsorgu = $db->prepare("SELECT COUNT(*) FROM duyurular WHERE durum = ? AND dil = ?");
$ttsorgu->execute(array("1",$_SESSION['k_dil']));
$total = $ttsorgu->fetchColumn();
$limit= $limitayar['limit_sayfaduyuru'];
$page_count = ceil($total/$limit);
if($page > $page_count) $page = 1;
$show = $page * $limit - $limit;
$BSorgu = $db->prepare("SELECT * FROM duyurular WHERE durum = ? AND dil = ? ORDER BY sira ASC LIMIT $show,$limit");
$BSorgu->execute(array("1",$_SESSION['k_dil']));
$Bislem = $BSorgu->fetchALL(PDO::FETCH_ASSOC);
$menubul 	= $db->query("SELECT * FROM menu WHERE menu_url = '".$htc['duyuruurl']."' OR link = '".$htc['duyuruurl']."' AND dil = '{$_SESSION['k_dil']}'")->fetch(PDO::FETCH_ASSOC);
$menubas 	= $db->query("SELECT * FROM menu WHERE id = '{$menubul['menu_ust']}' AND dil = '{$_SESSION['k_dil']}'")->fetch(PDO::FETCH_ASSOC);
?>
<!-- PAGE SECTİON BAŞLANGIÇ -->
<section class="page-section">
	<div class="bg-white">
		<div class="col-12 p-0 banner">
			<img src="<?php echo tema;?>/uploads/arkaplan/arkaplan10/<?php echo $arkaplan['arkaplan10'];?>" alt="<?=@$dil['txt145'];?>">
			<div class="slide-overlay"></div>
		</div>
		<div class="container banner-fix">
			<div class="row">
				<div class="col-lg-<?php echo($moduller['alan23'] == "1" ? '9 offset-lg-3' : '12');?> col-md-<?php echo($moduller['alan23'] == "1" ? '7 offset-md-5' : '12');?> z-index-9">
					<ol class="breadcrumb">
						<li><a href="<?php echo $htc['anaurl'];?><?php echo $html;?>"> <i class="fa fa-home"></i> </a></li>						
						<?php if($menubas['menu_isim'] != ""){?>
						<li><a href="<?php echo($menubas['menu_url'] == "0" ? $menubas['link'] : $menubas['menu_url']);?>"><?php echo ilkbuyuk($menubas['menu_isim']);?></a></li>
						<?php }?>
						<li><?=@$dil['txt145'];?></li>
					</ol>
					<a href="javascript:history.back();" class="sayfa-geri"><span class="icon"><i class="fas fa-arrow-left"></i></span>Geri</a>
				</div>
				<?php include('leftbar.php');?>
				<div class="col-lg-<?php echo($moduller['alan23'] == "1" ? '9' : '12');?> col-md-<?php echo($moduller['alan23'] == "1" ? '7' : '12');?> z-index-9">
					<div class="page-content">
						<h2 class="page-title"><?=@$dil['txt145'];?></h2>	
						<?php if($BSorgu->rowCount() != "0"){?>
						<div class="row mr-0 ml-0 etkinlik-box">							
							<?php foreach ( $Bislem as $BSonuc ){?>
							<div class="col-lg-<?php echo $limitayar['limit_duyuru'];?> py-2">
								<div class="row">
									<div class="col-lg-2 col-md-12 full-center">
										<div class="e-tarih">
											<p><?php echo tarih_yil($BSonuc['tarih']);?></p>
											<p><?php echo tarih_ay($BSonuc['tarih']);?></p>
											<p><?php echo tarih_gun($BSonuc['tarih']);?></p>
										</div>
									</div>
									<div class="col-lg-10 col-md-12">
										<div class="e-content">
											<a href="<?php echo $htc['duyurudetayurl']; ?>/<?php echo $BSonuc['seo']; ?><?php echo $html;?>">
												<h5><?php echo $BSonuc['adi'];?></h5>
											</a>
											<p><?php echo kisa(strip_tags($BSonuc['aciklama']),300);?></p>
										</div>
									</div>
								</div>								
							</div>
							<?php }?>
						</div>
						<div class="pagination">
							<ul>
							<?php if($limitayar['limit_sayfaduyuru'] < $total && $limitayar['limit_sayfaduyuru'] > 0){
							$showing = 3;
							if($page > 1){ $previous = $page - 1;?>
							<li class="onceki_sayfa"><a href="<?php echo $htc['duyuruurl'];?>/<?php echo $previous;?><?php echo $html;?>"><i class="fas fa-angle-left"></i></a></li>
							<?php }
							for($i= $page - $showing; $i < $page + $showing + 1; $i++){
							if($i > 0 and $i <= $page_count){
							if($i == $page){?>
							<li><a class="secili" href="javascript:void(0)"><?php echo $i; ?></a></li>
							<?php }else{?>
							<li><a href="<?php echo $htc['duyuruurl'];?>/<?php echo $i; ?><?php echo $html;?>"><?php echo $i; ?></a></li>
							<?php } } } if($page != $page_count){?>
							<?php  $next = $page +1;?>
							<li class="sonraki_sayfa"><a href="<?php echo $htc['duyuruurl'];?>/<?php echo $next; ?><?php echo $html;?>"><i class="fas fa-angle-right"></i></a></li>
							<?php }} ?>	
							</ul>
						</div>
						<?php }else{?>
						<div class="alert alert-warning text-left" style="width:100%;" role="alert">
							<p><?=@$dil['txt139'];?></p>
							<?=@$dil['txt140'];?></br>
							<?=@$dil['txt141'];?>
						</div>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- PAGE SECTİON BİTİŞ -->
<?php include('slider_menu.php');?>