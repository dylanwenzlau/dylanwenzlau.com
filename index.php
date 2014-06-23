<?php
include "start.php";
include "head.php";
?>

<title>Dylan Wenzlau</title>

<style>
	#page {padding:0 10px;}
	.tab {display:none;padding:20px;border:2px solid #999;border-radius:5px;}
	ul.menu {list-style:none;}
	.menu li {cursor:pointer;font-size:1.2em;line-height:1.8em;padding:0 15px;}
	.menu li:hover {color:#00bff3;}
	
	.menu li {transition:.25s;-webkit-transition:.25s;-moz-transition:.25s;}
</style>

<div id="page">
	
	<div class="p1">
		<ul class="menu">
			<li class="home">Home</li>
		</ul>
		<h2>Coding Adventures</h2>
		<ul class="menu">
			<li class="imgflip">Imgflip.com</li>
			<li class="ezrush">Ezrush.com</li>
			<li class="spires">Spires</li>
			<li class="bubbles">Bubbles</li>
			<li class="tetris">Tetris</li>
		</ul>
		<h2>Film Adventures</h2>
		<ul class="menu">
			<li class="malarky">No Malarky</li>
			<li class="tilt">TILT</li>
			<li class="random">Random stuff</li>
		</ul>
	</div>

	<div class="p2">
		<div class="home tab">
			<h3>Hi. I'm Dylan Wenzlau.</h3>
		</div>
		<div class="imgflip tab">
			<h3><a href="http://imgflip.com">Imgflip.com</a></h3>
			<p>
				I founded this website in July of 2011. It began as an experiment comparing memes, then evolved into a general image site
				with the mission of collecting and inspiring the creation of awesome images. It has been my primary learning project as
				I've progressed through web development. 
			</p>
			<p>
				Sometime in the winter I created the <a target="_blank" href="http://imgflip.com/memegenerator">Meme Generator</a> and a
				<a target="_blank" href="http://imgflip.com/memetemplates">Meme Templates</a> page. For some reason, there wasn't (and still isn't)
				a go-to templates page for all the most popular internet memes, so I made one. Later I created the
				<a target="_blank" href="http://imgflip.com/gifgenerator">Animated Gif Generator</a>
				because there were a ton of terribad gif generators online, and the best ones didn't have all the desired features.
			</p>
			<p>
				I wrote everything on the site from scratch. The only library I use is basic JQuery, for shortcuts I would otherwise
				have written myself. Imgflip uses PHP, Python, Javascript, and MySQL.
				
				The imgflip folder is roughly 12000 lines of code (500 pure CSS, 2500 pure javascript, rest is a php/html/css/javascript mix)
			</p>
			<h4>Some of the technical accomplishments</h4>
			<ul>
				<li>Text-sizing and text-placing algorithm for the Meme Generator</li>
				<li>Drag n' drop image arranging for the Gif Generator</li>
				<li>Auto-complete for image tagging</li>
				<li>
					Used <a target="_blank" href="http://ffmpeg.org">ffmpeg</a>, <a target="_blank" href="http://imagemagick.org">Imagick</a>, and
					<a target="_blank" href="http://rg3.github.com/youtube-dl/">youtubedl</a> via linux command line for making animated gifs.
					I hacked the youtubedl script to extract video size, and to automatically reset the connection to youtube
					after 1MB downloaded (a hack to get the fastest bandwidth the whole time, and they probably hate me for it :P)
				</li>
				<li>Image submission addons for both Chrome and Firefox</li>
				<li>Comment system with ratings, nested comments, and in-page meme comments (best feature imo ;])</li>
			</ul>
		</div>
		
		<div class="spires tab">
			<h3>Spires, a yet-to-be-officially-named HTML5 game</h3>
			<h4><a href="/p/spires">Demo the Game</a> (requires a modern browser)</h4>
			<p>
				This is a basic tower defense game using only HTML5 canvas. It's not finished, but there are some cool features
				to check out. If you choose a specialty you can use the special abilities for your towers.
			</p>
			<p>
				This is the most object oriented work I've done in javascript, and I learned a lot. No libraries are used.
				~1800 lines of javascript code so far.
			</p>
		</div>
		
		<div class="ezrush tab">
			<h3><a href="http://ezrush.com">ezrush.com</a></h3>
			<p>I built this as a tool for my fraternity to organize rush. Login with guest/guest if you want to mess around with it.</p>
		</div>
		
		<div class="tetris tab">
			<h3>Tetris</h3>
			<h4><a href="/p/tetris">Play</a></h4>
			<p>
				One night I felt like building tetris. So I did.
			</p>
			<p>
				Play the dubstep version for optimal awesomeness.
			</p>
		</div>
		
		<div class="bubbles tab">
			<h3>Bubbles!</h3>
			<h4><a href="/p/bubbles">Play</a></h4>
			<p>
				So my friend has this game on his Cable TV box, called Bubble Blast. It was pretty addicting and we would see
				how many games we could win in a row. So... I wrote an algorithm in Java to compute the solution. This little javascript
				game is how I tested it.
			</p>
		</div>
		
		<div class="school tab">
			<h3>Coding I've actually done for school</h3>
			<h4>*omitting the trivial stuff</h4>
			<ul>
				<li>Memory allocator in C (aka re-writing malloc and realloc more efficiently for our purposes)</li>
				<li>
					Java: Quicksort, Mergesort, Bucket sort, Counting sort, Divide/Conquer and n-time Closest-Pairs. All multi-threaded.
					My Bucket Sort + Closest Pairs implementation earned me 1st place for speed in Algorithms class.
				</li>
			</ul>
		</div>
		
		<div class="malarky tab">
			<h3>No Malarky, Summer 2009</h3>
			<h4><a target="_blank" href="http://www.youtube.com/watch?v=DX2bz8WtHjY">Trailer on Youtube</a></h4>
			<p>
				Back in Juneau AK I did a lot of freestyle skiing and filming with my friends. This film is the latest one I made with them.
			</p>
			<p>
				For nine days straight my every waking hour was spent gathering footage, talking to sponsors, and video editing. We finished
				just in time to show the movie for around 300 people at Juneau's Centennial Hall. We grossed about 2000 bucks.
			</p>
			<p>
				<a target="_blank" href="http://imgflip.com/i/vya">Dvd Cover</a><br/>
				<a target="_blank" href="http://imgflip.com/i/vyc">Premiere Poster #1</a><br/>
				<a target="_blank" href="http://imgflip.com/i/vyb">Premiere Poster #2</a>
			</p>
		</div>
		
		<div class="tilt tab">
			<h3>TILT, Summer 2007</h3>
			<p>
				This was our first ski film that we did a premiere for, and a couple hundred people showed up!
				No trailer, sorry. We weren't as good at skiing anyway so it wasn't as exciting :P
			</p>
		</div>
		
		<div class="random tab">
			<h3>Random Stuff</h3>
			<p>
				<a href="http://www.youtube.com/watch?v=43nl6VQuV9A">Hacking Peggle</a>
			</p>
		</div>
	</div>
	
	<div class="clear"></div>
</div>

<script type="text/javascript">
	function hideTabs(){
		$('.tab').hide();
	}
	
	$(document).ready(function(){
		$('.home.tab').fadeIn(200);
		
		$('.menu li').each(function(){
			$(this).click(function(){
				var thiz = this;
				$('.tab:visible').fadeOut(200,function(){
					$('.tab.'+thiz.className).fadeIn(200);
				});
			})
		})
	})
</script>

<?php include "foot.php";?>
