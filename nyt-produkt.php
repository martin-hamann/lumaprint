<?php
/*
Template Name: Nyt Produkt
*/

get_header();

?>

<?php
while (have_posts()):
    the_post();
    $overskrift = get_field('overskrift');
    $beskrivelse = get_field('beskrivelse');
    $billede = get_field('billede');
    $table = get_field('table');
    ?>

    <div class="single-product container-fluid">
        <h1>
            <?php echo $overskrift ?>
        </h1>
        <p>
            <?php echo $beskrivelse ?>
        </p>
        <img src="<?php echo $billede ?>" alt="<?php echo $overskrift ?>">
        <?php echo $table ?>
        if ( ! empty ( $table ) ) {

        echo '<table border="0">';

            if ( ! empty( $table['caption'] ) ) {

            echo '<caption>' . $table['caption'] . '</caption>';
            }

            if ( ! empty( $table['header'] ) ) {

            echo '<thead>';

                echo '<tr>';

                    foreach ( $table['header'] as $th ) {

                    echo '<th>';
                        echo $th['c'];
                        echo '</th>';
                    }

                    echo '</tr>';

                echo '</thead>';
            }

            echo '<tbody>';

                foreach ( $table['body'] as $tr ) {

                echo '<tr>';

                    foreach ( $tr as $td ) {

                    echo '<td>';
                        echo $td['c'];
                        echo '</td>';
                    }

                    echo '</tr>';
                }

                echo '</tbody>';

            echo '</table>';
        }
    </div>

<?php endwhile;
?>

<?php get_footer(); ?>