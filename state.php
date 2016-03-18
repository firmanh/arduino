<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Persist checkboxes</title>
    <style>
    button{
      margin-top:8px;
    }
    </style>
  </head>

  <body>
    <div>
      <label for="option1">Option 1</label>
      <input type="checkbox" id="option1">
    </div>
    <div>
      <label for="option2">Option 2</label>
      <input type="checkbox" id="option2">
    </div>
    <div>
      <label for="option3">Option 3</label>
      <input type="checkbox" id="option3">
    </div>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script>

    <script>
      function handleButtonClick(button){
        if ($(button).text().match("Check all")){
          $(":checkbox").prop("checked", true)
        } else {
          $(":checkbox").prop("checked", false)
        };
        updateButtonStatus();
      }
      function updateButtonStatus(){
        var allChecked = $(":checkbox").length === $(":checkbox:checked").length;
        $("button").text(allChecked? "Uncheck all" : "Check all");
      }
      function updateCookie(){
        var elementValues = {};
        $(":checkbox").each(function(){
          elementValues[this.id] = this.checked;
        });
        elementValues["buttonText"] = $("button").text();
        $.cookie('elementValues', elementValues, { expires: 7, path: '/' })
      }
      function repopulateFormELements(){
        var elementValues = $.cookie('elementValues');
        if(elementValues){
          Object.keys(elementValues).forEach(function(element) {
            var checked = elementValues[element];
            $("#" + element).prop('checked', checked);
          });
          $("button").text(elementValues["buttonText"])
        }
      }
      $(":checkbox").on("change", function(){
        updateButtonStatus();
        updateCookie();
      });
      $("button").on("click", function() {
        handleButtonClick(this);
        updateCookie();
      });
      $.cookie.json = true;
      repopulateFormELements();
    </script>
  </body>
</html>