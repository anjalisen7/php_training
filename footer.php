
  <script>
    $('#edit_btn').click(function(){
      $('#input_name').removeAttr("disabled");
      $('#input_age').removeAttr("disabled");
      $('#input_city').removeAttr("disabled");
      $('#input_address').removeAttr("disabled");
      $('#input_field').removeAttr("disabled");
    }
                        );
    $('#addwork').click(function(){
      $('#work').removeAttr("disabled");
    }
                       );
    <?php
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
      ?>
        swal({
        title: "<?php  echo $_SESSION['status'];?>",
        icon: "<?php echo $_SESSION['status_code']; ?>",
        button: "Ok Done!",
      }
            );
      <?php
      unset($_SESSION['status']);
    }
    ?>
  </script>
</html>
