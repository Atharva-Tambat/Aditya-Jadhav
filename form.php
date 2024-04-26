<?php
require 'config.php';

if (isset($_POST['submit'])) {


    $UMRM = $_POST['UMRN'];
  
    $sponser_bank = $_POST['sponser_bank'];
    $utility_code = $_POST['utility_code'];
    $tick = isset($_POST['tick']) ? $_POST['tick'] : "";
    $debit = isset($_POST['debit']) ? $_POST['debit'] : "";
    $accno = $_POST['accno'];
    $bank = $_POST['bank'];
    $ifsc = $_POST['ifsc'];
    $micr = $_POST['micr'];
    $amt = $_POST['amt'];
    $amtno = $_POST['amtno'];
    $frequency = isset($_POST['frequency']) ? $_POST['frequency'] : "";
    $deptt = isset($_POST['deptt']) ? $_POST['deptt'] : "";
    $ref1 = $_POST['ref1'];
    $phnno = $_POST['phnno'];
    $ref2 = $_POST['ref2'];
    $email = $_POST['email'];
    $from = $_POST['from'];
    $to = $_POST['to'];
    $inp1 = $_POST['inp1'];
    $inp2 = $_POST['inp2'];
    $inp3 = $_POST['inp3'];
    $inp4 = $_POST['inp4'];
    $inp5 = $_POST['inp5'];
    $inp6 = $_POST['inp6'];

    $query = "INSERT INTO users VALUES('','$sponser_bank','$utility_code','$tick','$debit','$accno','$bank','$ifsc','$micr','$amt','$amtno','$frequency','$deptt','$ref1','$phnno','$ref2','$email','$from','$to','$inp1','$inp2','$inp3','$inp4','$inp5',,'$inp6')";
            mysqli_query($conn, $query);

    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
</head>
<body>
    <div class="header">
        <h1>ICIC Home finance</h1>
    </div>
    <form action="" method="post">
       <div class="container"> 
        <div class="form-control">
            <div class="form-group">
                <label for="UMRN">UMRN</label>
                <input type="text" name="UMRN">
            </div>

            <div class="form-group">
                <label for="sponser_bank ">Sponser Bank Code</label>
                <input type="text" name="sponser_bank" value="ICICTREA00">
            </div>

            <div class="form-group">
                <label for="utility_code ">Utility Code</label>
                <input type="text" name="utility_code">
            </div>

            <div class="form-group">
                <select name="tick" id="">Tick</select>
                <option value="Create">Create</option>
                <option value="Modify">Modify</option>
                <option value="Cancel">Cancel</option>         
                
                <p>I/We here by authorize <span>ICIC HOME FINANCE COMPANY LIMITED</span>  </p>
                <span class="form-group">
                select name="debit" >to debit</select>
                <option value="SB">SB</option>
                <option value="CA">CA</option>
                <option value="CC">CC</option> 
                <option value="SB_NRE">SB_NRE</option> 
                <option value="SB_NRO">SB_NRO</option> 
                <option value="other">other</option> 
                </span>
            </div>

            <div class="row">
            <div class="form-group mod-span-3">
                <label for="accno ">Bank acc number</label>
                <input type="text" name="accno">
            </div>

            <div class="form-group mod-span-3">
                <label for="bank ">Bank</label>
                <input type="text" name="bank">
            </div>

            <div class="form-group mod-span-3">
                <label for="ifsc ">IFSC</label>
                <input type="text" name="ifsc">
            </div>

            <div class="form-group mod-span-3">
                <label for="micr ">MICR</label>
                <input type="text" name="micr">
            </div>
            </div>
            <div class="row">
            <div class="form-group mod-span-3">
                <label for="amt ">Amount of Rupees</label>
                <input type="text" name="amt">
            </div>

            <div class="form-group mod-span-3">
                <label for="amtno ">In Number</label>
                <input type="text" name="amtno">
            </div>
            </div>

            <div class="form-group mod-span-3">
            <select name="frequency" value="asnwhen">Frequnecy</select>
                <option value="Mthly">Mthly</option>
                <option value="Qtly">Qtly</option>
                <option value="H-Yrly">H-Yrly</option>
                <option value="asnwhen">As & when presented</option>   
            </div>

            <div class="form-group">
            <select name="deptt" >Frequnecy</select>
                <option value="Fixed Amount">Fixed Amount</option>
                <option value="Macimum Amount">Macimum Amount</option>
            </div>

            <div class="row">
                <div class="form-group mod-span-2">
                <label for="ref1 ">Reference 1</label>
                <input type="text" name="ref1">
                </div>

                <div class="form-group">
                <label for="phnno mod-span-2">Phone Number</label>
                <input type="tel" name="phnno">
                </div>
            </div>

            <div class="row">
                <div class="form-group mod-span-2">
                <label for="ref2 ">Reference 2</label>
                <input type="text" name="ref2">
                </div>

                <div class="form-group">
                <label for="email mod-span-2">Phone Number</label>
                <input type="email" name="email">
                </div>
            </div>

            <div class="comment">
                <p>I agree for the debate of mandate processing charges by the bank whom  I am authorizing to debit my account as per latest schedule of charges of the bank</p>
            </div>

            <div class="form-group">
                <div class="period">
                    <label for="from">From</label>
                    <input type="date" name="from" >
                </div>

                <div class="period">
                <label for="to">To</label>
                    <input type="date" name="to" >
                </div>
            </div>

            <div class="form-group">
                <label for="inp1 ">1.</label>
                <input type="text" name="inp1" >
            </div>

            <div class="form-group">
                <label for="inp2 ">2.</label>
                <input type="text" name="inp2" >
            </div>

            <div class="form-group">
                <label for="inp3 ">3.</label>
                <input type="text" name="inp3" >
            </div>

            <div class="form-group">
                <label for="inp4">4.</label>
                <input type="text" name="inp4" >
            </div>

            <div class="form-group">
                <label for="inp5">5.</label>
                <input type="text" name="inp5" >
            </div>

            <div class="form-group">
                <label for="inp6 ">6.</label>
                <input type="text" name="inp6" >
            </div>

            <div class='form-group'>
                <button type='submit' name='submit' class='btn btn-primary'>Submit</button>
            </div>
        </div>
      </div>
    </form>
</body>
</html>