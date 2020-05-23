<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

</head>
<body onload="tableData()">

<div class="jumbotron" style="background: url(img/dummy/sethsevanabg1.jpg) no-repeat;background-size: cover;height: 200px;"></div>

<div class="container">
  <h4>Let's Edit/Remove Users</h4>
  <table id="tbledoc" class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Doctor_Id</th>
         <th>First Name</th>
          <th>Last Name</th>
           <th>Category</th>
            <th>SLMC No</th>
             <th>Qualification</th>
              <th>University</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
  




</div>




   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script src="jquery.tabledit.js"></script>
   <script>
     function viewData()
     {
        $.ajax({
          url: 'tabledit.php?p=view',
          method: 'GET'
        }).done(function(data){
          $('tbody').html(data)
          tableData()
          
        })
     }
     function tableData()
     {
      $('#tbledoc').Tabledit({
    url: 'tabledit.php',
    columns: {
        identifier: [0, 'id'],
        editable: [[1, 'nickname'], [2, 'firstname'], [3, 'lastname']]
    }
});
     }
   </script>

</body>
</html>