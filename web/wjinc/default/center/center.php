<span class="blue" <?=$this->user['name']?"style='display:none'":''?>>无名大大</span>
			  <span class="blue" <?=!$this->user['name']?"style='display:none'":''?>><?=substr($this->user['name'] ,0,3).' 大大'?></span>
		</div>
		<div class="text2">
			真实姓名： 
			<span class="blue" <?=$this->user['name']?"style='display:none'":''?>> 马上填写真实姓名？ </span>
			<span class="blue" <?=!$this->user['name']?"style='display:none'":''?>> <?=substr($this->user['name'] ,0,3).'**'?> </span>
			<br>
		</div>
		<div class="text3">欢迎来到<?= $this->settings['webName'] ?>。专注彩票网投领导者，一路有你相伴，让梦想飞！</div>