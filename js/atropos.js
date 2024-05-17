/**
 * https://atroposjs.com/ (documentacion)
 * 
 * Esto es Atropos es necesario inicializar una entidad nueva cada vez que se quiere utilizar
 * de lo contrario no funciona ya que crea conflicto por los nombres (Hay que probar si se pueden reutilizar 
 * estas variables en otra paginas para ahorrarnos codigo)
 * 
 * Puedes jugar con los parametros para ver que hacen o preguntarle a ChatGPT y te responde
 * activeOffset: 70 (Este no me lo explico bien pero ya se que hace, mientras mas grande sea el numero al momento
 * de pasar el rato por el elemento se expande mas)
 */

// Initialize Atropos
const myAtropos = Atropos({ /* Funciona en el slider del menu principal */
    el: '.my-atropos',
    // rest of parameters
    rotateLock: false,
    rotateXMax: 5,
    rotateYMax: 5,
    shadow: true,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});

// Initialize Atropos
const packageOne = Atropos({ /* Funciona en el paquete #1 */
    el: '.package1',
    // rest of parameters
    rotateLock: false,
    rotateXMax: 15,
    rotateYMax: 15,
    shadow: true,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});

const packageTwo = Atropos({ /* Funciona en el paquete #2 */
    el: '.package2',
    // rest of parameters
    rotateLock: false,
    rotateXMax: 15,
    rotateYMax: 15,
    shadow: true,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});

const packageThree = Atropos({/* Funciona en el paquete #3 */
    el: '.package3',
    // rest of parameters
    rotateLock: false,
    rotateXMax: 15,
    rotateYMax: 15,
    shadow: true,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});