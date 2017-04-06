<header>
	<h1>Articles</h1>
</header>
<main>
	<ul>
		<?php
		foreach ($types_articles as $type_article) {
			echo '<li><a data-slug="'.$type_article->slug.'" onclick="reloadArticles(this)">'.$type_article->name.'</a></li>';
		}
		?>
	</ul>
	<ul>
		<?php
		foreach ($articles as $article) {
			echo '<li><a href="article/'.$article->slug.'">'.$article->title.'</a></li>';
		}
		?>
	</ul>
</main>

<script>
function reloadArticles(input) {
	// $.get("ajax/articles/reload/"+$(input).attr('data-slug'), function(data) {
	// 	articles = JSON.parse(data);
	// 	for (var i=0; i<articles.length; i++) {
	// 		console.log(articles[i]);
	// 	}
	// });
	$.ajax({
		url: "ajax/articles/reload/"+$(input).attr('data-slug'),
		type: "GET",
		dataType: "JSON",
		success: function(data){
			console.log(data);
		}
	});
}
</script>