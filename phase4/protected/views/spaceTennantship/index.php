<?php
$this->pageCaption='My Friends';
$this->pageTitle=Yii::app()->name . ' - ' . $this->pageCaption;
$this->pageDescription='	';
// $this->breadcrumbs=array(
// 	'Space Tennantships',
// );
// $this->menu=array(
// 	array('label'=>'Create SpaceTennantship', 'url'=>array('create')),
// 	array('label'=>'Manage SpaceTennantship', 'url'=>array('admin')),
// );
?>

<?php 
    
 	$friendship = $this->GetFriend(Yii::app()->user->id);
 	$count =0;
    foreach($friendship as $friend){
    	$count += 1;
    	print_r($friend);
    	if ($count === 3){
    		echo "<hr>";
    		$count = 0;
    	}else {
    		echo "<br>";
    	}
    }
 ?>
