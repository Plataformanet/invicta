<?php 
/* Template name: Home */
get_header(); 
?>

<section class="home__banner">
    <?
    $args = array(
        'post_type' => 'banners'
    );
    $query_banners = new WP_Query($args);
    ?>

    <?
    while ($query_banners->have_posts()) {
        $query_banners->the_post();
    ?>
        <div class="banner-item">
            <img src="<? the_post_thumbnail_url() ?>" alt="" class="banner-image">
        </div>
    <?
    }
    wp_reset_query();
    ?>
</section>

<section class="servicos">
    <div class="container">
            <div class="row">
            <div class="col-md-3 servico-item">
                <h1>Serviço Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolorum fugiat, temporibus ratione ullam repellendus.</p>
                <button class="btn-servico">Ver mais</button>
            </div>
            <div class="col-md-3 servico-item">
                <h1>Serviço Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolorum fugiat, temporibus ratione ullam repellendus.</p>
                <button class="btn-servico">Ver mais</button>
            </div>
            <div class="col-md-3 servico-item">
                <h1>Serviço Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolorum fugiat, temporibus ratione ullam repellendus.</p>
                <button class="btn-servico">Ver mais</button>
            </div>
            <div class="col-md-3 servico-item">
                <h1>Serviço Lorem Ipsum</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea dolorum fugiat, temporibus ratione ullam repellendus.</p>
                <button class="btn-servico">Ver mais</button>
            </div>
        </div>
    </div>
</section>

<section class="nossa-historia">
    <div class="container">
             <div class="row">
             <div class="col-md-6">
                 <h2>Nossa história</h2>
                 <h3>Conheça a Invita</h3>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?</p>
             </div>
             <div class="col-md-6">
                <img src="<? bloginfo('template_url') ?>/assets/images/imagem-nossa-historia.png" alt="">
             </div>
         </div>
    </div>
</section>

<section class="normas">
    <div class="container">
        <h2>Invicta de acordo com as normas</h2>
     <div class="row">
        <div class="normas-items">
            <div class="normas-item">ABNT NBR 13245</div>
            <div class="normas-item">ABNT NBR 13245</div>
            <div class="normas-item">ABNT NBR 13245</div>
            <div class="normas-item">ABNT NBR 13245</div>
        </div>
     </div>
     <button>Ver mais</button>   
    </div>
</section>

<section class="nossos-projetos">
    <div class="container">
        <div class="col-md-12">
        <div class="nossos-projeto_blocos">
            <div class="nossos-projeto">
                 <h2>O que projetamos</h2>
                 <h3>Nossos projetos</h3>
                 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta</p>
                 <button>Ver mais</button>   
             </div>
            <div class="nossos-projeto_img">
            <img src="<? bloginfo('template_url') ?>/assets/images/imagem-projetos.png" alt="">
            </div>
        </div>    
        </div>
    </div>
</section>

<section class="clientes">
<div class="row">
    <div class="container">
        <div class="col-md-12">
            <h2>Nossos clientes</h2>
            <h3>Clientes</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta, obcaecati labore explicabo nulla quasi natus dolores. Minus magnam aliquid labore?Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis doloremque ab, iure, inventore dicta</p>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>