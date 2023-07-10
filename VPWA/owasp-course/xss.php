<html lang="en">
<head>
    <title>XSS Vulnerability Course</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="../../styles/vpwa.css">
    <link rel="stylesheet" href="../../styles/popup.css" />
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
    <?php include "../sections/navbar.php" ?>
<div class="container-fluid ow-course">
    <h1 class="titre-exp">Cross-site scripting</h1>
    <span class="link-owasp" href="owasp-course.php?vuln=xss.php" target="_blank" rel="noreferrer">Link</span> &nbsp;
    <a class="link-owasp" href="https://owasp.org/www-community/attacks/xss/" target="_blank" rel="noreferrer">https://owasp.org/www-community/attacks/xss/</a>
    <div class="row">
        <div class="col-lg-3 col-sm-12 cell-padding ">  
                <div class="grey-cell-vuln vulns h-100"> 
                    <h1><b>Course outline:</b></h1>
                    <ul class="lab-outline" id="course-outline">
                        <li><i class="fa-solid fa-check" id="active-sec"></i>
                            Introduction
                            <a href=""></a>
                        </li>
                        <li><i class="fa-solid fa-check"></i>
                            <a href="">Reflected XSS Attacks</a>
                        </li>
                        <li><i class="fa-solid fa-check" ></i>
                            <a href="">Stored XSS Attacks</a>
                        </li>
                        <li><i class="fa-solid fa-check" ></i>
                            <a href="">Blind Cross-site Scripting</a>
                        </li>
                        <li><i class="fa-solid fa-check" ></i>
                            <a href="">Other Types of XSS Vulnerabilities</a>
                        </li>
                        <li><i class="fa-solid fa-check" ></i>
                            <a href="">How to Determine If You Are Vulnerable</a>
                        </li>
                        <li><i class="fa-solid fa-check" ></i>
                            <a href="">How to Protect Yourself</a>
                        </li>
                    </ul>
                </div>
        </div>
        <div class="col-lg-9 col-sm-12 cell-padding ">  
                <div class="grey-cell-vuln vulns h-100">
                    <h1><b>Lab Hints</b></h1> 
                    <p>Cross-Site Scripting (XSS) attacks occur when:</p>
                    <ol class="course-li">
                        <li>Data enters a Web application through an untrusted source, most frequently a web request.</li>
                        <li>The data is included in dynamic content that is sent to a web user without being validated for malicious content.</li>
                    </ol>
                    <p>
                    The malicious content sent to the web browser often takes the form of a segment of JavaScript, but may also include HTML, Flash, or any other type of code that the browser may execute. The variety of attacks based on XSS is almost limitless, but they commonly include transmitting private data, like cookies or other session information, to the attacker, redirecting the victim to web content controlled by the attacker, or performing other malicious operations on the user’s machine under the guise of the vulnerable site.
                    </p>
                    <h1><b>Reflected XSS Attacks</b></h1> 
                    <p>
                    Reflected attacks are those where the injected script is reflected off the web server, such as in an error message, search result, or any other response that includes some or all of the input sent to the server as part of the request. Reflected attacks are delivered to victims via another route, such as in an e-mail message, or on some other website. When a user is tricked into clicking on a malicious link, submitting a specially crafted form, or even just browsing to a malicious site, the injected code travels to the vulnerable web site, which reflects the attack back to the user’s browser. The browser then executes the code because it came from a “trusted” server. Reflected XSS is also sometimes referred to as Non-Persistent or Type-I XSS (the attack is carried out through a single request / response cycle).
                    </p>
                    <div id="pre-hint">
                        <ul class="lab-outline">
                            <li><i class="fa-solid fa-check" style="color: #8fbd0f;"></i>only one field is vulnerable to XSS (email).</li>
                            <li><i class="fa-solid fa-check" style="color: #8fbd0f;"></i>
                                use this snippet of code for XSS injection:
                                    <Script>alet()</script>
                            </li>
                        </ul>
                      
                </div>
                <div id="code">
<pre>
#copyright{
    width: 100%;
    text-align: center;
    font-size: 1em;
    font-weight: normal;
    color: #707070;
    margin:20px 0px;
}.
fa-flask-vial{
    color: #D2C54B;
}
.lab-outline{
    font-size: 1.1em;
    font-weight: normal;
}</pre>
                </div>
        </div>
    </div>
</div>

<h1 id="copyright">VPWA designed and coded by Adil EL Mansouri</h1>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-VK2zcvntEufaimc+efOYi622VN5ZacdnufnmX7zIhCPmjhKnOi9ZDMtg1/ug5l183f19gG1/cBstPO4D8N/Img==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js" integrity="sha512-2rNj2KJ+D8s1ceNasTIex6z4HWyOnEYLVC3FigGOmyQCZc2eBXKgOxQmo3oKLHyfcj53uz4QMsRCWNbLd32Q1g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>