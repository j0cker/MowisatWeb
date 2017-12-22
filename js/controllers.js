(function() {
  app.controller('index', function($scope, functions, $window) {
    
    functions.loading();
    
    console.log("[IndexCtrl]");

    $scope.loginOpen = function(){
      $("#register-page").css("display","none");
      $("#login-page").css("display","");
    }

    $scope.login = function(){
    

      console.log("[index][login]");

      console.log("Username: " + $("#username").val());
      console.log("Password:" + $("#password").val());

      $('body').removeClass('load');
      $('body').removeClass('loaded');
      

      
      functions.login($("#username").val(), $("#password").val()).then(function (response) {
      

          if(response.data.success == "true"){ 
                  $('body').addClass('loaded');
                  window.location = "scripts/modulos/presentacion.php";
          } else {
              $('body').addClass('loaded');
                toastr["error"](response.data.description, "");
          }
      }, function (response) {

        /*ERROR*/
        $('body').addClass('loaded');
        toastr["error"]("Inténtelo de nuevo más tarde", "");

      });/*fin getcuentas*/
 
    };

  });


  return;

}).call(this);