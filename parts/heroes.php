<div class="heroes">

  <? if( have_rows('heroes') ): ?>
	 <?  $i= 1; ?>
	
	<?  while ( have_rows('heroes') ) : the_row(); ?>
      
      <div class="hero">
      
      <h3><? the_sub_field('hero_title'); ?> </h3>
      <div class="hero-image"> <img src="<? the_sub_field('hero_image'); ?>" /> </div>
      <a class="hero-button" id="hero<?=$i; ?>" href="<? the_sub_field('hero_link') ?>" title="Donate to <? the_sub_field('hero_title')  ?>" >Donate now </a>
      <p> <? the_sub_field('hero_text'); ?> </p>
     <p><a class="hero-link" id="hero<?=$i; ?>" href="<? the_sub_field('hero_link') ?>" title="Donate to <? the_sub_field('hero_title')  ?>" ><? the_sub_field('hero_link') ; ?> </a></p>
     <? if (get_sub_field('mydonate_button') ) { ?>
     <div class="mydonate-button">
     <? the_sub_field('mydonate_button') ;  ?>
     </div>
     <? } ?>
     </div>
     
  <? $i++; ?>
  <? endwhile; ?>
  
  <? endif; ?>

</div>
