<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html401/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
  <title>Freight Costs</title>
</head>
<body>
<h2>Freight Cost Comparison: Air vs. Road</h2>
<table border='1'>
    <tr>
      <th>Order size</th><th>Cases</th><th>Total Weight (kg)</th>
      <th>Air Freight</th><th>Road Freight</th>
    </tr>
<!-- BEGIN order -->
    <tr>
         <td>{UNITS}</td>
         <td>{CASES}</td>
         <td>{WEIGHT}</td>
         <td>${AIR}</td>
         <td>${ROAD}</td>
    </tr>
<!-- END order -->
</table>
</body>
</html>
