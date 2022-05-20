function login() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

  $.ajax({

      // la URL para la petición
      url : 'http://localhost/myapp/platforms/android/app/src/main/assets/www/Pages/login.php',

      // la información a enviar
      // (también es posible utilizar una cadena de datos)
      data : { phpuser : username, phppass: password},

      // especifica si será una petición POST o GET
      type : 'GET',

      // el tipo de información que se espera de respuesta


      // código a ejecutar si la petición es satisfactoria;
      // la respuesta es pasada como argumento a la función
      success : function(json) {
          if(JSON.parse(json)=="ok"){
            alert('passing through success');
            window.location.replace("http://localhost/MyApp/platforms/android/app/src/main/assets/www/student/studentIndex.php");
          }
      },

      // código a ejecutar si la petición falla;
      // son pasados como argumentos a la función
      // el objeto de la petición en crudo y código de estatus de la petición
      error : function(xhr, status) {
          alert('Disculpe, existió un problema');
      },

      // código a ejecutar sin importar si la petición falló o no
      complete : function(xhr, status) {
          alert('Petición realizada');
      }
  });
}

function callDashboard(){
alert('dashboard call');
    window.location.replace("http://localhost/MyApp/platforms/android/app/src/main/assets/www/Pages/dashboard.php");
}