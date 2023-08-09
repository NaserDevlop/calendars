 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}



tr:nth-child(odd) {
  background-color: #f2f2f2;
}
    tr:first-child {
    background-color: beige;
    }
    
/*    --------------------------------------   */
    
    
    
.fa-check {
  color: green;
}

.fa-remove {
  color: red;
    
/*    -------------------------------------   */
    
</style>
</head>
<body>

<h2>Members Table</h2>
<!--
<p>For zebra-striped tables, use the nth-child() selector and add a background-color to all even (or odd) table rows:</p>
-->
<table>
  <tr>
    <th> Id</th>
    <th> Name</th>
    <th>Email</th>
    <th>Join at</th>
    <th>Action</th>
    
  </tr>
  <tr>
     

    <td> {{$da->id}} </td>
   <!-- <td><?php echo base64_encode($da->name) ?></td> -->
    <td> {{$da->name}} </td>
    <td> {{$da->email}} </td>
    <td> {{$da->created_at}} </td>
    <td>
    
    <a href="{{ url()->previous() }}"  class="btn btn-secondary">Back</a>
    <a href=""  class="btn btn-warning">Edite</a>
        <a  href=""  class="btn btn-danger">Delete</a>  
         </td>
      
  </tr>
 

</table>
<!-------------------------------------------------------------------------------->
    
    <!--
<table>
  <tr>
    <th style="width:50%">Features</th>
    <th>Basic</th>
    <th>Pro</th>
  </tr>
  <tr>
    <td>Sample text</td>
    <td><i class="fa fa-remove"></i></td>
    <td><i class="fa fa-check"></i></td>
  </tr>
  <tr>
    <td>Sample text</td>
    <td><i class="fa fa-check"></i></td>
    <td><i class="fa fa-check"></i></td>
  </tr>
</table> -->
</body>
</html>

 