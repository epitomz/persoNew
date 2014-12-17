<?php
include('header.php');
include('navbar.php');
?>
    
    <!-- Contenu -->
    <div class="contenu">
    <h1>Photographie</h1>
    <div class="photography">
        <div class="col col1">
            <img data-toggle="modal" data-target="#myModal" src="img/1.jpg" />
            <img src="img/2.jpg" />
        </div>
        <div class="col col2">
            <img src="img/2.jpg" />
            <img src="img/1.jpg" />
        </div>
        <div class="col col3">
            <img src="img/4.jpg" />
            <img src="img/3.jpg" />
        </div>
        <div class="col col4">
            <img src="img/3.jpg" />
            <img src="img/1.jpg" />
        </div>
    </div>
    </div>
    
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-pic">
            <img src="img/1.jpg" />
        </div>
      <div class="modal-title">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h3 class="modal-title" id="myModalLabel">Un sacré building</h3>
        <h4>New-York, 2014</h4>
      </div>      
    </div>
  </div>
</div>

<?php
include('script.php');
?>   