<html>
    <title>Age in JS</title>
    <body>
        <script>
            var animaldob = "1990-11-05";
            var today = new Date();
            var newdate = animaldob.split("-");
            var dob = new Date(newdate);
            document.write("dob of Animal : " + dob);
            var x = parseInt(today.getTime()) - parseInt(dob.getTime());
            var y = 1000 * 60 * 60 * 24 * 365;
            var num_years = x / y;
            var year = (Math.floor(num_years));
            document.write("<br>Age of Animal : " + year);   
        </script>      
    </body>
</html>
