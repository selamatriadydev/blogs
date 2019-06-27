
<html lang="en">

  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

  <script type="text/javascript" src="bootstrap/js/jquery.js"></script>

  <script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

    <!-- Bootstrap CSS -->

    <title>Form Dinamis!</title>

  </head>

  <body>

 <div class="container">

<!--form dinamis-->

 <div class="col-sm-6">

    <h4>Hobbi</h4>

  <div class="panel-body">

        <div class="input-group control-group after-add-more">

         <input type="text" name="addmore[]" class="form-control" placeholder="Examp. Blogger ">

            <div class="input-group-btn"> 

            <button class="btn btn-success add-more" type="button"><i class="glyphicon glyphicon-plus"></i> Add</button>

            </div>

        </div>

        <div class="copy-fields hide">

          <div class="control-group input-group" style="margin-top:10px">

            <input type="text" name="addmore[]" class="form-control" placeholder="Examp. Blogger">

            <div class="input-group-btn"> 

              <button class="btn btn-danger remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>

            </div>

          </div>

        </div>

  </div>

            </div>

  <!--/.form dinamis-->

</div>

  <!--ajax form dinamis-->

<script type="text/javascript">

    $(document).ready(function() {

      $(".add-more").click(function(){ 

          var html = $(".copy-fields").html();

          $(".after-add-more").after(html);

      });

      $("body").on("click",".remove",function(){ 

          $(this).parents(".control-group").remove();

      });



    });



</script>

 <!--/.ajax form dinamis-->

  </body>

</html>