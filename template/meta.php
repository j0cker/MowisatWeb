<?PHP
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />        
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="styles/style.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="images/favicon_mowisat.png">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="styles/bootstrap.css">

<!-- jQuery library -->
<script src="js/jquery.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/bootstrap.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/materialize.js"></script>
<link rel="stylesheet" href="styles/materialize.css">

<script src="js/toastr.js"></script>
<link rel="stylesheet" href="styles/toastr.css">

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="stylesheet" href="styles/font-awesome.css">
<link rel="stylesheet" href="styles/fonts-apply.css">


<!-- jQuery library -->
<script src="js/parallax.min.js"></script>

<style>
.container-fluid{
    padding-right: 0 !important;
    padding-left: 0 !important;
}
.row {
    margin-right: 0 !important;
    margin-left: 0 !important;
    margin-bottom: 0 !important;
}
.bgMesh{
    margin-top: 0px; height: 300px; background-color: black;  background: rgba(0,0,0,0.5);
} 
.bgMeshParent{
    top: 0; padding: 0; margin: 0; 
} 
</style>


<script>

function sendContact(){
    //alert("entro");
    console.log("entro");
    console.log(document.getElementById("nameContact").value);
    console.log($("#nameContact").val());
    console.log($("#numberContact").val());
    console.log($("#emailContact").val());
    console.log($("#commentContact").val());

    if($("#nameContact").val()==""){
        toastr["error"]("Write your name", "");
    } else if($("#numberContact").val()==""){
        toastr["error"]("Write your number", "");

    }  else if($("#emailContact").val()==""){
        toastr["error"]("Write your email", "");

    }  else if($("#commentContact").val()==""){
        toastr["error"]("Write your comments", "");

    } else {
        //ajax
        
        $.ajax({  url : "scripts/dao/contacto.php",
                    type : "post",
                    data : {  nameContact : $("#nameContact").val(),
                            numberContact : $("#numberContact").val(),
                            emailContact: $("#emailContact").val(),
                            commentContact: $("#commentContact").val()
                    },
                    success : function(data) {
                        console.log("se envio");
                        var response = JSON.parse(data);
                        console.log(response);
                        if(response.success=="true"){
                        toastr["success"]("We have recieved you data. we will contact you soon.", "");
                        } else {
                        toastr["error"](response.description, "");
                        }
                    },
                    error : function(response) {
                    toastr["error"]("Error you dont have internet", "");
                    }
        });
        


    }

}
function getLastPostBlog(){
        //ajax
        
        $.ajax({  url : "scripts/dao/getLastPostBlog.php",
                    type : "post",
                    success : function(data) {
                        console.log("se envio");
                        var response = JSON.parse(data);
                        console.log(response);
                        if(response.success=="true"){
                        console.log(response);

                        var readBlog = response.guid.split("/blog/");

                        //$("#titleBlog").html(response.title);
                        //$("#contentBlog").html(response.content + "...");
                        $("#readBlog").attr("href","blog/" + readBlog[1]);
                        $("#readBlog").css("display","");
                        } else {
                        $("#titleBlog").html("Error :( we connot load the blog right now.");
                        }
                    },
                    error : function(response) {
                    toastr["error"]("Error you dont have internet", "");
                    }
        });

}


$( document ).ready(function() {
// Handler for .ready() called.
    getLastPostBlog();
});
</script>