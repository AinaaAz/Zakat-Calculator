<!DOCTYPE html> 
<html lang="en"> 
    <head>
        <title>ZAKAT CALCULATOR</title>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=devide-width, initial-scale=1, user-scalable=yes">
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>

     <?php
        // Check if the "Calculate" button was pressed, then get the data from inputs
        if (isset($_POST['num1']) && isset($_POST['num2'])&& isset($_POST['num3'])&& isset($_POST['num4'])
			&& isset($_POST['num6'])&& isset($_POST['num7'])&& isset($_POST['num8'])
		    && isset($_POST['num9'])&& isset($_POST['num10'])&& isset($_POST['num11'])&& isset($_POST['num12'])) {
            $num1 = (float) $_POST['num1'] * 12;
			$num2 = (float) $_POST['num2'] * 12;
			$num3 = (float) $_POST['num3'];
			$num4 = (float) $_POST['num4'];
			$num6 = (float) $_POST['num6'];
			$num7 = (float) $_POST['num7'] * 5000;
			$num8 = (float) $_POST['num8'] * 2000;
			$num9 = (float) $_POST['num9'] * 5000;
			$num10 = (float) $_POST['num10'];
			$num11 = (float) $_POST['num11'];
			$num12 = (float) $_POST['num12'] * 2000;
        } else {
            $num1 = 0;
			$num2 = 0;
			$num3 = 0;
			$num4 = 0;
			$num6 = 0;
			$num7 = 0;
			$num8 = 0;
			$num9 = 0;
			$num10 = 0;
			$num11 = 0;
			$num12 = 0;
			     
        }
        // Make the calculations
		$totalyearlyinc = round($num1 + $num2 + $num3 + $num4, 2);
		$incomezakat = round ($totalyearlyinc - ($num6 + $num7 + $num8 + $num9 + $num10 + $num11 + $num12), 2);
		$zakatyearly = round($incomezakat * 0.025, 2);
        $zakatmonthly = round($zakatyearly / 12, 2);
    ?>
    
	<div class="content">
        <h1>ZAKAT CALCULATOR</h1>
        <form action="" method="POST" id="myForm">
		
		<h2>INCOME</h2> 
            <label for="m.salary">Monthly Salary</label><br>
            <input type="number" name="num1" placeholder="RM.."><br><br>
			<label for="rental">Rental</label><br>
            <input type="number" name="num2" placeholder="RM.."><br><br>
			<label for="pensions">Pensions</label><br>
            <input type="number" name="num3" placeholder="RM.."><br><br>
			<label for="others">Others</label><br>
            <input type="number" name="num4" placeholder="RM.."><br><br>

       
	   <h2>DEDUCTION</h2>
		
            <label for="Self">Self Deduction</label><br>
            <input type="number" name="num6" min-"12000" max-"12000" readonly value="12000" placeholder="RM.."><br><br>

            <label for="Wife(s)">Number of Wife(s) (RM5,000 per person)</label><br>
            <input type="number" name="num7"><br><br>

            <label for="Children <18">Number of Children below 18 (RM2,000 per children)</label><br>
            <input type="number" name="num8"><br><br>

            <label for="Children >18">Number of Children over 18 (Studying in University)(RM5,000 per children)</label><br>
            <input type="number" name="num9"><br><br>

            <label for="Parents Yearly Contribution">Parents Yearly Contribution</label><br>
            <input type="number" name="num10" placeholder="RM.."><br><br>

            <label for="Total EPF">Total EPF</label><br>
            <input type="number" name="num11" placeholder="RM.."><br><br>

            <label for="Self Education Year">Number of Year (Self Education)(max RM 2,000 per year)</label><br>
            <input type="number" name="num12" min="0" max="2000"><br><br>
        
            <input type="submit" value="Calculate" id="calculate">
        
		</form>
        
		<div id="summary">
           
            <p>Total Yearly Income: RM
                <span id="totalyearlyinc">
                    <?=$totalyearlyinc ?>
					
			<p>Income Entitled For Zakat: RM
                <span id="incomezakat">
                    <?=$incomezakat ?>
                </span>
            </p>
			<p>Zakat (Yearly): RM
                <span id="zakatyearly">
                    <?=$zakatyearly ?>
                </span>
            </p>
            <p>Zakat (Monthly): RM
                <span id="zakatmonthly">
                    <?=$zakatmonthly ?> 
                </span>
            </p>
        </div>
    </div>
</body>
</html>