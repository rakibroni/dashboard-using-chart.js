<!DOCTYPE html>
<html> 
<head>
    <title>Creating dynamic data chart using PHP and Chart.js</title>
    <style type="text/css">
        BODY {
            width: 550PX;
        }

        #chart-container {
            width: 100%;
            height: auto;
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
        }

        .card-body {
            -webkit-box-flex: 1;
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .drop-down {
            margin-top: 20px;
            margin-left: 200px;
            margin-bottom: 10px;
            height: 30px;
            width: 200px;

        }
    </style>
    <script src="js/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/chart.js"></script>

<body>
    <div class="card-body">
        <p>Create pie chart with Mysql dynamic data </p> 
        <div class="card" id="piechart-chart-container">
            <canvas id="piechartCanvas"></canvas>
        </div>
        <span id="list_name"></span> 
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            var list_value= '<?php  if(isset($_GET['list_value'])){echo $_GET['list_value'];}  ?>';
            if (list_value == 'grade') {
                               $("#list_name").append('Chart: Grade');
                            } else {
                                $("#list_name").append('Chart: Attendance');
                            }
           
            $.ajax({
                url: "getData.php",
                data: "list_value=" + list_value,
                method: "POST",
                success: function(data) {
                    console.log(data);
                    var name = [];
                    var marks = [];
                    for (var i in data) {
                        name.push(data[i].student_name);
                         if (list_value == 'grade') {
                                marks.push(data[i].grade);
                            } else {
                                marks.push(data[i].attendance);
                            }
                    }
                    var chartdata = {
                        labels: name,
                        datasets: [{
                            label: 'Student Report',
                            backgroundColor: ['#f56954', '#00a65a', '#f39c12', '#00c0ef',
                                '#3c8dbc', '#d2d6de'
                            ],
                            hoverBackgroundColor: 'rgba(230, 236, 235, 0.75)',
                            hoverBorderColor: 'rgba(230, 236, 235, 0.75)',
                            data: marks
                        }]
                    };
                    var graphTarget = $("#piechartCanvas");
                    var barGraph = new Chart(graphTarget, {
                        type: 'pie',
                        data: chartdata,

                    });
                },
                error: function(data) {
                    console.log(data);
                }

            });

            
        });
    </script>
</body>

</html>