<?php  
 $connect = new mysqli("localhost", "root", "", "ilknak");
 $connect->set_charset("utf8");
 $query = "SELECT ilceler.ad,endeks.endeks FROM ilceler,endeks WHERE endeks.id=ilceler.id ORDER BY endeks.endeks DESC";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head> 
	  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['ad', 'endeks'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["ad"]."', ".$row["endeks"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {
          title: 'Risk Endeksi Grafik Gösterimi',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>