<body>
<style>
@import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=IBM+Plex+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');

@font-face {
    font-family: 'Argent';
    src: local("ArgentCF-Regular"), local("ArgentCF-Regular"),
        url("ArgentCF-Regular.ttf");
}

@font-face {
    font-family: 'RalewayBold';
    src: local("rawline-bold"), local("rawline-bold"),
        url("rawline-bold.ttf");
}

:root{
	--primario: magenta;
	--secundario: black;
}

.imagen{
	width:500px;
	height:500px;
	aspect-ratio:1/1;
	background-color:black;
	background-image: url("gradient.png"), url("https://www.godoycruz.gob.ar/wp-content/uploads/2023/07/Ballet-San-Petersburgo-web.jpg");
	background-position:center center;
	background-size: cover;
	 font-family: "IBM Plex Mono", monospace;
  font-weight: 100;
  font-style: normal;
  text-transform: lowercase;
  
	position:relative;
}

.imagen img.main{
	width:100%;
	position: absolute;
	bottom: 0;
}

.leftSec{
	width:auto;
	bottom: 0;
	padding: 6px;
	color: white;
	margin: 0;
  position: absolute;
}

h1{
	
	font-family: "IBM Plex Mono", monospace;
  font-weight: 700;
  font-style: normal;
  margin-bottom:4px;
  color: var(--primario);
  text-align: right;
  margin-bottom:3px;
}

h2.flecha{
	display: inline-block;
	color: var(--primario);
}

h3{
	font-family: "IBM Plex Mono", sans-serif;
  font-weight: 700;
  font-style: normal;
  text-align:right;
  text-transform:uppercase;
  color: var(--primario);
  padding: 12px;
  margin-top:0px;
  background-color: var(--secundario);
  width: auto;
  display: block;
  positioN: 
}

.rightSec{
	width:0%;
	/*background-image: url(https://media.ambito.com/p/1a74975b511cbb29b8b14a0daa68f826/adjuntos/239/imagenes/041/687/0041687819/joker-folie-deuxwebp.png);
	background-size:cover;
	background-position: center center;*/
	float:right;
	position:relative;
	height:0%;
}

.text{
	padding: 12px;
	padding-bottom:0px;
	margin: 12px;
}

img.logo{
	width:50px;
	float:right;
	margin: 21px;
}
</style>

<div class="imagen">
<img class="main" src="">
<!--<h3>Misiones Cultural</h3>-->
<img src="mc_logo.png" class="logo"/>
	<div class="leftSec">
	
	<div class="text">
	
	<h2 class="antes">en el centro del conocimiento con una performance de "el lago de los cisnes"</h2>
	<h1>el ballet de san petersburgo llega a posadas</h1>
	<h2 class="después">entradas ya disponibles</h2>
	</div>
	</div>
	
	
	
	<div class="rightSec">
	</div>
</div>
</body>