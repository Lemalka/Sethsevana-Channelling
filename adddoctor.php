<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>

</head>
<body>

<div class="jumbotron" style="background: url(img/dummy/sethsevanabg1.jpg) no-repeat;background-size: cover;height: 300px;"></div>

<div class="container-fluid">
  <div class="row">
     <div class="col-md-5">
      <div class="card" >
        <div class="card-body" style="background-color:#009999;color: #ffffff;">
          <div class="card-body">
            <form class="form-group " action="" method="POST">
            <label>Doctor ID:</label>
            <input type="text" name="doc_id" class="form-control"><br>
            <label>First Name:</label>
            <input type="text" name="docfname" class="form-control"><br>
            <label>Last Name:</label>
            <input type="text" name="doclname" class="form-control"<br><br>

            <label for="category">Category:</label>
            <select name="categories" id="category">
              <option value="Cardiology">Cardiologist</option>
              <option value="Paediatrician">Paediatrician</option>
              <option value="Neurologist">Neurologist</option>
              <option value="Eye Surgeon">Eye Surgeon</option>
             </select><br>
            <label>SLMC No:</label>
            <input type="text" name="slmc" class="form-control"><br>
            <label>Qualification:</label>
            <input type="text" name="qualification"class="form-control"><br>
            <label >University</label>
            <input type="text" name="university" class="form-control"><br>
            <input type="submit" name="panel_submit" value="ADD" >

          </div>
      </div>


      </div>
    </div>
    </div>
     

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>