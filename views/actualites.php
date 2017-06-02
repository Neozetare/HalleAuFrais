<div class="grid grid-pad">
	<div class="col-1-1 mobile-col-1-1">
		<section id="sec-types-actualites">
			<header>
				<h1>Actualités</h1>
			</header>
			<div class="slide-menu-container disable-open-menu">
				<div class="slide-menu">
					<a data-slug="_all" onclick="loadActualitesList('_all')">
						<div><h2>Tous</h2></div>
					</a><!--
					--><?php foreach ($types_actualites as $type_actualite): ?><!--
						--><a onclick="loadActualitesList(this.getAttribute('data-slug'))" data-slug="<?php echo $type_actualite->slug ?>">
							<div><h2><?php echo $type_actualite->name ?></h2></div>
						</a><!--
					--><?php endforeach ?>
					--><a data-slug="aaaaa" onclick="loadActualitesList('aaaaa')">
						<div><h2>aaaaa</h2></div>
					</a><!--
					--><a data-slug="bbbbb" onclick="loadActualitesList('bbbbb')">
						<div><h2>bbbbb</h2></div>
					</a><!--
					--><a data-slug="ccccc" onclick="loadActualitesList('ccccc')">
						<div><h2>ccccc</h2></div>
					</a><!--
					--><a data-slug="ddddd" onclick="loadActualitesList('ddddd')">
						<div><h2>ddddd</h2></div>
					</a>
				</div>
			</div>
		</section>
	</div>

	<div class="col-1-1 mobile-col-1-1">
		<section id="sec-actualites" class="disable-open-menu"></section>
	</div>
</div>

<script>
var slideMenuContainer = $(".slide-menu-container");
$(function() {
	loadActualitesList("<?php echo $default_type_slug ?>");

	$("#sec-actualites").on("swipeleft", function() {
		nxt = $(".slide-menu a.active").next(".slide-menu a");
		if (nxt.length == 0) nxt = $(".slide-menu a:first-child");
		loadActualitesList(nxt.attr("data-slug"));
	});
	$("#sec-actualites").on("swiperight", function(e) {
		nxt = $(".slide-menu a.active").prev(".slide-menu a");
		if (nxt.length == 0) nxt = $(".slide-menu a:last-child");
		loadActualitesList(nxt.attr("data-slug"));
	});
});

function loadActualitesList(slug) {
	if (slug != $(".slide-menu a.active").attr("data-slug")) {
		cur = $(".slide-menu a[data-slug='"+slug+"']");

		$(".slide-menu a.active").removeClass("active");
		cur.addClass("active");

		container = $("#sec-actualites");
		$.ajax({
			url: "ajax/actualites/load_actualites_list/"+slug,
			type: "GET",
			dataType: "JSON",
			success: function(data){
				container.empty();
				if (data.length > 0) {
					for (var i=0; i<data.length; i++) {
						container.append("<li><a href='actualite/"+data[i].slug+"'>"+data[i].title+"</a></li>");
					}
				} else {
					container.append("<li>Aucun résultat</li>");
				}

				changeHistState("actualites", slug);
				if (cur.offset().left < 10*rem) {
					slideMenuContainer.animate({"scrollLeft": slideMenuContainer.scrollLeft() + cur.offset().left - 10*rem}, 250);
				} else if (cur.offset().left + cur.width() - $(window).width() > -10*rem) {
					slideMenuContainer.animate({"scrollLeft": slideMenuContainer.scrollLeft() + cur.offset().left + cur.width() - $(window).width() + 10*rem}, 250);
				}
			}
		});
	}
}
</script>