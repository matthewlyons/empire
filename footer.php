<footer class="Footer__Container">
    <div class="Footer__Inner">
        <section class="Footer__GridContainer">
            <div class="Footer__LeftContainer">
                <h3>Empire Hospitality</h3>
                <div class="Footer__Spacer">
                    <div class="Footer__SpacerInner"></div>
                </div>
                <h5>901 Officers Row</h5>
                <h5>Vancouver, WA 98661</h5>
                <div class="Footer__Spacer Footer__Spacer--NoLine"></div>
                <h5>+1-888-305-7101</h5>
                <h5>INFO@EHOTELGROUP.COM</h5>
            </div>
            <div class="Footer__GridDivider"></div>
            <div class="Footer__RightContainer">
            <?php
                $menu_items = wp_get_menu_array('primary');
            ?>
            <?php $index = 0; foreach ($menu_items as $key=>$item) : ?>
                <?php if( strcmp($item['title'], 'Home') != 0 ):?>
                <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>"><h3><?= $item['title'] ?></h3></a>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
        </section>
        <h5 class="Footer__Copyright">© 2021 Empire Hospitality</h5>
    </div>
</footer>
    <script>
        function openMobileNav() {
            let body = document.body;
            body.classList.add('NoMovement');
            let element = document.getElementById("MobileNav__NavContainer");
            element.classList.add("MobileNav__NavContainer--Open");
        }

        function closeMobileNav() {
            let body = document.body;
            body.classList.remove('NoMovement');
            let element = document.getElementById("MobileNav__NavContainer");
            element.classList.remove("MobileNav__NavContainer--Open");
        }
    </script>
    <?php 
        global $wp;
        $current_url = home_url( add_query_arg( array(), $wp->request ) );
        $url = wp_parse_url( $current_url );
        if ($url['path'] == '/government-services') {
            echo '<script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCM64qc4pAUhIBx8Uu3vlxHH881yKGAMlk&callback=initMap&libraries=&v=weekly"
            async></script>';
        }
    ?>
</body>

</html>