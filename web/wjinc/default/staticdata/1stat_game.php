<?php
//public final function pk10clcount($gameId){
$datetime=time()-1*24*3600;
$clcount=$this->getRows("select data from {$this->prename}data where type={$gameId} and time>={$datetime} order by number desc limit 200");
//var_dump($clcount);
$tdcount=array();
$tempmnum=array();
$i=0;
$temp=array();
foreach($clcount as $k => $var){
	$kj=explode(',',$var['data']);
	$totalnum=0;
	foreach($kj as $key => $num){
			$tdcount['count_n_'.($key+1).'_'.intval($num)]+=1;
			if($temp['nums_'.($key+1)]<=25){
				if($k==0){
					$tdcount['nums_'.($key+1)]='<td>';
				}
				if($tempmnum['nums_'.($key+1)]===intval($num)){
					if($temp['nums_'.($key+1)]==25){
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'</td>';
					}else{
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'<br>';
					$temp['nums_'.($key+1)]--;
					}
				}elseif(!is_null($tempmnum['nums_'.($key+1)])){
					if($temp['nums_'.($key+1)]==25){
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'</td>';
					}else{
					$tdcount['nums_'.($key+1)].=$tempmnum['nums_'.($key+1)].'</td><td>';
					}
				}
				$temp['nums_'.($key+1)]++;
			}
			
			$tempmnum['nums_'.($key+1)]=intval($num);
			
			if($temp['size_'.($key+1)]<=25){
				if($k==0){
					$tdcount['size_'.($key+1)]='<td>';
				}
				if($tempmnum['size_'.($key+1)]==allcl($gameId, intval($num), 'size')){
					if($temp['size_'.($key+1)]==25){
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'</td>';
					}else{
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'<br>';
					$temp['size_'.($key+1)]--;
					}
				}elseif($tempmnum['size_'.($key+1)]){
					if($temp['size_'.($key+1)]==25){
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'</td>';
					}else{
					$tdcount['size_'.($key+1)].=$tempmnum['size_'.($key+1)].'</td><td>';
					}
				}
				$temp['size_'.($key+1)]++;
			}
			
			if($temp['firstsd_'.($key+1)]<=25){
				if($k==0){
					$tdcount['firstsd_'.($key+1)]='<td>';
				}
				if($tempmnum['firstsd_'.($key+1)]==allcl($gameId, intval($num), 'firstsd')){
					if($temp['firstsd_'.($key+1)]==25){
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'</td>';
					}else{
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'<br>';
					$temp['firstsd_'.($key+1)]--;
					}
				}elseif($tempmnum['firstsd_'.($key+1)]){
					if($temp['firstsd_'.($key+1)]==25){
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'</td>';
					}else{
					$tdcount['firstsd_'.($key+1)].=$tempmnum['firstsd_'.($key+1)].'</td><td>';
					}
				}
				$temp['firstsd_'.($key+1)]++;
			}
			
			$tempmnum['size_'.($key+1)]=allcl($gameId, intval($num), 'size');
			$tempmnum['firstsd_'.($key+1)]=allcl($gameId, intval($num), 'firstsd');
			$totalnum+=intval($num);
	}
	//$totalnum=intval($kj[0])+intval($kj[1]);
	$vala=intval($kj[0]);
	$val5=intval($kj[4]);
	if($temp['lhh']<=25){
		if($k==0){
			$tdcount['lhh']='<td>';
		}
		if($tempmnum['lhh']==cqssclhh($vala, $val5, 'lhh')){
			if($temp['lhh']==25){
			$tdcount['lhh'].=$tempmnum['lhh'].'</td>';
			}else{
			$tdcount['lhh'].=$tempmnum['lhh'].'<br>';
			$temp['lhh']--;
			}
		}elseif($tempmnum['lhh']){
			if($temp['lhh']==25){
			$tdcount['lhh'].=$tempmnum['lhh'].'</td>';
			}else{
			$tdcount['lhh'].=$tempmnum['lhh'].'</td><td>';
			}
		}
		$temp['lhh']++;
	}
	$tempmnum['lhh']=cqssclhh($vala, $val5, 'lhh');
	
	
	$vala1=intval($kj[0]);
	$val2=intval($kj[1]);
	if($temp['lhhwq']<=25){
		if($k==0){
			$tdcount['lhhwq']='<td>';
		}
		if($tempmnum['lhhwq']==cqssclwq($vala1, $val2, 'lhhwq')){
			if($temp['lhhwq']==25){
			$tdcount['lhhwq'].=$tempmnum['lhhwq'].'</td>';
			}else{
			$tdcount['lhhwq'].=$tempmnum['lhhwq'].'<br>';
			$temp['lhhwq']--;
			}
		}elseif($tempmnum['lhhwq']){
			if($temp['lhhwq']==25){
			$tdcount['lhhwq'].=$tempmnum['lhhwq'].'</td>';
			}else{
			$tdcount['lhhwq'].=$tempmnum['lhhwq'].'</td><td>';
			}
		}
		$temp['lhhwq']++;
	}
	$tempmnum['lhhwq']=cqssclwq($vala1, $val2, 'lhhwq');	
	
	
	
	
	
	
	
	
	
	
	
	
	
	if($temp['total_size']<=25){
		if($k==0){
			$tdcount['total_size']='<td>';
		}
		if($tempmnum['total_size']==allcl($gameId, $totalnum, 'total_size')){
			if($temp['total_size']==25){
			$tdcount['total_size'].=$tempmnum['total_size'].'</td>';
			}else{
			$tdcount['total_size'].=$tempmnum['total_size'].'<br>';
			$temp['total_size']--;
			}
		}elseif($tempmnum['total_size']){
			if($temp['total_size']==25){
			$tdcount['total_size'].=$tempmnum['total_size'].'</td>';
			}else{
			$tdcount['total_size'].=$tempmnum['total_size'].'</td><td>';
			}
		}
		$temp['total_size']++;
	}
	$tempmnum['total_size']=allcl($gameId, $totalnum, 'total_size');
	
	if($temp['total_firstsd']<=25){
		if($k==0){
			$tdcount['total_firstsd']='<td>';
		}
		if($tempmnum['total_firstsd']==allcl($gameId, $totalnum, 'total_firstsd')){
			if($temp['total_firstsd']==25){
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'</td>';
			}else{
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'<br>';
			$temp['total_firstsd']--;
			}
		}elseif($tempmnum['total_firstsd']){
			if($temp['total_firstsd']==25){
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'</td>';
			}else{
			$tdcount['total_firstsd'].=$tempmnum['total_firstsd'].'</td><td>';
			}
		}
		$temp['total_firstsd']++;
	}
	$tempmnum['total_firstsd']=allcl($gameId, $totalnum, 'total_firstsd');
	
}

?>