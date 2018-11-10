<!--GMAPS-->
<div id="googleMap" style="width:100%;height:400px;"></div>
<script>
    function myMap() {
        var propriedades = {
            center: new google.maps.LatLng(38.736946, -9.142685),
            zoom: 10,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), propriedades);
    
    }
</script>


<!-- info footer -->
<div class="row">


    <?php include('formulario.php'); ?>



    <div class="bg-dark col-sm-4">
        <h3 class="text-danger text-uppercase">morada</h3>
        <p class="text-white mb-0">Rua Padre Manuel da Nóbrega Nº23</p>
        <p class="text-white mb-0">2620-109 - Póvoa Santo Adrião</p>
        <p class="text-white mb-0">964 125 324 | 926 512 756</p>
        <a href="mailto:bricoltop@hotmail.com" class="">bricoltop@hotmail.com</a>
    </div>


    <div class="bg-dark col-sm-4">
        <h3 class="text-danger text-uppercase">Mapa do site</h3>
        <li><a href="index.php">Desentupimentos 24h</a></li>
        <li><a href="canalizadores-24h.php">Canalizadores 24h</a></li>
        <li><a href="limpeza-de-chamines.php">Limpeza de chaminés</a></li>
        <li><a href="limpeza-de-algerozes.php">Limpeza de Algerozes</a></li>
        <li><a href="remodelacoes.php">Remodelações</a></li>
        <li><a href="contactos.php">Contactos</a></li>
    </div>


</div>

</div>





<!-- footer-->
<footer class="container text-uppercase text-center text-white bg-dark">
    <p>bricoltop // 2018</p>
</footer>