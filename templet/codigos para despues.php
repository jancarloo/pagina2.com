<li  
		
		<?php  $va=[];					$va[] = [ "type"=>"imagen",
										   "id"=>"carr<?php echo $i;?>_imagen",
											"width"=>"480",
											"height"=>"356",
											"url"=>$this->url_templet(["return"=>true]).'images/img1.jpg' ],
											["type"=>"text",
										   "id"=>"carr<?php echo $i;?>_titulo",
											"placeholder"=>"TituloH3"],
											["type"=>"text",
										   "id"=>"carr<?php echo $i;?>_text",
											"placeholder"=>"parrafo"]
											;  ?>  data-var='<?php echo json_encode($va); ?>'>
										   
									  


<div class="bordered-thumb " data-page="inicio">

							 <img height="480" width="356" id="carr<?php echo $i; ?>_imagen" src="<?php $this->pnt('carr'.$i.'_imagen',$this->url_templet(['return'=>true]).'images/img1.jpg'); ?>"></div>