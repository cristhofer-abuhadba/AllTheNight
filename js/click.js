
//FUNCIONES//
function InicioBackground(){
    document.getElementById("body").classList.add("body0");
    document.getElementById("body").classList.remove("body1");
    document.getElementById("body").classList.remove("body2");
    document.getElementById("body").classList.remove("body3");
    document.getElementById("body").classList.remove("body4");

    document.getElementById("Inicio").classList.add("selected");
    document.getElementById("Videojuegos").classList.remove("selected");
    document.getElementById("Peliculas").classList.remove("selected");
    document.getElementById("Ranking").classList.remove("selected");
    document.getElementById("Tendencias").classList.remove("selected");
    document.getElementById("Home").style.display= "block";
}
function VideogamesBackground(){
    document.getElementById("body").classList.add("body1");
    document.getElementById("body").classList.remove("body0");
    document.getElementById("body").classList.remove("body2");
    document.getElementById("body").classList.remove("body3");
    document.getElementById("body").classList.remove("body4");
   
    document.getElementById("Videojuegos").classList.add("selected");
    document.getElementById("Inicio").classList.remove("selected");
    document.getElementById("Peliculas").classList.remove("selected");
    document.getElementById("Ranking").classList.remove("selected");
    document.getElementById("Tendencias").classList.remove("selected");
   
    
document.getElementById("Home").style.display= "none";
}

function PeliculasBackground(){
    document.getElementById("body").classList.add("body2");
    document.getElementById("body").classList.remove("body0");
    document.getElementById("body").classList.remove("body1");
    document.getElementById("body").classList.remove("body3");
    document.getElementById("body").classList.remove("body4");
   
    document.getElementById("Peliculas").classList.add("selected");
    document.getElementById("Inicio").classList.remove("selected");
    document.getElementById("Tendencias").classList.remove("selected");
    document.getElementById("Ranking").classList.remove("selected");
    document.getElementById("Videojuegos").classList.remove("selected");
    
    document.getElementById("Home").style.display= "none";
    
}

function TendenciasBackground(){
    document.getElementById("body").classList.add("body4");
    document.getElementById("body").classList.remove("body2");
    document.getElementById("body").classList.remove("body1");
    document.getElementById("body").classList.remove("body0");
    document.getElementById("body").classList.remove("body3");
   
    document.getElementById("Tendencias").classList.add("selected");
    document.getElementById("Inicio").classList.remove("selected");
    document.getElementById("Ranking").classList.remove("selected");
    document.getElementById("Peliculas").classList.remove("selected");
    document.getElementById("Videojuegos").classList.remove("selected");

    document.getElementById("Home").style.display= "none";

    
}

function RankingBackground(){
    document.getElementById("body").classList.add("body3");
    document.getElementById("body").classList.remove("body2");
    document.getElementById("body").classList.remove("body1");
    document.getElementById("body").classList.remove("body0");
    document.getElementById("body").classList.remove("body4");
   
    document.getElementById("Ranking").classList.add("selected");
    document.getElementById("Inicio").classList.remove("selected");
    document.getElementById("Tendencias").classList.remove("selected");
    document.getElementById("Peliculas").classList.remove("selected");
    document.getElementById("Videojuegos").classList.remove("selected");

    document.getElementById("Home").style.display= "none";
}