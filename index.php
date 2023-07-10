<!DOCTYPE html>
<html lang="en">
<head>
    <title>VPWA - Authentication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="styles/style.css" />
    <link rel="stylesheet" href="styles/popup.css" />
    <link rel="stylesheet" href="styles/responsive/popup-vpwa.css" />
    <link rel="stylesheet" href="styles/responsive/responsive-login.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="canonical" href="https://www.vpwa.com" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="seo,cheat,sheet">
    <meta name="robots" content="index,follow">
    <!-- Social Metaata
        Platforms that support Open Graph protocol include Facebook, Twitter, LinkedIn, and Pinterest.
        optimal image size:
        Twitter:
        • Minimum 144x144 px
        • No larger than 4096x4096 px or 5MB
        Facebook:
        • Minimum 600x600 px
        • Try to use images that are at least 1080 px in width
    -->
    <!-- Required Open Graph data -->
    <meta property="og:title" content="Vulnerable PHP Web Application" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="https://www.vpwa.com/image.jpg" />
    <meta property="og:url" content="https://www.vpwa.com" />
    <!-- Optional Open Graph data -->
    <meta property="og:audio" content="https://www.vpwa.com/guide.mp3." />
    <meta property="og:description" content="Vulnerable PHH Web Application" />
    <meta property="og:site_name" content="VPWA" />
    <meta property="og:locale" content="en_us" />
    <meta property="og:video" content="https://www.vpwa.com/guide.mp4" />
    <meta property="fb:app_id" content="Your FB_APP_ID" />
    <!-- Find additional markup on https://ogp.me -->
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="VPWA">
    <meta name="twitter:title" content="Vulnerable PHH Web Application">
    <meta name="twitter:description" content="Vulnerable PHH Web Application for pentesting">
    <meta name="twitter:image" content="https://www.vpwa.com/unique-image.jpg">
</head>
<body>
<div id="table">
        <div class="container-fluid"  id="bg-img">
            <div class="dropdown" id="db-settings">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Configuration
                </a>
    
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="VPWA/database-config/database-config.php">Database settings</a></li>
                    <li><a class="dropdown-item" href="" id="reset-db">Reset DB</a></li>
                </ul>
            </div>
            <form action="VPWA/index.php" >
                <?php $vpwa = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] ;?>
                <img src="<?php echo $vpwa; ?>/images/vpwa-logo.png" alt="VPWA-logo" id="logo" height="96" width="95"/>
                <h1>Vulnerable PHP Web Application</h1>
                <div><input type="text" name="username"  placeholder="username" /></div><br/>
                <div><input type="password" name="password"  placeholder="password" /></div><br/>
                <div>
                    <div id="remember-parent">
                        <input class="form-check-input" type="checkbox" id="rememberme" value="rememberme" name="rememberme" />
                        <label class="form-check-label" for="rememberme">remember me</label>
                    </div>
                </div>
                <button type="submit">LOGIN</button>
            </form>
        </div>
      </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>     
</body>
</html>