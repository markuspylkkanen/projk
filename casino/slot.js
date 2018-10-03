/* Pelaa-funktio arpoo kuvat */
function pelaa(){
  // Arvotut kuvat talteen
  

  // vaihdetaan kuva-elementtien src-atribuutti
  let kuvat = document.getElementsByTagName('img');
  for (let i=0; i<kuvat.length; i++) {
    // arvotaan luku 1-6
    let luku = Math.floor(Math.random() * 6) +1;
    kuvat[i].src = 'he' + luku +'.png';
    
    
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
  
  

