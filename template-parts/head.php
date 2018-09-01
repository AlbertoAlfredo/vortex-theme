<?php if (get_theme_mod('devdmbootstrap4_show_header_setting', 1)) : ?>

    <div class="container-fluid dmbs-header text-roxinho">

        <div class="row">
        <?php if (get_header_image()): ?>
            
        <img class="cabecalho-img" src="<?php header_image(); ?>" alt="Banner Vortex Caoscast" />

            <?php else: ?>

                <?php
                    $dmbsCustomLogoUrl = devdmbootstrap4_custom_logo();
                    $dmbsHeaderText    = get_theme_mod('header_text', 1)
                ?>
                <?php if (!empty($dmbsCustomLogoUrl)) : ?>
                    <div class="col-sm-<?php echo ($dmbsHeaderText == 0 ? '12' : '4'); ?> my-auto dmbs-header-left text-roxinho">
                        <a class="dmbs-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <img class="dmbs-logo-image" src="<?php echo esc_url($dmbsCustomLogoUrl); ?>" alt="<?php bloginfo('name'); ?>" />
                        </a>
                    </div>
                <?php endif; ?>

                <?php if ($dmbsHeaderText == 1) : ?>
                    <div class="col-sm-<?php echo (!empty($dmbsCustomLogoUrl) ? "8" : "12"); ?> my-auto dmbs-header-right">

                        <?php if (is_front_page() || is_home()) : ?>
                            <a class="link-roxinho" href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="dmbs-header-title text-roxinho texto-g"><?php bloginfo( 'name' ); ?></h1></a>
                        <?php else: ?>
                            <a class="link-roxinho" href="<?php echo esc_url( home_url( '/' ) ); ?>"><h2 class="dmbs-header-title text-roxinho texto-g"><?php bloginfo( 'name' ); ?></h2></a>
                        <?php endif; ?>

                        <h4 class="dmbs-header-description"><?php bloginfo( 'description' ); ?></h4>

                    </div>
                <?php endif; ?>

            <?php endif; ?>
            

        </div>

    </div>

<?php endif; ?>
