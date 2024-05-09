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

const placeone = Atropos({ /* Funciona en los lugares turisticos */
    el: '.placeOne',
    // rest of parameters
    rotateLock: true,
    rotateXMax: 5,
    rotateYMax: 5,
    shadow: false,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});

const placetwo = Atropos({ /* Funciona en los lugares turisticos */
    el: '.placeTwo',
    // rest of parameters
    rotateLock: true,
    rotateXMax: 5,
    rotateYMax: 5,
    shadow: false,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});


const placethree = Atropos({ /* Funciona en los lugares turisticos */
    el: '.placeThree',
    // rest of parameters
    rotateLock: true,
    rotateXMax: 5,
    rotateYMax: 5,
    shadow: false,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});

const placefour = Atropos({ /* Funciona en los lugares turisticos */
    el: '.placeFour',
    // rest of parameters
    rotateLock: true,
    rotateXMax: 5,
    rotateYMax: 5,
    shadow: false,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});

const placefive = Atropos({ /* Funciona en los lugares turisticos */
    el: '.placeFive',
    // rest of parameters
    rotateLock: true,
    rotateXMax: 5,
    rotateYMax: 5,
    shadow: false,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});

const placesix = Atropos({ /* Funciona en los lugares turisticos */
    el: '.placeSix',
    // rest of parameters
    rotateLock: true,
    rotateXMax: 5,
    rotateYMax: 5,
    shadow: false,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});

const placeseven = Atropos({ /* Funciona en los lugares turisticos */
    el: '.placeSeven',
    // rest of parameters
    rotateLock: true,
    rotateXMax: 5,
    rotateYMax: 5,
    shadow: false,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});

const placeeight = Atropos({ /* Funciona en los lugares turisticos */
    el: '.placeEight',
    // rest of parameters
    rotateLock: true,
    rotateXMax: 5,
    rotateYMax: 5,
    shadow: false,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});

const placenine = Atropos({ /* Funciona en los lugares turisticos */
    el: '.placeNine',
    // rest of parameters
    rotateLock: true,
    rotateXMax: 5,
    rotateYMax: 5,
    shadow: false,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});

const placeten = Atropos({ /* Funciona en los lugares turisticos */
    el: '.placeTen',
    // rest of parameters
    rotateLock: true,
    rotateXMax: 5,
    rotateYMax: 5,
    shadow: false,
    shadowOffset: 60,
    shadowScale: 1,
    highlight: true,
    durationEnter: 60,
    activeOffset: 70 
});