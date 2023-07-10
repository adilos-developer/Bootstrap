<html lang="en">
<head>
    <title>Vulnerabilities List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="../styles/vpwa.css" />
    <link rel="stylesheet" href="../styles/popup.css" />
    <link rel="stylesheet" href="../styles/responsive/popup-vpwa.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- used to specify which version of a page to crawl 
      i.e https://example.com not https://www.example.com  or https://example.com/index.php -->
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
    <meta property="og:description" content="Vulnerable PHP Web Application" />
    <meta property="og:site_name" content="VPWA" />
    <meta property="og:locale" content="en_us" />
    <meta property="og:video" content="https://www.vpwa.com/guide.mp4" />
    <meta property="fb:app_id" content="Your FB_APP_ID" />
    <!-- Find additional markup on https://ogp.me -->
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@ADIL">
    <meta name="twitter:title" content="Vulnerable PHH Web Application">
    <meta name="twitter:description" content="Vulnerable PHH Web Application for pentesting">
    <meta name="twitter:image" content="https://www.vpwa.com/unique-image.jpg">
</head>
<body>
<?php include "sections/navbar.php" ?>
<div class="container-fluid">
    <h1 class="titre-exp">List of exploits</h1>
    <a class="link-owasp" href="owasp-2021.php" target="_blank">owasp 2021</a>
    <br/>
    <br/>
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-6 col-12 cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="grey-cell">
                    <h1>XSS</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="pink-cell">
                    <h1>CSRF</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="grey-cell">
                    <h1>Broken access control</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="pink-cell">
                    <h1>SQL Injection</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="grey-cell">
                    <h1>Command Injection</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="pink-cell">
                    <h1>HTML Injection</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="grey-cell">
                    <h1>Security Misconfiguration</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="pink-cell">
                    <h1>Broken Authentication</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="grey-cell">
                    <h1>Broken Object Property Level Authorization</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="pink-cell">
                    <h1>Improper Inventory Management</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="grey-cell">
                    <h1>Unsafe Consumption of APIs</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="pink-cell">
                    <h1>Unsafe Consumption of APIs</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-6 col-12  cell-padding">  
            <a href="vulnerability.php?vuln=xss">
                <div class="grey-cell">
                    <h1>XXE Injection</h1>
                    <h2>labs:10</h2>
                    <h3>progress:0%</h3>
                </div>
            </a>
        </div>
    </div>
    <h1 id="copyright">VPWA designed and coded by Adil EL Mansouri</h1>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>