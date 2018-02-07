<?php

$standardcolumn = array_column($standard, 'Derivative_Standard_Equipment_Category_Description');
$standardvalues = array_column($standard, 'Derivative_Standard_Equipment_Description');

// $found_key = array_search('EC Urban (mpg)', $findcolumn);
// echo $found_key;

// echo '<pre>';
// var_dump($specvalues);
// echo '</pre>';
// $specvalues[array_search('EC Urban (mpg)', $findcolumn)]
?>


<div id="horizontalTab">
    <ul class="resp-tabs-list cpost_spctbs">
        <li>Standard Equipment</li>
        <li>Technical Specifications</li>
        <li>Optional Extras</li>

    </ul>
    <div class="resp-tabs-container">
        <div>
            <div class="tc-accordion tc-accordion-style1" id="accordion1">
                <?php
                if (is_array($standard)){
                 ?>
                <div class="panel">
                    <h4 class="acdn-title">
                        <a data-toggle="collapse" data-parent="#accordion1" data-target="#collapse4" class="collapsed"><?= $standard[0]["Derivative_Standard_Equipment_Category_Description"] ?></a>
                    </h4>
                    <div id="collapse4" class="panel-collapse collapse in">
                        <div class="acdn-body">
                            <ul>
                <?php
                    for ($i = 0; $i < count($standard); $i++) {
                       echo "<li>".$standard[$i]["Derivative_Standard_Equipment_Description"]." </li>";
                            if (($i+1)<count($standard)) {
                                   if ($standard[$i]["Derivative_Standard_Equipment_Category_Description"]!==$standard[$i+1]["Derivative_Standard_Equipment_Category_Description"]  ){
                                       ?>
                                       </ul>
                                       </div>
                                       </div>
                                       </div>
                                       <div class="panel">
                                           <h4 class="acdn-title">
                                               <a data-toggle="collapse" data-parent="#accordion1" data-target="#collapse<?=$i+4 ?>"><?=$standard[$i+1]["Derivative_Standard_Equipment_Category_Description"]?></a>
                                           </h4>
                                           <div id="collapse<?=$i+4 ?>" class="panel-collapse collapse">
                                               <div class="acdn-body">

                                       <?php
                                   }
                            }else{
                                       ?>
                                        </ul>
                                       </div>
                                    </div>
                                </div>
                            <?php

                            }
                    }
                }
                ?>
            </div>

        </div><!--tab-div-->

        <div>
            <div class="tc-accordion tc-accordion-style1" id="accordion2">
                <?php
                if (is_array($specs)){
                    ?>
                    <div class="panel">
                    <h4 class="acdn-title">
                        <a data-toggle="collapse" data-parent="#accordion2" data-target="#collapse24" class="collapsed"><?= $specs[0]["Technical_Category_Description"] ?></a>
                    </h4>
                    <div id="collapse24" class="panel-collapse collapse in">
                    <div class="acdn-body">
                    <ul>
                    <?php
                    for ($i = 0; $i < count($specs); $i++) {
                        echo "<li>".$specs[$i]["Technical_Long_Description"]." ".$specs[$i]["Technical_Value"]." </li>";
                        if (($i+1)<count($specs)) {
                            if ($specs[$i]["Technical_Category_Description"]!==$specs[$i+1]["Technical_Category_Description"]  ){
                                ?>
                                </ul>
                                </div>
                                </div>
                                </div>
                                <div class="panel">
                                <h4 class="acdn-title">
                                    <a data-toggle="collapse" data-parent="#accordion1" data-target="#collapse2<?=$i+4 ?>"><?=$specs[$i+1]["Technical_Category_Description"]?></a>
                                </h4>
                                <div id="collapse2<?=$i+4 ?>" class="panel-collapse collapse">
                                <div class="acdn-body">

                                <?php
                            }
                        }else{
                            ?>
                            </ul>
                            </div>
                            </div>
                            </div>
                            <?php

                        }
                    }
                }
                ?>
            </div>
        </div><!--tab-div-->

        <div><div class="tc-accordion tc-accordion-style1" id="accordion3">
                <?php
                if (count($options, COUNT_RECURSIVE)>0){
                    ?>
                    <div class="panel">
                    <h4 class="acdn-title">
                        <a data-toggle="collapse" data-parent="#accordion3" data-target="#collapse34" class="collapsed"><?= $options[0]["Derivative_Option_Category_Description"] ?></a>
                    </h4>
                    <div id="collapse34" class="panel-collapse collapse in">
                    <div class="acdn-body">
                    <ul>
                    <?php
                    for ($i = 0; $i < count($options); $i++) {
                        echo "<li><label><input type=\"checkbox\" id=\"cb_.$i.\" value=\"".$options[$i]["Derivative_Option_Basic_Price"]."\"><span>".$options[$i]["Derivative_Option_Description"]." - £".$options[$i]["Derivative_Option_Basic_Price"]."</span></label>  </li>";
                        if (($i+1)<count($options)) {
                            if ($options[$i]["Derivative_Option_Category_Description"]!==$options[$i+1]["Derivative_Option_Category_Description"]  ){
                                ?>
                                </ul>
                                </div>
                                </div>
                                </div>
                                <div class="panel">
                                <h4 class="acdn-title">
                                    <a data-toggle="collapse" data-parent="#accordion1" data-target="#collapse3<?=$i+4 ?>"><?=$options[$i+1]["Derivative_Option_Category_Description"]?></a>
                                </h4>
                                <div id="collapse3<?=$i+4 ?>" class="panel-collapse collapse">
                                <div class="acdn-body">

                                <?php
                            }
                        }else{
                            ?>
                            </ul>
                            </div>
                            </div>
                            </div>
                            <?php

                        }
                    }
                }
                ?>
            </div>
        </div><!--tab-div-->
    </div><!--resp-tabs-container-->
    <div class="clearfix"></div>
</div>
