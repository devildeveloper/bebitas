<!--slider left-->
<li class="slide1" data-transition="boxfade" data-slotamount="5" data-masterspeed="300">
	<img alt="" src="<?php print $fields['field_bebita_foto_pefil']->content ;?>" />
	<div class="caption sft carousel-caption" data-x="110" data-y="110" data-speed="1000" data-start="1000" data-easing="easeInBack" style="background: none;">
		<p class="middle"><?php print $fields['field_bebita_ubicacion']->content ;?>, visita</p>
	</div>
	<div class="caption sfl carousel-caption" data-x="98" data-y="141" data-speed="1000" data-start="1000" data-easing="easeOutBack" style="background: none;">
		<p class="big"><?php print $fields['field_bebita_nombres']->content ;?></p>
	</div>
	<div class="caption sfl carousel-caption" data-x="98" data-y="191" data-speed="1000" data-start="1000" data-easing="easeOutBack" style="background: none;">
		<p class="big"><?php print $fields['field_bebitas_telefono']->content ;?></p>
	</div>
	<div class="caption sfb carousel-caption" data-x="111" data-y="247" data-speed="1000" data-start="1000" data-easing="easeInBack" style="background: none; width: 436px;">
		<p class="small"><?php print $fields['field_bebita_descripcion']->content ;?></p>
	</div>
</li>