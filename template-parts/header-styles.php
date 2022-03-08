<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 83px;
}
.u-header .u-image-1 {
  width: 127px;
  height: 88px;
  margin: -4px auto 0 0;
}
.u-header .u-logo-image-1 {
  width: 100%;
  height: 100%;
}
.u-header .u-menu-1 {
  margin: -60px 0 0 auto;
}
.u-header .u-nav-1 {
  font-size: 1rem;
}
.u-block-727f-29 {
  font-size: 1rem;
}
.u-header .u-nav-2 {
  font-size: 1rem;
}
.u-block-727f-30 {
  font-size: 1rem;
}
.u-header .u-social-icons-1 {
  height: 32px;
  min-height: 16px;
  width: 32px;
  min-width: 16px;
  margin: -34px 404px 26px auto;
}
.u-header .u-icon-1 {
  height: 100%;
}
@media (max-width: 1199px) {
  .u-header .u-social-icons-1 {
    margin-right: 404px;
  }
}
@media (max-width: 575px) {
  .u-header .u-social-icons-1 {
    margin-right: 308px;
  }
}</style>
