<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type"
              content="text/html; charset=utf-8" />
        <meta name="viewport"
              content="width=device-width, initial-scale=1" />

        <title>TMPR PHP Assessment</title>
        
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <script src="https://code.highcharts.com/highcharts.js"></script>

        <style type="text/css">
            body {
                text-align: center;
            }
            .highcharts-figure
            {
                min-width: 310px;
                max-width: 1000px;
                margin: 2em auto;
            }

            #containerDivID {
                height: 500px;
            }


        </style>
    </head>
    <body onload="loadCart()">


        <figure class="highcharts-figure">
            <div id="containerDivID"></div>

        </figure>

        <script type="text/javascript">

            function loadCart() {
                $.ajax({
                    url: "http://127.0.0.1:8000/api/member-on-boarding",
                    type: "GET",
                    contentType: false,
                    cache: false,
                    processData: false, 
                    success: function (data)
                    {

                        Highcharts.chart("containerDivID", data);


                    }
                });
            }
        </script>
    </body>
</html>
