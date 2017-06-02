<div class="grid grid-pad">
	<section id="sec-halle-au-frais">
		<div class="col-1-1 mobile-col-1-1">
			<h1>La Halle au Frais</h1>
		</div>
		<div class="col-1-1 mobile-col-1-1">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ultricies nibh a nisl sollicitudin, non luctus ligula mattis.</p>
			<p>Pellentesque fringilla nisl sed arcu pulvinar, a gravida ante ullamcorper. Sed scelerisque felis euismod, vestibulum elit vitae, condimentum purus. Proin at finibus metus.</p>
			<p>Ut a enim ac lorem blandit scelerisque. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Ut euismod id nisl.</p>
		</div>
		<div class="col-1-1 mobile-col-1-1">
			<div id="map-container">
				<img id="map" src="https://maps.googleapis.com/maps/api/staticmap?center=49.8956878,2.300968&zoom=15&size=640x320&scale=3&maptype=roadmap&markers=icon:http://neozetare.ovh/HaF/public/img/icons/icon-pin.png|49.8955878,2.294068&key=<?php echo MAPS_API_KEY ?>">
				<div id="map-info">
					<div id="adresse">
						<p>Centre Commercial Les Halles</p>
						<p>22 B, rue du Général Leclerc</p>
						<p>80000 Amiens</p>
					</div>
					<div id="horaires">
						<p>Du mardi au samedi de 9h à 13h et de 15h à 19h</p>
						<p>Le dimanche de 9h à 12h30</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="sec-home-actualites">
		<div class="col-1-1 mobile-col-1-1">
			<h2>Actualités</h2>
		</div>
		<?php foreach ($actualites as $actualite): ?>
		<div class="col-1-1 mobile-col-1-1">
			<article>
				<a href="actualite/<?php echo $actualite->slug ?>">
					<div style="background-image: url(https://placehold.it/720x360/517896/fff?text=<?php echo $actualite->id ?>)">
						<div class="title"><h3><?php echo $actualite->title ?></h3></div>
					</div>
				</a>
				<a href="actualite/<?php echo $actualite->slug ?>">
					<h4><?php echo $actualite->slug ?></h4>
				</a>
				<p><?php echo 'Le '.date('d/m/y', $actualite->time).' à '.date('H:i', $actualite->time) ?></p>
			</article>
		</div>
		<?php endforeach; ?>
	</section>
</div>