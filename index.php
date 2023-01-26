<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jQuery Practice</title>
    <link rel="stylesheet" href="styles.css">
    <script src="jquery-3.6.3.js"></script>

    <script>
        $(document).ready(function() {//prevents javascript from running before document is finished loading.

            $("p.hideP").click(function() {//hides text with a class of hideP.
                $(this).hide();
            });

            //add multiple events to an element.
            $("h1").on({
                mouseenter: function() {//change color to green.
                    $(this).css("color", "green");
                },

                mouseleave: function() {//change color back to black when mouse leaves h1.
                    $(this).css("color", "black");
                },

                click: function() {//show alert when clicked.
                    alert("Welcome to jQuery practice.");
                }
            });
            //end multiple-------------------------------

            //hides and shows text when button is clicked.
            $("#hide").click(function() {
                $("p.hideshow").toggle();
            });

            //toggles the dropdown.
            $("#dropdown").click(function() {
                $("#drop").slideToggle();
            });

            //chain of scripts
            $("#chain").click(function() {
                $("#chained").css("color", "red").fadeOut(5000).fadeIn(5000);
            });

        });
    </script>
</head>
<body>

<h1>jQuery Practice</h1>

<p class="hideP">Click this text to hide it.</p>

<p class="hideshow">Click the buttons to hide/show this text.</p>

<button id="hide">Hide/Show</button>

<br><br>

<button id="dropdown">Click to toggle dropdown</button>
<div id="drop">
    <h3>Dropdown:</h3>
    <ul>
        <li>Mass Effect</li>
        <li>Final Fantasy</li>
        <li>Dragon Age</li>
    </ul>
</div>

<br><br>

<button id="chain">Clike for chained script</button>

<p id="chained">This text is chained.</p>

    
</body>
</html>