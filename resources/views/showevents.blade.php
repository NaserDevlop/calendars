 <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <!-- Font Awesome Icon Library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">                                                                                  </script>

  </head>

<style>
  body{
    background-color:#DD042B;
  }
  h2{
    text-align:center;
    line-height:8vh;
    color:#fff;
  }
table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px ;
}



tr:nth-child(odd) {
  background-color: #f2f2f2;
}
tr:nth-child(even) {
  background-color: #ffffff;
}
    tr:first-child {
      background-color: beige;
    }
    /* td:first-child {
    background-color: #f2f2f2;
    } */
    
/*    --------------------------------------   */
    
    
    
.fa-check {
  color: green;
}

.fa-remove {
  color: red;
    
/*    -------------------------------------   */
    
</style>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<body>

<h2>Events Table</h2>
 

<table>
  <tr style="text-align:center">
    <th> Id</th>
     <th>Month</th>
    <th> Day</th>
    <th>Title</th>
     <th>Info</th>
    <th>Note</th>
    <th>Has_email</th>
    <th style="text-align:center">Action</th>
    
  </tr>
     
  @foreach($da as $da)
  <tr>

     <td> {{$da->id}} </td>
  
     <td> {{$da->month}} </td>
    <td> {{$da->day}} </td>
    <td> {{$da->title}} </td>
     
    <td> {{$da->info}} </td>
    <td> {{$da->note}} </td>
    <td> {{$da->has_email}} </td>
     
    <td>
    
    <a href="{{ url('update-events/').'/'.$da->id  }}"  class="btn btn-success">View</a>
    <a href="{{ url('update-events/').'/'.$da->id  }}"  class="btn btn-warning">Edite</a>
    <a  href={{ url('delete-event/').'/'.$da->id  }}"  class="btn btn-danger">Delete</a>  
         </td>
         </tr>
      @endforeach
 
 

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
<script>
$(document).ready(function(){
          $(".alert").slideDown(300).delay(5000).slideUp(300);
    });
 
</script>
</html>

 