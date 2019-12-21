<?php get_header(); ?>

<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
      
      $img_banner = get_field('banner_bck_img');
      $img_bandeau = get_field('banner_background_image');
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();


  }
}
?>
    
<section id="piment" style="background-image: url('<?php echo $img_banner['url']; ?>')">
    
<div id="contenu1" >
    
        <p id="ct1"> <?php the_field('banner_baseline'); ?> </p>
        <p id="ct2"> <?php the_field('banner_title_brown'); ?></p>
        <p id="ct3"> <?php the_field('banner_title_green'); ?></p>
        <button> <?php the_field('banner_register_link'); ?> </button>
        
    
</div>
    
</section>
    
<section id="conference" >
    
   <p id="grandtitre"><strong><?php the_field('conference_title'); ?> </strong></p>
    <p id="p2"> <?php the_field('conference_rich'); ?></p>
    
    
</section>
    
    
<section id="simpleban" style="background-image: url('<?php echo $img_bandeau['url']; ?>')">
  
</section>   
    
<section id="jaunatre">
    
    <p id="auprog">Au programme</p><br/>

 
<div id="programmation">
  
  <div id="progmatin">
   
    <h2>Les végétaux dans la chaîne alimentaire </h2>

      <p> <b>8:30</b> Introduction par Christophe Fondation </p>
      <p> <b>9:00</b> Wim de Vries Wageningen University </p>
      <p> <b>9:45</b> Benjamin Alles Paris XIII University </p>
      <p> <b>10:15</b> Armendo Perez Cueto Copenhagen University </p>
      <p> <b>10:45</b> Cofee break </p>
  
  </div>
    
 <div id="progaprem">   
    <h2> Les activités de la fondation </h2>

    <p> <b>11:15</b> Introduction par Christophe Fondation </p>
    <p> <b>11:35</b> Wim de Vries Wageningen University </p>
    <p> <b>12:00</b> Benjamin Alles Paris XIII University </p>
    <p> <b>12:30</b> Armendo Perez Cueto Copenhagen University </p>
    

 </div>
</div>
     <button id=bouton2> <?php the_field('banner_register_link_copie'); ?> </button>
     <img src="assets/img/programme.png" id="feuillage">
     
   </section>
    
    
    
    
    
    
</div>



<?php get_footer(); ?>