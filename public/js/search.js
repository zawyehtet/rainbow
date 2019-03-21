  //search for movie
  $(document).ready(function(){
    $("#movieSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  //end search movie
   //search for showing
   $(document).ready(function(){
    $("#showSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#showTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  //end search showing
   //search for hall
   $(document).ready(function(){
    $("#hallSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#hallTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  //end search hall
  //search for seat
  $(document).ready(function(){
    $("#seatSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#seatTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  //end search seat
  //search for user
  $(document).ready(function(){
    $("#userSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#userTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  //end search user
