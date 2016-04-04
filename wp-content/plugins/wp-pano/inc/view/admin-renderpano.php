<script src="<?php echo $js_url;?>"></script>

<script src="<?php echo WPPANO_PATH.'/js/admin.js'?>"></script>

<div style="width:100%; height: auto; display: table;">
	<div id="pano" style="width:100%;height:600px;">
		<script>
			var settings = {};
			settings["cms.vtourpath"] = "<?php echo $vtourpath;?>";
			embedpano({swf: "<?php echo $swf_url;?>", xml: "<?php echo $xml_url;?>", 
				id: "krpanoObject", target:"pano", html5:"prefer", passQueryParameters:false, 
				basepath: "<?php echo $vtourpath;?>",
				vars: settings,
				initvars: {WPPANOPATH:"/<?php echo addslashes(substr(WPPANO_BASEDIR, strlen(ABSPATH)));?>"},
				onready: krpano_ready});
				
			var krpano = document.getElementById("krpanoObject");
			
			function krpano_ready(krpano) {
				//krpano.call('showlog();');
				krpano.set('cms.is_admin', 'true');
				jQuery(document).ready(function(){
					var post_id = document.getElementById('post_id').value;
					var post_title = document.getElementById('post_title').value;	
					krpano.set('cms.post_id', post_id);
					krpano.set('cms.post_title', post_title);
					krpano.call('admin_init();');
				});
			}
		</script>
	</div>
	<div class="admin-add-new-hotspot">
		<table cellpadding="2px" >
			<tr>
				<td>
					Position: 
					<input type="text" size="8" id="ath" value="" readonly="readonly"/>
					<input type="text" size="8" id="atv" value="" readonly="readonly"/>
					<input type="hidden" id="vtourname" value="">
					<input type="hidden" id="post_id" value="<?php echo $post_id; ?>">
					<input type="hidden" id="post_title" value="<?php echo get_the_title(); ?>">
					<input type="hidden" id="hs_style" value="<?php echo $hs_style; ?>">
					<input type="hidden" id="pano_name">
					<input type="hidden" id="scene_name">
					<input type="hidden" id="target_container" value="">
				</td>
				<td>
					<button type="button" disabled="true" class="wppano_AddNewHotspot button-primary" post_id="<?php echo $post_id; ?>" > 
						Add new
					</button>
				</td>
			</tr>
		</table>		
	</div>
	<div class="new-hotspot" style="display: none;">
		<div class="hotspot_element_template" post_id="<?php echo $post_id; ?>" hs_style="<?php echo $hs_style; ?>">
			<button style="float:left; margin:5px; display: none;" type="button" class="SearchHotspot button-primary"> Search in vtour </button>
			<button style="float:left; margin:5px;" type="button" class="wppano_UpdateHotspot button-primary"> Update </button>
			<div style="float:left; margin:10px 15px 0 5px;">
				<span>
				</span>
			</div>
			<button style="float:right; margin:5px;" type="button" class="wppano_DeleteHotspot button-primary"> Delete </button>
			<div style="float:right; margin:10px 10px 0 0;" ></div>
		</div>	
	</div>
	<div class="all-hotspots">
	<?php 
	foreach ( $hotspots as $hotspot ) { $hotspot['data'] = unserialize ($hotspot['data']); ?>
		<div class="hotspot_element"  post_id="<?php echo $post_id; ?>" hs_style="<?php echo $hs_style; ?>" vtourname="<?php echo $hotspot['vtour_name']; ?>" pano_name="<?php echo $hotspot['pano']; ?>" scene_name="<?php echo $hotspot['scene']; ?>" ath="<?php echo $hotspot['data']['ath']; ?>" atv="<?php echo $hotspot['data']['atv']; ?>">
			<button style="float:left; margin:5px; display: none;" type="button" class="SearchHotspot button-primary"> Search in vtour </button>
			<button style="float:left; margin:5px; display: none;" type="button" class="wppano_UpdateHotspot button-primary"> Update </button>
			<div style="float:left; margin:10px 15px 0 5px;">
				<span>
				<?php echo "vtour name: <b>".$hotspot['vtour_name']."</b>"; ?>
				<?php if($hotspot['pano']!='null') echo "pano: <b>".$hotspot['pano']."</b>"; ?>
				<?php if($hotspot['scene']!='null') echo "scene: <b>".$hotspot['scene']."</b>"; ?>
				</span>
			</div>
			<button style="float:right; margin:5px; display: none;" type="button" class="wppano_DeleteHotspot button-primary"> Delete </button>
			<div style="float:right; margin:10px 10px 0 0;" ></div>
		</div>
	<?php } ?>
	</div>
</div>