// Obtener los divs por su id
const alone1 = document.getElementById("alone1");
const alone2 = document.getElementById("alone2");
const couple1 = document.getElementById("couple");
const couple2 = document.getElementById("couple2");
const family1 = document.getElementById("family");
const family2 = document.getElementById("family2");
// Agregar evento de mouseover a ambos divs
alone1.addEventListener("mouseover", addHoveredClassPackage1);
alone2.addEventListener("mouseover", addHoveredClassPackage1);

couple1.addEventListener("mouseover", addHoveredClassPackage2);
couple2.addEventListener("mouseover", addHoveredClassPackage2);

family1.addEventListener("mouseover", addHoveredClassPackage3);
family2.addEventListener("mouseover", addHoveredClassPackage3);

// Agregar evento de mouseout a ambos divs
alone1.addEventListener("mouseout", removeHoveredClassPackage1);
alone2.addEventListener("mouseout", removeHoveredClassPackage1);

couple1.addEventListener("mouseout", removeHoveredClassPackage2);
couple2.addEventListener("mouseout", removeHoveredClassPackage2);

family1.addEventListener("mouseout", removeHoveredClassPackage3);
family2.addEventListener("mouseout", removeHoveredClassPackage3);

// Función para agregar la clase "hovered"
function addHoveredClassPackage1() {
    alone1.classList.add("hovered");
    alone2.classList.add("hovered");
}

function addHoveredClassPackage2() {   
    couple1.classList.add("hovered");
    couple2.classList.add("hovered");
}

function addHoveredClassPackage3() {
    family1.classList.add("hovered");
    family2.classList.add("hovered");
}
// Función para remover la clase "hovered"
function removeHoveredClassPackage1() {
    alone1.classList.remove("hovered");
    alone2.classList.remove("hovered");
}

function removeHoveredClassPackage2() {
    couple1.classList.remove("hovered");
    couple2.classList.remove("hovered");
}

function removeHoveredClassPackage3() {
    family1.classList.remove("hovered");
    family2.classList.remove("hovered");
}



//Muestra los divs ocultos
document.getElementById("alone1").addEventListener("click", function() {
    var div2 = document.getElementById("alone2");
    div2.style.display = (div2.style.display === "block") ? "none" : "block"; // Alternar entre mostrar y ocultar el div2
});

document.getElementById("couple").addEventListener("click", function() {
    var div2 = document.getElementById("couple2");
    div2.style.display = (div2.style.display === "block") ? "none" : "block"; // Alternar entre mostrar y ocultar el div2
});

document.getElementById("family").addEventListener("click", function() {
    var div2 = document.getElementById("family2");
    div2.style.display = (div2.style.display === "block") ? "none" : "block"; // Alternar entre mostrar y ocultar el div2
});

