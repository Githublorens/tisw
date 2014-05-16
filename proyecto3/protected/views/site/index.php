<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;

?>
<h1>BIENVENIDO AL TESISPRO</h1>
<h2>Sitio destinado para los alumnos en su proceso de proyecto de t&iacute;tulo <?php 
	if(yii::app()->user->name)    
		echo yii::app()->user->name;
	else
		echo 'estamos cagado';
?></h2>


<p>En el sitio podr&aacute;s:
<ul>
	<li>Conseguir toda la informaci&oacute;n necesar&iacute;a sobre el proceso de t&iacute;tulo.</li>
	<li>Obtener una comunicaci&oacute; ag&iacute;l con tus profesores</li>
</ul>

<p>Para mayor detalle visitar &iacute;tem Informaciones o escribirnos en el &iacute;tem Contacto<p>
