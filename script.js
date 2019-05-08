  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

$('#image1').click(function(){
        $("#dialog").dialog();
    });   
        