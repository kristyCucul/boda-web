<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include_once("header.php") ?>

  <!-- Fuente romántica y elegante -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap" rel="stylesheet">

  <style>
   
      body {
      background-color: #4c1424;
      color: #fff;
      margin: 0;
      padding: 0;
    }
   
.contenedor-imagen {
  position: relative;
  width: 100%;
}

.imagen-con-texto {
  position: relative;
}

.imagen-con-texto img {
  width: 100%;
  max-height: 900px;
  object-fit: cover;
  display: block;
}

.texto-centrado {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 50px;
  font-weight: 700;
  color: #fffbe6;
  text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.8),
               -1px -1px 4px rgba(0, 0, 0, 0.3);
  animation: flotar 4s ease-in-out infinite;
  padding: 10px 25px;
  border-radius: 12px;
  backdrop-filter: blur(2px);
  z-index: 2;

   text-align: center;
}


        h2 {
      font-size: 2.5em;
      margin-bottom: 10px;
      color: #f5deb3;
    }
        .elegante {
      font-family: 'Great Vibes', cursive;
      font-size: 20px;
      color: #ffffffff;
      text-align: center;
    }


        .audio-player {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    @keyframes flotar {
      0%, 100% {
        transform: translate(-50%, -50%) translateY(0);
      }
      50% {
        transform: translate(-50%, -50%) translateY(-10px);
      }
    }

    .historia-container {
      display: flex;
      flex-wrap: wrap;
      flex-direction: row;
      justify-content: center;
      padding: 50px 20px;
      gap: 50px;
      background-color: rgba(0, 0, 0, 0.5);
        max-width: 1200px;
      margin: 0 auto;

    }

    .historia-columna {
      width: 45%;
    }

    .historia-titulo {
      font-size: 40px;
      text-align: center;
      margin-bottom: 30px;
      color: #f5deb3;
      border-bottom: 2px solid #d8b37c;
      padding-bottom: 10px;
    }

    .historia-bloque {
      display: flex;
      align-items: flex-start;
      margin-bottom: 30px;
    }

    .historia-bloque img {
      width: 100%;
      max-width: 250px;
      height: auto;
      margin-bottom: 10px;
      margin-right: 15px;
      border-radius: 20px;
      box-shadow: 0 0 10px rgba(0,0,0,0.5);
      border: 3px solid #fff5e1;
      border-radius: 20px;
      transition: transform 0.3s ease-in-out;
    }
    .historia-bloque img:hover {
  transform: scale(1.05);
}

    .historia-bloque.derecha {
      flex-direction: row-reverse;
    }

    .historia-bloque.derecha img {
      margin-left: 15px;
      margin-right: 5;
    }

    .historia-bloque.centrada {
      flex-direction: column;
      align-items: center;
    }

    .historia-bloque.centrada img {
      margin: 10px 0;
    }

    p {
      font-size: 20px;
      line-height: 1.6;
      color: #fff9ef;
      padding: 0 10px;
    }

    @media (max-width: 768px) {
      .historia-container {
        flex-direction: column;
      }
      .historia-columna {
        width: 100%;
      }
    }
    @media (max-width: 576px) {
  .texto-centrado {
    font-size: 30px;
    padding: 8px 15px;
  }

  .historia-bloque {
    flex-direction: column !important;
    align-items: center;
    text-align: center;
  }

  .historia-bloque img {
    margin: 0 auto 15px auto;
  }

  p {
    font-size: 16px;
  }

  .historia-titulo {
    font-size: 28px;
  }
}

  </style>
</head>
<body>
  <main style="margin-top: 60px;">
<div class="contenedor-imagen">
  <div class="imagen-con-texto">
    <img src="multimedia/nuestrahistoria.jpg" alt="Imagen principal de boda">
    <div class="texto-centrado">Nuestra Historia</div>
  </div>

<br> 
    <p class="elegante" >" Reproduce el audio mientras estes leyendo... "</p>
  <div class="audio-player">
    <audio controls>
      <source src="multimedia/galeria/Audio de WhatsApp 2025-07-22 a las 23.50.41_ce6b7139.mp3" type="audio/mp3">
      Tu navegador no soporta el elemento de audio.
    </audio>
  </div>
  </div>
  <br>
  <br>
  
  <div class="historia-container">
    <!-- Columna Mario -->
    <div class="historia-columna">
      <h2 class="historia-titulo">Mario</h2>

      <div class="historia-bloque centrada">
        <br>
        <p>Para mi todo empezó en las conferencias del 2022...
        Nunca antes había estado con alguien o sentido el deseo de estar con alguien... pero esas conferencias no las podré olvidar nunca!!! Porque fue el momento donde Dios me dio el deseo y me mostró que ese era el camino que yo debía recorrer.</p>
     <img src="multimedia/Mario1.jpg" >
       </div>

      <div class="historia-bloque centrado">
        <p>Dos de los 5 días de conferencia no pude dormir y sabía que no era mi conciencia... (o al menos eso pensaba) la primer noche me levante a las 12 o 1 de la madrugada y un pensamiento cruzo mi mente y le dije al Señor: ¿Qué quieres de mí? Entre el día miércoles y jueves esa pregunta se hizo muy clara... Dios quería que yo me casara... pero ahora estaba la otra pregunta más importante !!!! ¿Con quién me casaré?....</p>
       <img src="multimedia/mario2.jpg" alt="Imagen Mario 2">
      </div>

      <div class="historia-bloque centrada">
        <p>y en la madrugada del día viernes, una vez mas me volví a despertar pero ahora era preguntándole a Dios quien y una persona resaltó para mi... una joven muy hermosa llamada Ester !!! Pero Señor dije yo: ella es muy joven... será ella? ¿Que tengo que hacer?!! Señor dime que hacer? ... no hubo ni una respuesta, solo un deseo por hablar y Dios no me dejo tranquilo!!!!</p>
      <img src="multimedia/mario3.jpg" alt="Imagen Mario 3">
      </div>

      <div class="historia-bloque centrado">
        <p>Solo había un deseo en mi de hablar... y sabía que tenía que hacerlo ya porque Dios no me dejaría tranquilo y no me dejo!!!
       Al final de los seminarios del día viernes yo ya no podía más, así que hable... le dije a mi pastor: me quiero casar!!!</p>
      <img src="multimedia/mario4.jpg" alt="Imagen Mario 4">
      </div>

      <div class="historia-bloque centrado">
        <p>Dios me mostró esa semana cual era su voluntad... y aunque con miedo, yo la abrace también!!!</p>
        <img src="multimedia/mario5.jpg" alt="Imagen Mario 5">
      </div>

      <div class="historia-bloque centrado">
        <p>Pero había un pequeño problema... esa misma conferencia los papás de Ester fueron anunciandos para El Salvador!!! Una noticia muy buena pero para mi fue agridulce porque sabía que ella ya no estaría más cerca y que posiblemente haría una vida nueva en aquella nación.</p>
      <img src="multimedia/mario6.jpg" alt="Imagen Mario 6">
      </div>

      <div class="historia-bloque centrado">
        <p>En las próximas semanas me dedique a hablar con su papá acerca si habría alguna posibilidad para mi con su hija Ester... para mi sorpresa no había nada que lo impidiera, pero ahora el otro pequeño problema sería decirle a Ester... eso si me causó mucho miedo...</p>
      <img src="multimedia/mario7.jpg" alt="Imagen Mario 7">
      </div>

      <div class="historia-bloque centrado">
        <p>Para hacer un poco más pequeña la historia... no hable ni le mostré mis sentimientos a Ester!!! Tuve mucho miedo porque ella no estaba preparada para ese paso y yo no podría ni querría obligarla... en pocas palabras, no hablé ....</p>
      <img src="multimedia/mario8.jpg" alt="Imagen Mario 8">
      </div>

      <div class="historia-bloque centrado">
        <p>Una dia saliendo de un ensayo se me pregunto que había hecho o si había hablado con ella a lo que yo respondí que no... me dijeron que cortara esa relación entonces... esa noche fue la última vez que hable con Ester, sin decir adios ni el motivo... me aleje</p>
      <img src="multimedia/esterhistoria9.jpg" alt="Imagen Mario 7">
      </div>

      <div class="historia-bloque centrado">
        <p>Yo sabía desde mucho antes que ella tenia un futuro muy brillante por delante y que yo solo sería un estorbo... Al fin al cabo no paso nada entre nosotros que cada quien siga su camino... eso fue lo que pensé... no pude estar más equivocado !!!!</p>
      <img src="multimedia/esterhistoria10.jpg" alt="Imagen Mario 7">
      </div>

      <div class="historia-bloque centrado">
        <p>Durante casi un año la evite y no quise acercarme a ella porque yo sabía los sentimientos que yo todavi sentía hacia a ella y pues... ese año fue mi peor año en todo sentido!!!! Moral, espiritual, sentimental, mental y físico... recuedo que alguien me pregunto: ¿cómo estás? A lo que to respondí: mal, muy mal...</p>
      <img src="multimedia/mario11.jpg" alt="Imagen Mario 7">
      </div>

      <div class="historia-bloque centrado">
        <p>Pero hubieron dos cosas que marcaron una diferencia en ese año... la primera fue el regalarle una cajita musical a Ester simplemente porque sentí darcela y luego una lámpara que por una año entero la busqué... porque a ella le gustaba. Sentí en mi corazón darle esas dos cosas... sin saber lo que Dios estaba haciendo.</p>
      <img src="multimedia/mario12.jpg" alt="Imagen Mario 7">
      </div>

      <div class="historia-bloque centrado">
        <p>Quice empezar un 2024 con toda la actitud tratando de olvidar lo que había sido en el 2022 pero simplemente no pude... solo iba de mal en peor.</p>
      <img src="multimedia/mario13.jpg" alt="Imagen Mario 7">
      </div>

      <div class="historia-bloque centrado"> 
        <p>Pero un día domingo mi pastor predico un mensaje que no recuerdo... solo recuerdo haber pasado al altar y decirle a Dios las mismas palabras que le dije un día: si aun sirvo para algo, aquí esta mi vida...
        Y un dia lunes 8 de Abril algo pasó!!!!! Llegando de un ayuno de 3 días con oración recibo un mensaje!!! Y para mi sorpresa era Ester!!! 
        Pero por que?!!! Yo no le había hablando por un año!!! Por que me estaría escribiendo?!!!

        Pero lo mas maravillos es... que ella solo empezó con una simple pregunta: HOLA, CÓMO ESTÁS ?

        Y así comenzó una nueva historia para ambos !!!</p>
       <img src="multimedia/mario14.png" alt="Imagen Mario 7">
      </div>
 
      <div class="historia-bloque centrado">
        <p>Esa simple pregunta habría el camino para una nueva etapa y una nueva historia en donde ahora si... iba a hablar!!! Seguimos hablando después de eso pero aun no tenia el valor de decirle que sentía por ella !!! Y un 28 de Abril por fin le pregunte!!! Si habría alguna posibilidad que pasara algo entre los dos !!!</p>
      </div>

      <div class="historia-bloque centrado">
        <p>Y la repuesta fue si!!!! Mi corazón latió como nunca antes!!! Dios lo había hecho posible!!! Dos caminos que se separaron El los estaba volviendo a unir... y no podría estar mas agradecido por eso !!!!
         esta historia tiene mucho más... solo se que sigue siendo escrita por Dios....</p>       
         <img src="multimedia/mario15.png" alt="Imagen Mario 7">
        </div>
    </div>

    <!-- Columna Ester -->
    <div class="historia-columna">
      <h2 class="historia-titulo">Ester</h2>

      <div class="historia-bloque centrado">
        <p>Desde pequeños nos conocemos! Nunca fuimos más allá de un hola!
            Nunca imaginaria que un idioma me acercaría a ti! 
            Poco a poco te fuiste convirtiendo mi amigo! 
            Te hiciste muy cercano a mi. 
            Ambos tomamos caminos separados, pero no sabíamos lo que Dios tenía preparado para los dos. Con un simple hola, cómo estás? Basto para empezar nuestra historia.
          <br>
         <br>
        01 de junio 2022 nuestro primer rally juntos..</p>
        <img src="multimedia/historiaester1.jpg" alt="Imagen Ester 1">
      </div>

      <div class="historia-bloque centrado">
        <p>Las primeras veces que hablamos los nervios de ambos eran muy evidentes pero la emoción también!
         Esa fue la primera vez que nos convinamos y de ahí en adelante cada evento juntos tratabamos de ir iguales.</p>
         <img src="multimedia/esterhistoria2.jpg" alt="Imagen Ester 2">
      </div>

      <div class="historia-bloque centrado">
        <p>Mis primeras flores amarillas!
         Siempre había esperado por esas flores! 
         Y tu fuiste el primero y el único en dármelas! Contigo puedo decir que fue, es y será mi primera vez en todas las cosas junto a ti! 
         Y esa fue una de las primeras! 
         Cruzaste frontera para darme mis flores amarillas!
        <br>
        <br>
         16 de septiembre 2024</p>
         <img src="multimedia/esterhistoria3.jpg" alt="Imagen Ester 3">
      </div>

      <div class="historia-bloque centrado">
        <p>No pude evitar no enamorarme de ti! Cada día  que más hablábamos más me enamoraba de ti! 
        Tu corazón a Dios!
        Tu servicio a los demás!
        Tu forma de ser fueron las primeras cosas que me enamoraron de ti!</p>
        <img src="multimedia/esterhistoria4.jpg" alt="Imagen Ester 4">
      </div>

      <div class="historia-bloque centrado">
        <p>Nuestra primera cita! 
        Fue una sorpresa! Ver como todos ayudaron para tener nuestra primera cita toco mi corazón. 
        Recuerdo muy bien que esa vez nos llamaron Familia Valenzuela, mi corazón se emociono tanto! 
        Me abriste tu corazón,  el escucharte y poder compartir contigo me unió más a ti!
       <br>
       <br>
        16 de septiembre 2024</p>
        <img src="multimedia/esterhistoria5.jpg" alt="Imagen Ester 5">
      </div>

      <div class="historia-bloque centrado">
        <p>No solo me empecé a enamorar de ti sino que te volviste en mi mejor amigo! 
         Siempre había pedido por un amigo con quien poder compartir y no sabia que tendría dos por uno!
        <br>
        <br>
        29 de noviembre 2024 segunda cita!</p>
        <img src="multimedia/esterhistoria6.jpg" alt="Imagen Ester 6">
      </div>

      <div class="historia-bloque centrado">
        <p>Algo que para mi marcó la diferencia en esta relación fue que desde un principio fuimos honesto,  no ocultamos nada y eso nos hizo más unidos! No sabia que cada vez se acercaba nuestro compromiso!! Yo lo esperaba con ansias. Ya no podía imaginar mi vida sin ti!</p>
      <img src="multimedia/esterhistoria7.jpg" alt="Imagen Ester 7">
      </div>

      <div class="historia-bloque centrado">
        <p>Conforme iban pasando los meses, yo sentía un fuerte amor por ti! Y no era normal yo sabía que era de Dios! Y cada vez confirmaba más su voluntad en los dos.
        <br>
        <br>
        06 de diciembre,  último día de conferencia 2024</p>
        <img src="multimedia/esterhistoria8.jpg" alt="Imagen Ester 8">
      </div>

      <div class="historia-bloque centrado">
        <p>Un 28 de abril no sabia que nuestra historia empezaría,  y mucho menos sabia como iba a ver la voluntad de Dios tan cerca y clara! 
          Aunque dejamos de hablar un tiempo y cada quien paso un proceso diferente,  Dios tenía planes para ambos.
        <br>
        <br>
        28 de diciembre 2024 nuestro compromiso</p>
        <img src="multimedia/esterhistoria9.jpg" alt="Imagen Ester 9">
      </div>

      <div class="historia-bloque centrado">
        <p>En esta tierra tu fuiste mi primer amor! 
        Yo siempre había soñado con casarme y formar una familia. Pero al ver el mundo de hoy me cerré a eso, solo quería hacer la voluntad de Dios. Recuerdo muy bien que dije Dios has conmigo lo que quieras y si tienes alguien para mi ayúdame aguardarme y que el se guarde para mi! Fue mi promesa a Dios. Y aunque hubo un tiempo donde mi fe en Dios no estuvo muy bien, aun así Dios mantuvo su promesa para conmigo! Y me dio un hombre conforme a su corazón!</p>
      <img src="multimedia/esterhistoria10.jpg" alt="Imagen Ester 10">
    </div>

      <div class="historia-bloque centrado">
        
        <p>Ver tu esfuerzo de conquistarme y hacer las cosas bien me enamoró aun más de ti! 
        Yo conocía tu corazón para Dios y la gente! 
        Pero ver como eres conmigo cautivo mi corazón por completo! Siempre me dijiste y recordaste el valor que tengo!</p>
        <img src="multimedia/esterhistoria11.jpg" alt="Imagen Ester 11">
      </div>
      
      <div class="historia-bloque centrado">  
        <p>Desde un principio tu fuiste diferente! 
         Fuiste un verdadero amigo,  no solo buscabas tu interés siempre vi que te preocupabas por mi, me dabas muchos ánimos y consejos,  y algo que siempre me gustó fue que esos consejos involucraban a Dios.
         Me ayudaste a tener más confianza en mi! 
        Contigo aprendí a sonreír más!</p>
        <img src="multimedia/esterhistoria12.jpg" alt="Imagen Ester 11">
      </div>

            <div class="historia-bloque centrado">
        <p>Cada día me recuerdas lo que valgo! Me recuerdas que me amas, y no solo me lo recuerdas sino que me lo demuestras. 
        Yo tenia muchas inseguridades, miedos...
        Y tu no solo me ayudaste sino que estuviste conmigo  y sigues conmigo! 
        Contigo puedon ser yo! Contigo tengo libertad de hablar, de reír, de llorar, de disfrutar, de aprender.
       <br>
       <br>
      26 de abril 2025</p>
      <img src="multimedia/esterhistoria13.jpg" alt="Imagen Ester 11">
      </div>

      <div class="historia-bloque centrado">
        <P>Mi mejor amigo! Mi prometido,  mi futuro esposo </p>
         <img src="multimedia/esterhistoria14.jpg" alt="Imagen Ester 11">
        </div>

      <div class="historia-bloque centrado">
        <p>Y este rally 2025 ya hace un año de nuestro comienzo, cerca a nuestra boda puedo decir que nuestro avance a sido mucho.  Aquellos dos jóvenes que empezaron con miedo pero con emoción no se quedaron en la emoción sino han aprendiendo amarse, respetarse, cuidarse, apoyarse y siguen aprendiendo.... no puedo esperar por ver lo que Dios tiene de aquí en adelante junto a ti!</p>
        <img src="multimedia/esterhistoria15.jpg" alt="Imagen Ester 11">
      </div>

     <div class="historia-bloque centrado">
        <p>Te dije quiero aprender amarte.... no sabia cuanto llegaría amarte! 
        cada día sigo aprendiendo amarte. Porque no somos dos sino tres! ..... Te amo!</p>
     <img src="multimedia/esterhistoria16.jpg" alt="Imagen Ester 11">
    </div>

 

      </div>
    </div>
  </div>
</main>
</body>

</html>



