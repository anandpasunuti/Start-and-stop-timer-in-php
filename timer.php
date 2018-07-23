<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="jquery-1.8.0.min.js"></script>

<style>

</style>


<script>
$(document).ready(function(){
	

//var output = $('h1');
var isPaused = false;
var time = 0;

var t = window.setInterval(function() 
{
  if(!isPaused) 
  {
	//time++;
   // output.text("Seconds: " + time);
   $("#result_shops").load('time.php');
  }
}, 1000);

//with jquery
$('.pause').on('click', function(e) 
{
  e.preventDefault();
  isPaused = true;
});

$('.play').on('click', function(e) 
{
  e.preventDefault();
  isPaused = false;
});


});
</script>


<h1><div class="sub_shops">Timer</div></h1>
<h1><div id="result_shops"></div></h1>


<button class="play">Play</button>
<button class="pause">Pause</button>




