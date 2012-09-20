<?php
	
	<script type="text/javascript">
				var imgs = [];
				for(var i=0;i<50;i++){
				/*imgs[i]={file: '0'+(Math.floor(Math.random()*6)+2)+'.jpg',title: '',desc: '',url: '#'};*/
				imgs[i]={file: '0'+(Math.ceil (7 * Math.random ()))+'.jpg',title: '',desc: '',url: '#'};
				document.writeln (imgs[i]);
				}
	</script>
?>