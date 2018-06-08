<div class="row">
	<div id="pagetitle" class="pagetitle col-lg-8 col-lg-offset-2">
<h1>Portfolio-Birdspotting</h1>
    </div><!---end of pagetitle-->
	<div >
		
	<a href="http://gravityfoot.worcestercomputing.com/My_website/index.php?p=addBird" class="btn btn-primary btn-success btn-lg active hidden-sm hidden-xs" role="button" aria-pressed="true">Add New Bird</a>
	</div>
	
</div><!---end of row-->

<div class="row">
	<div id="pagetitle" class="pagetitle col-lg-8 col-lg-offset-2">
<h3><a href="index.php?p=birdtypes"> Click here to see our list of bird types!</a></h3>
    </div><!---link to bird types-->
</div><!---end of row-->

<title>Search</title>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<style>
	#show_list{
		
		
		border: 1px solid #ddd;
		display: none;
	}
	


</style>

<script>//search function for portfolio page
$(document).ready(function(e){
	$("#search").keyup(function(){
		$("#show_list").show();//show data/results in this div from search keyword
		var text = $(this).val();
		$.ajax({
			type: 'POST',
			url: 'ajax/search.php',
			data: {
				search: text	
			},
			dataType: 'json',
			success: function(data){
				$("#show_list").html('');
				$.each(data, function( index, bird ) {
				  $("#show_list").append('<div class="bird-result"><a href="index.php?p=viewbird&id=' + bird.bird_id + '">' + bird.bird_name + '</a></div>');//search function results portfolio page
				});
			}
		});
	})
});
</script>


<div class="row" style="margin-top: 20px;">

<div id="portpic1">
    <img src="images/portpic1.jpg" alt="buzzard" class="col-lg-3 col-md-3 col-lg-offset-1 col-md-offset-1 hidden-sm hidden-xs img-responsive">
</div>

<div class="col-lg-4 col-md-4">
	<div class="row">
	<div id="searchresults" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
<label for="search">Search for bird</label>
<input class="form-control" type="search" name="search" placeholder="Keyword Search" id="search" />

<div id="show_list"></div>
</div>
</div>
</div>
	
<div id="portpic2">
    <img src="images/portpic2.jpg" alt="kingfisher" class="col-lg-3 col-md-3 hidden-sm hidden-xs img-responsive">
</div>

</div><!-- end of row -->

<div class="row" style="margin-top: 5px;">

<div id="breaker" class="col-lg-10 col-lg-offset-1" style="background-color:#5C8E3A;"></div>
</div>


<div class="row" style="margin-top: 20px;">

<div id="portpic3">
    <img src="images/portpic3.jpg" alt="silver wood duck" class="col-lg-3 col-md-3 col-lg-offset-1 col-md-offset-1 hidden-sm hidden-xs img-responsive">
</div>

<p class="col-lg-2 col-md-2 hidden-sm hidden-xs">
	Wood ducks can be found in North America, British Columbia, and Quebec, Canada. They have been known to be seen as far south as Mexico and Florida.
 Silver Wood Ducks are found in wooded swamp areas, marshes, and streams.</p>

<div id="portpic4">
    <img src="images/portpic4.jpg" alt="hooded merganser" class="col-lg-3 col-md-3 col-lg-offset-0 col-sm-8 col-xs-8 col-sm-offset-2 col-xs-offset-2 img-responsive">
</div>

<p class="col-lg-2 col-md-2 col-sm-8 col-xs-8 col-lg-offset-0 col-sm-offset-2 col-xs-offset-2">
	The hooded merganser (Lophodytes cucullatus) is a species of small duck. It is the only extant species in the genus Lophodytes. The bird is striking in appearance; both sexes have crests that they can raise or lower, and the breeding plumage of the male is handsomely patterned and coloured. </p>
	
</div>


<div class="row" style="margin-top: 5px;">

<div id="breaker" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1" style="background-color:#5C8E3A;"></div>
</div>

<div class="row" style="margin-top: 20px;">

<div id="portpic5">
    <img src="images/portpic5.jpg" alt="Classic Roman Geese" class="col-lg-3 col-md-3 col-lg-offset-1 col-md-offset-1 hidden-sm hidden-xs img-responsive">
