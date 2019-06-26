
<?php 

// About page

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    get_header();

    global $post;

    function reveal_post($post) {
    
        pretty_print_r($post);

    }

?>

<main class="main-body__about">
    <article class="main-body__about--article">

        <h1 class="main-body__about--title"><?php echo $post->post_title; ?></h1>

        <section class="main-body__about--section"><?php echo $post->post_content; ?></section>

    </article>
</main>

<?php get_footer(); ?>