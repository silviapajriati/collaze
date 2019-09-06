<style>
body {
  font-family: Georgia, "Times New Roman", Times, serif;
  color: #555;
}
.from_dotcs{
  border:2px dotted #5c5353;
  padding: 5px 5px 5px 5px;
  margin:0;
}
</style>

<body>
<div class="portlet-body form">
    <div class="row">
        <div class="col-md-6">
            <div class="slideshow-container">

                <div class="mySlides">
                    <img style="display: block; margin: 0 auto; text-align: left; width: 500px; height: 500px;" src="<?php echo base_url(); ?>images/c1.jpg" style="width:50%">
                </div>

                <div class="mySlides">
                    <img style="display: block; margin: 0 auto; text-align: left; width: 500px; height: 500px;" src="<?php echo base_url(); ?>images/c2.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <img style="display: block; margin: 0 auto; text-align: left; width: 500px; height: 500px;" src="<?php echo base_url(); ?>images/c3.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <img style="display: block; margin: 0 auto; text-align: left; width: 500px; height: 500px;" src="<?php echo base_url(); ?>images/c4.jpg" style="width:100%">
                </div>

                <div class="mySlides">
                    <img style="display: block; margin: 0 auto; text-align: left; width: 500px; height: 500px;" src="<?php echo base_url(); ?>images/c5.jpg" style="width:100%">
                </div>

            </div>
        </div>
        <div class="col-md-6">
            <h1><span class="caption-subject font-black-sharp bold uppercase">COLLAZE</span></h1>
            <span class="caption-helper">Sweet Ideas To Inspire & Desire</span>
            <p>
            <p>
            <center>
            <font size="5">
            <span class="caption-subject font-red-sunglo bold uppercase">Patissera</span>
            <br> Trending Pastry & Bakery Festival
            </font>
            </center>
            <p>
            <p align="justify">
            <font size="3">
            Berangkat dari keinginan untuk senantiasa menginspirasi customer setia kami, Gandum Mas Kencana (GMK)
            sukses menciptakan sebuah konsep kegiatan baru seputar trend pastry & bakery, yakni Patissera. Berasal dari
            penggabungan dua kata dalam Bahasa Perancis, "Patisserie" yang berarti pastry dan "Sera" yang berarti akan
            datang. Patissera dirancang sebagai kegiatan yang berisi informasi serta inspirasi tentang tren dunia pastry
            yang akan datang.
            </font>
            <p>
            <div class="col-md-2">
                <a href="<?php echo site_url('colatta'); ?>">
                <img style="display: block; margin: 0 auto; text-align: left; width: 150px; height: 150px;" src="<?php echo base_url(); ?>images/colatta.jpg" style="width:100%">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
                <a href="<?php echo site_url('haan'); ?>">
                <img style="display: block; margin: 0 auto; text-align: left; width: 150px; height: 150px;" src="<?php echo base_url(); ?>images/haan.png" style="width:100%">
            </div>
            <div class="col-md-2">
            </div>
            <div class="col-md-2">
                <a href="<?php echo site_url('bendico'); ?>">
                <img style="display: block; margin: 0 auto; text-align: left; width: 150px; height: 150px;" src="<?php echo base_url(); ?>images/bendico.jpg" style="width:100%">
            </div>

        </div>
    </div>

</div>
</body>

<script text="javascript">
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none"; 
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1} 
        slides[slideIndex-1].style.display = "block"; 
        setTimeout(showSlides, 6000); // Change image every 2 seconds
    }

</script>
