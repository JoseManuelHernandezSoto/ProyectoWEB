document.getElementById('login').addEventListener('click', function(event){

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    //Validar accesos del usuario 
    const validUsername = 'admin';
    const validPassword = '123';
    
    if(username === validUsername && password === validPassword){
        //Si los datos son iguales cambia de pagina 
        window.location.href = './table.php'
    }else{
        //Si algo no concide manda un alert 
        alert('Usuario o contraseña incorrecto');
    }
});