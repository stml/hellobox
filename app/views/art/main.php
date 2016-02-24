<div id="content">

<div class="intro">

<p>This is the digital art portfolio of James Bridle.</p>

</div>

<ul class="artworks">
<?
$dirs = array_filter(glob('*'), 'is_dir');
foreach($dirs as $dir) {
	echo '<li><a href="art/'.$dir.'">'.$dir.'</a></li>';
	}
?>
</ul>
  
</div>
