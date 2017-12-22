(function() {
  app.factory('functions', function($http) {
    return {
      loading: function() {
        $('body').removeClass('load');
        $('body').removeClass('loaded');
        $('body').addClass('load');
        setTimeout(function() {
          return $('body').addClass('loaded');
        }, 1000);
      },
      login: function(username, ps) {

        console.log("[factory][login]");

        console.log(username);
        console.log(ps);

        var url = 'scripts/dao/login.php';
		  	return $http.get(url, {cache: false, params: { username:username, ps:ps } })

      },
      register: function(name, username, ps) {

        console.log("[factory][login]");

        console.log(username);
        console.log(ps);

        var url = 'scripts/dao/register.php';
		  	return $http.get(url, {cache: false, params: { name:name, username:username, ps:ps } })

      }
    };
  });

}).call(this);