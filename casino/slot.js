/* Pelaa-funktio arpoo kuvat */
function pelaa(){
  rahat = rahat - panos
  // Arvotut kuvat talteen
  

  // vaihdetaan kuva-elementtien src-atribuutti
  let kuvat = document.getElementsByTagName('img');
  let luvut = [];
  for (let i=0; i<kuvat.length; i++) {
    // arvotaan luku 1-6
    let luku = Math.floor(Math.random() * 6) +1;
    luvut.push(luku);
    kuvat[i].src = 'he' + luku +'.png';  
  }

  tarkistaVoitot(luvut);

  
 
  update();

  

}

function tarkistaVoitot(luvut){
  // Testataan tuliko voittoja
  console.log(luvut);
  var str = luvut.toString();
  
  let seiskoja = str.split("5").length-1;
  let sitruuna = str.split("2").length-1;
  let kirsikka = str.split("3").length-1;
  let luumu = str.split("1").length-1;
  let appelsiini = str.split("6").length-1;
  let on = str.split("4").length-1;
  
  if (on > 2) {
    rahat = rahat + panos * 1;
  }

  if (appelsiini > 2) {
    rahat = rahat + panos * 1;
  }

  if (luumu >= 2) {
    rahat = rahat + panos * 2;
  }

  if (kirsikka > 2) {
    rahat = rahat + panos * 1;
  }

  if (sitruuna > 2) {
    rahat = rahat + panos * 1;
  }

  if (seiskoja > 2) {
    rahat = rahat + panos * 5;
  }
}



  

var asetaPanos = function (){
  panos++;
  if (panos > 3) {
    panos = 1;
  }
  update();
}

var update = function (){
  document.getElementById('panos').innerHTML = panos;
  document.getElementById('rahat').innerHTML = rahat;
}




var panos = 2;
var rahat = 50;
let age = 0;

do {
  age = prompt('Todista ikäsi.', 18 );
  if ( age > 17 ) {
    alert( 'Tervetuloa pelaamaan' );
  } else {
    alert( 'Sinun täytyy olla täysikäinen.' );
  }
} while(age < 18);


update();
  
  

