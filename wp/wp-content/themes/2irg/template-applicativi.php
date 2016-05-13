<?php
/*
	Template Name: Applicativi
*/
?>

<?php get_header(); ?>
<div id="content-full">
 <h1 id="post-<?php the_ID(); ?>" class="page-title"><?php the_title();?></h1>
 <div class="content-ver-sep"> </div>
 <div class="entrytext">
 <script type="text/javascript">
		//<![CDATA[
		$(function(){
			$('#demo-tip-darkgray').poshytip({
				className: 'tip-darkgray',
				bgImageFrameSize: 11,
				offsetX: -25,
				allowTipHover: true
			});
		});
		//]]>
	</script>
  <div class='selector'>
  <ul>
   <li><input id='c1' type='checkbox'><a id="demo-tip-darkgray" title="10.79.228.3<?php echo "<br>"; ?>10.79.228.4" target="_blank" href="http://amr.2irg.local/">AMR</a></li>
   <li><input id='c2' type='checkbox'><a id="demo-tip-darkgray" title="10.79.228.21<?php echo "<br>"; ?>10.79.228.22" target="_blank" href="http://aug.2irg.local/">AUG</a></li>
   <li><input id='c3' type='checkbox'><a id="demo-tip-darkgray" target="_blank" href="http://built.2irg.local/">BUILT</a></li>
   <li><input id='c4' type='checkbox'><a id="demo-tip-darkgray" title="10.79.228.13<?php echo "<br>"; ?>10.79.228.14<?php echo "<br>"; ?>10.79.226.9<?php echo "<br>"; ?>10.79.226.10" target="_blank" href="http://four.2irg.local/">FOUR</a></li>
   <li><input id='c5' type='checkbox'><a id="demo-tip-darkgray" title="Engine M: 10.79.229.91<?php echo "<br>"; ?>Engine S: 10.79.229.92<?php echo "<br>"; ?>Device M: 10.79.227.7<?php echo "<br>"; ?>Device S: 10.79.227.8" target="_blank" href="#">MIM</a></li>
   <li><input id='c6' type='checkbox'><a id="demo-tip-darkgray" target="_blank" href="http://pds.2irg.local/">PDS</a></li>
   <li><input id='c7' type='checkbox'><a id="demo-tip-darkgray" target="_blank" href="http://sad.2irg.local/openwork/login.aspx">SAD</a></li>
   <li><input id='c8' type='checkbox'><a id="demo-tip-darkgray" target="_blank" href="http://sgmg.2irg.local/">SGMG</a></li>
   <li><input id='c9' type='checkbox'><a id="demo-tip-darkgray" target="_blank" href="http://wfmgas.2irg.local/">WFMGAS</a></li>
  </ul>
  <button>Applicazioni 2i Rete Gas</button>
  </div>
  <script>var nbOptions = 8;
  var angleStart = -360;
  
  // jquery rotate animation
  function rotate(li,d) {
      $({d:angleStart}).animate({d:d}, {
          step: function(now) {
              $(li)
                 .css({ transform: 'rotate('+now+'deg)' })
                 .find('a')
                    .css({ transform: 'rotate('+(-now)+'deg)' });
          }, duration: 0
      });
  }
  
  // show / hide the options
  function toggleOptions(s) {
      $(s).toggleClass('open');
      var li = $(s).find('li');
      var deg = $(s).hasClass('half') ? 180/(li.length-1) : 360/li.length;
      for(var i=0; i<li.length; i++) {
          var d = $(s).hasClass('half') ? (i*deg)-90 : i*deg;
          $(s).hasClass('open') ? rotate(li[i],d) : rotate(li[i],angleStart);
      }
  }
  
  $('.selector button').click(function(e) {
      toggleOptions($(this).parent());
  });
  
  setTimeout(function() { toggleOptions('.selector'); }, 100);//@ sourceURL=pen.js
  </script>
  <script type="text/javascript">
  
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);
  
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  
  </script>
  
 </div>
 <div class="clear"> </div>
 <?php edit_post_link('Edit This Entry', '<p>', '</p>'); ?>
 <?php comments_template( '', true ); ?>
</div>
<?php get_footer(); ?>

