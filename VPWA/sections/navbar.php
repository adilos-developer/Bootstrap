<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">
     <?php $vpwa = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] ;?>
      <img src="<?php echo $vpwa; ?>/images/vpwa-logo.png" alt="dentiste-logo" height="56" width="55" />
      <span>VPWA</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars-staggered"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item" id="espace-client">
          <a class="nav-link" href="<?php echo $vpwa; ?>/VPWA/index.php">Vulnerabilities</a>
        </li>  
        <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Help
            </a>

            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="" id="reset-db">Reset DB</a></li>
                <li><a class="dropdown-item" href="https://www.youtube.com" rel="noreferrer">Video Tutorials</a></li>            </ul>
        </div>
        <li class="nav-item" id="espace-client">
          <a class="nav-link" href="<?php echo $vpwa; ?>/VPWA/logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i>&nbsp;Logout</a>
        </li>   
      </ul>
    </div>
  </div>
</nav>
<script>
        $( document ).on( "click", "#popup-exit,.fa-xmark", function() {
            $("#popup-container").remove();
        });
        $("#popup-confirm").click(function(){
            // insert confirm code here
        });
        $("#reset-db").click(function(){
            showPopupCustomMsg('44Reset database','Are you sure, you want to reset the VPWA database ?');
            return false;
        });
        function showPopupCustomMsg(titre,msg){
        $("body").append(`<div id="popup-container">
        <div id="popup-msg-parent">
                <div >
                    <div id="popup-top">
                        <div>Reset database</div>
                        <i class="fa-solid fa-xmark"></i>
                    </div>
                    <div id="popup-msg">
                        <span>Are you sure, you want to reset the VPWA database ?</span>
                    </div>
                    <div id="popup-bottom">
                        <span id="popup-exit">cancel&nbsp;&nbsp;</span>
                        <span id="popup-confirm">confirm</span>
                    </div>
                </div>
            </div>
        </div>
        `);}
</script>