</div>

<p class="col-lg-2 col-md-2 hidden-sm hidden-xs">
	The Roman goose is an Italian breed of domestic goose. It is said to be one of the oldest breeds of goose, bred more than 2000 years ago and originally sacred to the Goddess Juno. In the modern period, it is kept for a range of purposes such as for meat and eggs depending on location.</p>

<div id="portpic6">
    <img src="images/portpic6.jpg" alt="Northern pintail duck" class="col-lg-3 col-md-3 img-responsive hidden-sm hidden-xs">
</div>

<p class="col-lg-2 col-md-2 hidden-sm hidden-xs">
The pintail or northern pintail (Anas acuta) is a duck with wide geographic distribution that breeds in the northern areas of Europe, Asia and North America. It is migratory and winters south of its breeding range to the equator. Unusually for a bird with such a large range, it has no geographical subspecies if the possibly conspecific duck Eaton's pintail is considered to be a separate species.</p>



</div><!-- end of row -->

<div class="row" style="margin-top: 5px;">

<div id="breaker" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 hidden-sm hidden-xs" style="background-color:#5C8E3A;"></div>
</div>

<div class="row" style="margin-top: 20px;">

<div id="portpic7">
    <img src="images/portpic7.jpg" alt="chaffinch" class="col-lg-3 col-md-3 col-lg-offset-1 col-md-offset-1 col-sm-8 col-xs-8 col-sm-offset-2 col-xs-offset-2 img-responsive">
</div>

<p class="col-lg-2 col-md-2 col-sm-8 col-lg-offset-0 col-xs-8 col-sm-offset-2 col-xs-offset-2">
The common chaffinch (Fringilla coelebs), usually known simply as the chaffinch, is a common and widespread small passerine bird in the finch family. The male is brightly coloured with a blue-grey cap and rust-red underparts. The female is much duller in colouring, but both sexes have two contrasting white wing bars and white sides to the tail. The male bird has a strong voice and sings from exposed perches to attract a mate.</p>

<div id="portpic8">
    <img src="images/portpic8.jpg" alt="greenfinch" class="col-lg-3 col-md-3 img-responsive hidden-sm hidden-xs">
</div>

<p class="col-lg-2 col-md-2 hidden-sm hidden-xs">
The European greenfinch, or just greenfinch (Chloris chloris), is a small passerine bird in the finch family Fringillidae.

This bird is widespread throughout Europe, north Africa and south west Asia. It is mainly resident, but some northernmost populations migrate further south</p>



</div><!-- end of row -->

<div class="row" style="margin-top: 5px;">

<div id="breaker" class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1 " style="background-color:#5C8E3A;"></div>
</div>

<div class="row" style="margin-top: 20px;">

<div id="portpic9">
    <img src="images/portpic9.jpg" alt="Great Spotted Woodpecker" class="col-lg-3 col-md-3 col-lg-offset-1 col-md-offset-1 hidden-sm hidden-xs img-responsive">
</div>

<p class="col-lg-2 col-md-2 hidden-sm hidden-xs">
The great spotted woodpecker (Dendrocopos major) is a medium-sized woodpecker with pied black and white plumage and a red patch on the lower belly. Males and young birds also have red markings on the neck or head. This species is found across Eurasia and parts of North Africa. Across most of its range it is resident, but in the north some will migrate if the conifer cone crop fails.</p>

<div id="portpic10">
    <img src="images/portpic10.jpg" alt="robin" class="col-lg-3 col-md-3 col-sm-8 col-lg-offset-0 col-xs-8 col-sm-offset-2 col-xs-offset-2 img-responsive">
</div>

<p class="col-lg-2 col-md-2 col-sm-8 col-xs-8 col-lg-offset-0 col-sm-offset-2 col-xs-offset-2">
The European robin (Erithacus rubecula), known simply as the robin or robin redbreast in the British Isles, is a small insectivorous passerine bird, specifically a chat, that was formerly classified as a member of the thrush family (Turdidae) but is now considered to be an Old World flycatcher. </p>



</div><!-- end of row -->