<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sondaggi</title>
    <link rel="stylesheet" href="style.css">
    <script language=javascript>
var c1='#E0E4E3'
var c2='navy'
function colore1(){
codice='<font color=' + c1+ '><b>RISPONDI</b></font>'
if(document.all)
{
document.all('testo').innerHTML=codice;
}
else if(document.getElementById){
document.getElementById("testo").innerHTML = codice
}
attesa = window.setTimeout("colore2()",500);
}
function colore2(){
codice='<font color=' + c2 + '><b>NUOVO SONDAGGIO</b></font>'
if(document.all)
{
document.all('testo').innerHTML=codice;
}
else if(document.getElementById){
document.getElementById("testo").innerHTML =codice
}
attesa = window.setTimeout("colore1()",500)
}
function avvia()
{
attesa = window.setTimeout("colore1()",500);
}
</script>
</head>
<body OnLoad="avvia()">
<header>  </header>

<br><br>

<nav>
    <ul>
    <li><a href= "home.php" title="home">  Home page </a></li>
    <li><a href= "chisiamo.php"title="chi siamo">  Chi Siamo   </a></li>
    <li><a href= "eventi_settimanali.php"title="eventi">  Eventi Settimanali </a></li>
    <li><a href= "progetti.php"title="progetti">  Progetti </a></li>
    <li><a href= "sondaggi.php"title="sondaggi">  Sondaggi </a></li>
    <li><a href= "musica.php"title="musica">  Musica </a></li>
    </ul>
</nav>

<br><br>
<img src="sondaggi.jpg" width="750" height="400" > <h4  color: rgb(27, 251, 7);>🎙️ i sondaggi di Mattei On Air! 🎙️</h4><p>
🌟 i sondaggi: <br> i sondaggi proposti dalla redazione del Mattei on air sono strumenti per raccogliere opinioni e preferenze degli ascoltatori. <br>
Possono riguardare vari aspetti, come i generi musicali preferiti, i programmi piu seguiti o anche le tematiche da trattare<br>
Questi sondaggi aiutano la web Radio a capire meglio il loro pubblico e a migliorare i contenuti offerti.
        </p> 
        <br><br><br><br><br>


<br>
<aside>

<marquee behavior="alternate" ><h3>I NOSTRI SONDAGGI!!! </h3></marquee><br>
<span id="testo"><b><font color=red>     DAI UNO SGUARDO </b> </font></span>
    <div>        
            <ul>
            
				<li><a href="https://forms.gle/q2WPtiLXZ9LAetxr5" target="_blank">SANREMO 2025<br/><img src="san_remo.jpg" alt="san remo"></a></li>
				<li><a href="http://www.twitter.com"target="_blank">SONDAGGIO 2<br/><img src="logotwit.png" alt="social network"></a></li>
                <li><a href="http://www.instagram.com"target="_blank">SONDAGGIO 3<br/><img src="insta.jfif" alt="social network"></a></li>
				<li><a href="http://www.tiktok.com"target="_blank">SONDAGGIO 4<br/><img src="logotiktok.jfif" alt="social network"></a></li>				
				
            </ul>
	</div>
</aside>


 <footer>
    <dl>
        <dt>CREATO DA:</dt>
            <dd><address><a href="mattei-on-air@googlegroups.com"> Mattei on air</a></dd>
            <dt>VIA: Padre Vaiani, 18 – 20017 – Rho (MI)</dt><br>
            <dt> CITTA': RHO (MI) </dt><br>
            <dt> ULTIMO AGGIORNAMENTO </dt>
            <dd><time datetime="18-03-2025" pubdate>Martedi 18 marzo</time></dd>
            <dd>
    </dl>
    <small>tutti i contenuti sono protetti dalla licenza creative</small>
    
</footer>

    
</body>
</html>