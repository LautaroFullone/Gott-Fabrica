<div class="slider-destacados">
  <div class="destacados-header">
    <div class="header-title">
        <div class="section-title">Productos Destacados |</div>
        <div class="section-link">Ver todas</div>
    </div>
    <div class="destacados-header-controls"></div>
  </div>

  <div class="destacados-content">
    <div id="destacados-slider" class="owl-carousel">
      <img src="images/sillas/silla-ariel.jpg" alt="">
      <img src="images/sillas/silla-normandy.jpg" alt="">
      <img src="images/sillas/sillon-nino.jpg" alt="">
      <img src="images/sillas/silla-pedro.jpg" alt="">
      <img src="images/sillas/silla-ariel.jpg" alt="">
      <img src="images/sillas/silla-normandy.jpg" alt="">
      <img src="images/sillas/sillon-nino.jpg" alt="">
      <img src="images/sillas/silla-pedro.jpg" alt="">
    </div>
  </div>
</div>

<script>

$(document).ready(function() {
    $("#destacados-slider").owlCarousel({
        items: 4,
        navigation: false,
        navigationText: ["",""],
        autoPlay: true
    })
    $(".destacados-content").css("width", "auto"); // Elimina un scroll horizontal que produce este div
});



</script>
