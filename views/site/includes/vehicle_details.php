<div class="cpost_vdtlshead">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="vdtls_hdng"><h3>Vehicle details </h3></div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="vdtls_dbtn"><button  type="submit">Download Spec sheet</button></div>
        </div>
    </div>
</div><!--cpost_vdtlshead-->
<?php

$findcolumn = array_column($specs, 'Technical_Long_Description');
$specvalues = array_column($specs, 'Technical_Value');
// $found_key = array_search('EC Urban (mpg)', $findcolumn);
// echo $found_key;

// echo '<pre>';
// var_dump($specvalues);
// echo '</pre>';
?>

<div class="cpost_speclist">

    <ul>

        <li>
            <figure><img src="/images/icons/MPG.svg"></figure>
            <h4>MPG</h4>
            <h5><?= $specvalues[array_search('EC Urban (mpg)', $findcolumn)] ?> - <?= $specvalues[array_search('EC Extra Urban (mpg)', $findcolumn)] ?></h5>
        </li>
        <li>
            <figure><img src="/images/icons/transmission.svg"></figure>
            <h4>Transmission</h4>
            <h5><?=$content["Derivative_Transmission"] ?></h5>
        </li>

        <li>
            <figure><img src="/images/icons/max-occupancy.svg"></figure>
            <h4>Max. occupancy</h4>
            <h5><?= $specvalues[array_search('No. of Seats', $findcolumn)] ?></h5>
        </li>

        <li>
            <figure><img src="/images/icons/fuel-typecp.svg"></figure>
            <h4>Fuel type</h4>
            <h5><?=$content["Derivative_Fuel_Type"] ?></h5>
        </li>
        <li>
            <figure><img src="/images/icons/Insurance-group.svg"></figure>
            <h4>Insurance group</h4>
            <h5><?= $specvalues[array_search('Insurance Group 1 - 50 Effective January 07', $findcolumn)] ?>  </h5>
        </li>
        <li>
            <figure><img src="/images/icons/CO2.svg"></figure>
            <h4>Co2</h4>
            <h5><?= $specvalues[array_search('CO2', $findcolumn)] ?> g/km</h5>
        </li>

        <li>
            <figure><img src="/images/icons/piggy-bank.svg"></figure>
            <h4>Bik tax (20%40%)</h4>
            <h5>£35.47 / £70.93 p/m</h5>
        </li>

        <li>
            <figure><img src="/images/icons/0-60.svg"></figure>
            <h4>0 - 62</h4>
            <h5><?= $specvalues[array_search('0 to 62 mph (secs)', $findcolumn)] ?> seconds</h5>
        </li>
    </ul>
    <div class="clearfix"></div>
</div>