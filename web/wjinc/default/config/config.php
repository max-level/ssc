<?php
$this->getSystemSettings();
$config=array();
$config['logoUrl']=$this->settings['logoUrl'];
$config['zxkfUrl']=$this->settings['zxkfUrl'];
$config['defaultSkin']=$this->settings['defaultSkin'];
$config['isLocal']=false;
echo 'var webAppConfig = '.json_encode($config).';';
?>