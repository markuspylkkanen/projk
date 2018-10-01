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

function Panos(){

}


  let age = 0;
  
  do {
    age = prompt('Todista ikäsi.', 18 );
    if ( age > 17 ) {
      alert( 'Tervetuloa pelaamaan' );
    } else {
      alert( 'Sinun täytyy olla täysikäinen.' );
    }
  } while(age < 18);

  
  

