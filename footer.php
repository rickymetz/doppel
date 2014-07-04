<script src="https://rawgithub.com/WickyNilliams/headroom.js/gh-pages/assets/scripts/main.js"></script>
	<script>
// grab an element
var myElement = document.querySelector("header");
// construct an instance of Headroom, passing the element
var headroom  = new Headroom(myElement);
// initialise
headroom.init(); 
</script>

<script>
function toggle(el){
    if(el.className!="pause")
    {
        el.src='img/pause.svg';
        el.className="pause";
    }
    else if(el.className=="pause")
    {
        el.src='img/play.svg';
        el.className="play";
    }
    
    return false;
}
</script>
<script src="js/min.wow.js"></script>
<script>
wow = new WOW(
  {
    boxClass:     'wow',      // default
    animateClass: 'animated', // default
    offset:       150         // default
  }
)
 new WOW().init();
</script>
</body>

</html>