
<?php $page='galeri'; include 'header.php'; include 'data-gallery.php'; ?>
<section class="gallery" >
   <div class="container">
    <div class="row">
            <div class="col-md-12">
                <h1>Galeri</h1>
            </div>
            <?php $galLen = count($gal); for ($i=0; $i < $galLen; $i++) {  ?>
            <div class="col-md-4">
                <div class="group-gal">
                    <a title="Judul" style="cursor: pointer;" class="image-link" href="img/rth/<?php echo $gal[$i]['foto'][0] ?>">
                        <div class="frame">
                            <div class="img" style="background: url('img/rth/<?php echo $gal[$i]['foto'][0] ?>') no-repeat center ; background-size: cover; " >
                            </div>
                            <div class="capt galery-post">
                                <h4><?php echo $gal[$i]['nama'] ?></h4>
                                <em><p><?php echo $gal[$i]['alamat'] ?></p></em>
                            </div>
                        </div>		
                    </a>
                    <?php $galFotoLen = count($gal[$i]['foto']); for ($j=1; $j < $galFotoLen; $j++) {  ?>
                    <a href="img/rth/<?php echo $gal[$i]['foto'][$j] ?>"></a>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>
<script>
    $(document).ready(function(){
        $('.frame').hover(function(){
            $('.capt',this).slideToggle(250);
        }, function(){
            $('.capt',this).slideToggle(250);
            });
    })
    // Initialize popup as usual
	/*$('.image-link').magnificPopup({
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('.img');
			}
		}

	});*/
    $('.group-gal').each(function(){
        $(this).magnificPopup({
            delegate: 'a',
            type: 'image',
            gallery:{
                enabled: true
            }
        })
    })
</script>