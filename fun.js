$('#loader').ClassyLoader({
  showRemaining: false,
  animate: true
});

var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 1000);
}

function showPage() {
  $( "#loader" ).hide("slow");
  $( "#myDiv" ).show("slow");
}