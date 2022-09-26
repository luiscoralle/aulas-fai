<html lang="en">
<head>
    <title>Horarios FAI</title>

	<style>
		table {
		  border-collapse: collapse;
		  width: 100%;
		}
		
		th, td {
		  text-align: left;
		  padding: 8px;
		}
		
		tr:nth-child(even) {background-color: #f2f2f2;}
		</style>

</head>
<body>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
aula=1;
setInterval(
    function ()
    {
    
    document.getElementById("idaula").innerHTML = "Aula " + aula;

    //$('#lunes0800').load('myphpfile.php?dow_hm=lun0800&aula='+aula).fadeIn("slow");
    $('#lunes0800').load('cust.php?row=1&col=1&aula='+aula).fadeIn("slow");
    $('#lunes0830').load('cust.php?row=2&col=1&aula='+aula).fadeIn("slow");
    $('#lunes0900').load('cust.php?row=3&col=1&aula='+aula).fadeIn("slow");
    $('#lunes0930').load('cust.php?row=4&col=1&aula='+aula).fadeIn("slow");
    $('#lunes1000').load('cust.php?row=5&col=1&aula='+aula).fadeIn("slow");
    $('#lunes1030').load('cust.php?row=6&col=1&aula='+aula).fadeIn("slow");

    $('#martes0800').load('myphpfile.php?dow_hm=mar0800&aula='+aula).fadeIn("slow");
    $('#martes0830').load('myphpfile.php?dow_hm=mar0830&aula='+aula).fadeIn("slow");
    $('#martes0900').load('myphpfile.php?dow_hm=mar0900&aula='+aula).fadeIn("slow");
    $('#martes0930').load('myphpfile.php?dow_hm=mar0930&aula='+aula).fadeIn("slow");
    $('#martes1000').load('myphpfile.php?dow_hm=mar1000&aula='+aula).fadeIn("slow");
    $('#martes1030').load('myphpfile.php?dow_hm=mar1030&aula='+aula).fadeIn("slow");

    $('#miercoles0800').load('myphpfile.php?dow_hm=mie0800&aula='+aula).fadeIn("slow");
    $('#miercoles0830').load('myphpfile.php?dow_hm=mie0830&aula='+aula).fadeIn("slow");
    $('#miercoles0900').load('myphpfile.php?dow_hm=mie0900&aula='+aula).fadeIn("slow");
    $('#miercoles0930').load('myphpfile.php?dow_hm=mie0930&aula='+aula).fadeIn("slow");
    $('#miercoles1000').load('myphpfile.php?dow_hm=mie1000&aula='+aula).fadeIn("slow");
    $('#miercoles1030').load('myphpfile.php?dow_hm=mie1030&aula='+aula).fadeIn("slow");

    $('#jueves0800').load('myphpfile.php?dow_hm=jue0800&aula='+aula).fadeIn("slow");
    $('#jueves0830').load('myphpfile.php?dow_hm=jue0830&aula='+aula).fadeIn("slow");
    $('#jueves0900').load('myphpfile.php?dow_hm=jue0900&aula='+aula).fadeIn("slow");
    $('#jueves0930').load('myphpfile.php?dow_hm=jue0930&aula='+aula).fadeIn("slow");
    $('#jueves1000').load('myphpfile.php?dow_hm=jue1000&aula='+aula).fadeIn("slow");
    $('#jueves1030').load('myphpfile.php?dow_hm=jue1030&aula='+aula).fadeIn("slow");

    $('#viernes0800').load('myphpfile.php?dow_hm=vie0800&aula='+aula).fadeIn("slow");
    $('#viernes0830').load('myphpfile.php?dow_hm=vie0830&aula='+aula).fadeIn("slow");
    $('#viernes0900').load('myphpfile.php?dow_hm=vie0900&aula='+aula).fadeIn("slow");
    $('#viernes0930').load('myphpfile.php?dow_hm=vie0930&aula='+aula).fadeIn("slow");
    $('#viernes1000').load('myphpfile.php?dow_hm=vie1000&aula='+aula).fadeIn("slow");
    $('#viernes1030').load('myphpfile.php?dow_hm=vie1030&aula='+aula).fadeIn("slow");

    aula+=1;
    if ( aula == 5 ) {
        aula=1;
    }
    }, 5000); // refresh every 5000 milliseconds
//alert("yes");
</script>

<h3 id="idaula">init...</h3>
<table border="0">
    <tr>   
        <th>HORA</th>
        <th>LUNES</th>
        <th>MARTES</th>
        <th>MIERCOLES</th>
        <th>JUEVES</th>
        <th>VIERNES</th>
    </tr>

    <tr >
        <td>08:00</td>
        <td id="lunes0800"></td>
        <td id="martes0800"></td>
        <td id="miercoles0800"></td>
        <td id="jueves0800"></td>
        <td id="viernes0800"></td>
    </tr>

    <tr >
        <td>08:30</td>
        <td id="lunes0830"></td>
        <td id="martes0830"></td>
        <td id="miercoles0830"></td>
        <td id="jueves0830"></td>
        <td id="viernes0830"></td>
    </tr>
    <tr >
        <td>09:00</td>
        <td id="lunes0900"></td>
        <td id="martes0900"></td>
        <td id="miercoles0900"></td>
        <td id="jueves0900"></td>
        <td id="viernes0900"></td>
    </tr>
    <tr >
        <td>09:30</td>
        <td id="lunes0930"></td>
        <td id="martes0930"></td>
        <td id="miercoles0930"></td>
        <td id="jueves0930"></td>
        <td id="viernes0930"></td>
    </tr>
    <tr >
        <td>10:00</td>
        <td id="lunes1000"></td>
        <td id="martes1000"></td>
        <td id="miercoles1000"></td>
        <td id="jueves1000"></td>
        <td id="viernes1000"></td>
    </tr>

</table>


</body>
</html>