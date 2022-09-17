<!-- Gallery  start-->
<div class="container">
    <div class="row">
        <div class="col-md-12" style="background-color: #7DCE13;">
            <h4>Gallery</h4>
            <?php
            $dir = glob('vendor/support/img/gallery/{*.jpeg,*.jpg*.png}', GLOB_BRACE);
            foreach ($dir as $key => $value) {
            ?>
                <div class="gallery">
                    <a data-fancybox="gallery" data-src="<?= $value; ?>">
                        <img src="<?= $value; ?>" alt="">
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>