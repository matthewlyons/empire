<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
    <link rel="icon" href="https://ems.ehotelgroup.com/wp-content/uploads/2020/04/cropped-EMPIRE-Emerg-Lodging-logo-portrait-RGB-light-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://ems.ehotelgroup.com/wp-content/uploads/2020/04/cropped-EMPIRE-Emerg-Lodging-logo-portrait-RGB-light-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://ems.ehotelgroup.com/wp-content/uploads/2020/04/cropped-EMPIRE-Emerg-Lodging-logo-portrait-RGB-light-180x180.png" />
</head>

<body>
<?php
    $menu_items = wp_get_menu_array('primary');
?>
<header>
    <section class="DesktopNav__Container">
        <div class="DesktopNav__LogoContainer">
            <a href="/">
                <img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" class="DesktopNav__Logo" />
            </a>
        </div>
        <nav class="DesktopNav__NavContainer">
            <ul class="DesktopNav__Nav">
                <?php $index = 0; foreach ($menu_items as $key=>$item) : ?>
                <?php 
                    $index++;
                    $length = count($menu_items);
                    global $wp;
                    $current_url = home_url( add_query_arg( array(), $wp->request ) );
                    $current_url .= "/";
                    $count = count($item['children']);
                    if($count>=1){
                        $class="DesktopNav__Item DesktopNav__Item--HasChildren";
                    } else {
                        $class="DesktopNav__Item";
                    }
                    if(strcmp($item['url'], $current_url) == 0){
                        $linkclass .= " DesktopNav__ItemLink--Current";
                    } else {
                        $linkclass = "";
                    }
                    if($index >= $length-1){
                        $class .= " DesktopNav__Item--Edge";
                    }
                    ?>
                <li class="<?php echo $class ?> ">
                <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" class="DesktopNav__ItemLink <?php echo $linkclass ?>"><?= $item['title'] ?></a>
                <?php if( !empty($item['children']) ):?>
                    <ul class="DesktopNav__SubMenu">
                    <?php foreach($item['children'] as $child): ?>
                        <li class="DesktopNav__SubMenuItem">
                            <a href="<?= $child['url'] ?>" title="<?= $child['title'] ?>"><?= $child['title'] ?></a>
                        </li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                </li>
            <?php endforeach; ?>
            </ul>
        </nav>
    </section>
    <section class="MobileNav__Container">
        <section class="MobileNav__Header">
            <div class="MobileNav__LogoContainer">
                <img src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" class="MobileNav__Logo" />
            </div>
            <div class="MobileNav__Burger" onclick="openMobileNav()">
                <i class="fas fa-bars"></i>
            </div>
        </section>

        <div id="MobileNav__NavContainer" class="MobileNav__NavContainer">
            <div class="MobileNav__Close" onclick="closeMobileNav()">
                <i class="fas fa-times"></i>
            </div>
            <ul class="MobileNav__Nav">
            <?php foreach ($menu_items as $item) : ?>
                <?php 
                    $count = count($item['children']);
                    if($count>=1){
                        $class="MobileNav__Item MobileNav__Item--HasChildren";
                    } else {
                        $class="MobileNav__Item";
                    }
                    ?>
                <li class="<?php echo $class ?>">
                <a href="<?= $item['url'] ?>" title="<?= $item['title'] ?>" class="MobileNav__ItemLink"><?= $item['title'] ?></a>
                <?php if( !empty($item['children']) ):?>
                    <ul class="MobileNav__SubMenu">
                    <?php foreach($item['children'] as $child): ?>
                        <?php if(strcmp($item['url'], $child['url']) != 0  ):?>
                            <li class="MobileNav__SubMenuItem">
                                <a href="<?= $child['url'] ?>" title="<?= $child['title'] ?>"><?= $child['title'] ?></a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                </li>
            <?php endforeach; ?>
            </ul>
        </div>
    </section>
</header>