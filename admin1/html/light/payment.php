<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");
include('connection.php');
session_start();
// following files need to be included
require_once("../../../PaytmKit/lib/config_paytm.php");
require_once("../../../PaytmKit/lib/encdec_paytm.php");

$ORDER_ID = "";
$requestParamList = array();
$responseParamList = array();

if (isset($_POST["ORDER_ID"]) && $_POST["ORDER_ID"] != "") {

    // In Test Page, we are taking parameters from POST request. In actual implementation these can be collected from session or DB. 
    $ORDER_ID = $_POST["ORDER_ID"];

    // Create an array having all required parameters for status query.
    $requestParamList = array("MID" => PAYTM_MERCHANT_MID, "ORDERID" => $ORDER_ID);

    $StatusCheckSum = getChecksumFromArray($requestParamList, PAYTM_MERCHANT_KEY);

    $requestParamList['CHECKSUMHASH'] = $StatusCheckSum;

    // Call the PG's getTxnStatusNew() function for verifying the transaction status.
    $responseParamList = getTxnStatusNew($requestParamList);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>





<a href="index.php"><button class="btn btn-dark">Back</button></a>
<center>


    <form method="post" action="">
        <h2>Payment Receipt</h2>
        <table border="1">
            <tbody>
                <tr>
                    <td><label>ORDER_ID::*</label></td>
                    <td><input id="ORDER_ID" tabindex="1" maxlength="20" size="20" name="ORDER_ID" autocomplete="off"
                            value="<?php echo $ORDER_ID ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input value="View" type="submit" onclick=""></td>
                </tr>
            </tbody>
        </table>
    </form>
</center>
<br /></br />
<?php
if (isset($responseParamList) && count($responseParamList) > 0) {
?>
<h2 style=" margin-left: 750px;">Payment Receipt</h2>
<table style="border: 1px solid nopadding" border="0" id="customers">
    <tbody>
        <?php
            foreach ($responseParamList as $paramName => $paramValue) {
                // if(($paramName=="TXNID" )|| ($paramName=="ORDERID")|| ($paramName=="TXNAMOUNT")||($paramName=="STATUS" )){
            ?>

        <tr>
            <td style="border: 1px solid"><label><?php echo $paramName ?></label></td>
            <td style="border: 1px solid"><?php echo $paramValue ?></td>
        </tr>
        <?php
            }
            ?>
        <tr>
            <td>
                <button class="btn btn-primary" onclick="javascript:window.print()"><i class="icon-printer"></i>
                    Print</button>
            </td>
        </tr>
    </tbody>
</table>
<?php
}
?>



</html>