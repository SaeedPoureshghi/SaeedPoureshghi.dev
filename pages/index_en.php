<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="canonical" href="https://saeedpoureshghi.dev">
    <meta name="description" content="saeed poureshghi a full stack developer personal web page. PHP , ReactJS , Solidity smart contract developer with 15 years experiance.">
    <meta property="og:title" content="Saeed Poureshghi, A developer" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://saeedpoureshghi.dev/icon.png" />
    <meta property="og:description" content="saeed poureshghi a full stack developer personal web page. PHP , ReactJS , Solidity smart contract developer with 15 years experiance." />
    <meta property="og:site_name" content="Saeed Poureshghi" />
    <meta property="og:url" content="https://saeedpoureshghi.dev" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@BTCFUTURE_" />
    <meta name="twitter:creator" content="@BTCFUTURE_" />
    <meta name="twitter:description" content="saeed poureshghi a full stack developer personal web page. PHP , ReactJS , Solidity smart contract developer with 15 years experiance." />
    <meta name="twitter:text:title" content="Saeed Poureshghi personal web site" />
    <meta name="twitter:image" content="https://saeedpoureshghi.dev/icon.png" />
    <meta name="keywords" content="saeed poureshghi, سعید پورعشقی اسکویی, full stack developer , PHP , ReactJS , Solidity, experianced developer">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css?v=<?= time() ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.5.0/highlight.min.js"></script>
    <title>Saeed Poureshghi</title>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F55VNV44HV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-F55VNV44HV');
</script>
</head>

<body>
    <script>
        hljs.highlightAll();
    </script>


    <div class="content">

        <div class="photo">
            <div class="code">
                <pre>
                    <code class="language-php">

class SaeedPoureshghi{
    
    public $birthdate = '1982/03/14';
    private $nationality = 'Iranian';
    
    public function Age() {
        $now = date_create();
        
        $birthday = date_create($this->birthdate);
        
        $diff = date_diff($now,$birthday);
        
        return $diff->format("%y YearsOld!");
    }

    public function getNationality() {
        return $this->nationality;
    }
}

$sp = new SaeedPoureshghi();

echo 'I am '.$sp->Age().' and an '.$sp->getNationality();

//output
<?php
$sp = new Saeed();

echo 'I am ' . $sp->Age() . ' and an ' . $sp->getNationality();
?>
                    </pre>
                </code>
            </div>
            <div class="mobile">
                <pre>
                    <code class="language-php">
$sp = new SaeedPoureshghi();

$result  = 'I am '.$sp->Age();

$result .= ' and an '.$sp->getNationality();

echo $result;

//output
<?php
$sp = new Saeed();

$result  = 'I am ' . $sp->Age();

$result .= ' and an ' . $sp->getNationality();

echo $result;
?>
</code>
</pre>
            </div>
            <div class="img">
                <img src="./assets/one2.png" alt="saeed poureshghi">
            </div>
        </div>

        <div class="desc">
            <div class="titles">

                <div>
                    <h1>
                        Hi, I am <strong>Saeed Poureshghi</strong>
                    </h1>
                </div>
                <div>
                    <p>
                        I am a full stack developer!
                    </p>
                </div>
                <div class="sidemenu">
                    
                    <ul>
                        <li><a target="_blank" href="https://www.linkedin.com/in/saeedpoureshghi/"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a target="_blank" href="https://github.com/SaeedPoureshghi"><i class="fa-brands fa-github"></i></a></li>
                        <li><a target="_blank" href="https://www.amazon.com/s?i=mobile-apps&rh=p_4%3ASaeed+Poureshghi+Oskouei&search-type=ss"><i class="fa-brands fa-amazon"></i></a></li>
                        <li><a target="_blank" href="https://play.google.com/store/apps/dev?id=8790407111857864796"><i class="fa-brands fa-google-play"></i></a></li>
                        <li><a target="_blank" href="mailto:saeed.po@gmail.com"><i class="fa-solid fa-envelope"></i></a></li>
                    </ul>
                </div>
                <div class="sidemenu">
                    <ul>
                    <li><a href="https://saeedpoureshghi.dev/">Farsi</a></li>
                        <li><a href="https://saeedpoureshghi.dev/resume">Resume</a></li>
                    </ul>
                </div>
                
            </div>


            <div class="icons">

                <div>
                    <p>All Rights Reserved <?php echo date("Y") ?></p>
                </div>
            </div>
            <!-- <div class="googleplay">
                <a href="https://play.google.com/store/apps/dev?id=8790407111857864796"><img src="/assets/googleplay.png" width="200" height="59" alt="google play" /></a>
                <a href="https://www.amazon.com/s?i=mobile-apps&rh=p_4%3ASaeed+Poureshghi+Oskouei&search-type=ss"><img src="/assets/amazon.png" width="200" height="59" alt="google play" /></a>
            </div> -->

        </div>
    </div>
</body>

</html>