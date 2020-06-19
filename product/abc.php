  <div class="tab-pane visible" id="specifications">                
                  <h2>Specifications</h2>
                  <hr>
                  <div class="fancy-collapse-panel">
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <?php    
                $sql = mysqli_query($conn, "SELECT heading,label,des,css_id FROM specification WHERE p_id='11_1'");
                            while ($row = mysqli_fetch_assoc($sql)){    
                            $heading=$row['heading'];
                            $label=$row['label'];     
                            $des=$row['des'];
                               $css_id=$row['css_id'];
                            ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading<?php echo"".$row['css_id'];."" ?> ">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo"".$row['css_id'];."" ?> aria-expanded="true" aria-controls="collapse<?php echo"".$row['css_id'];."" ?> "><?php echo"".$row['heading'];."" ?>                                   </a>
                                </h4>
                            </div>
                            <div id="collapse<?php echo"".$row['css_id'];."" ?> " class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading<?php echo"".$row['css_id'];."" ?> ">
                                <div class="">
                                     <table class="table  table-striped table-specification">
                                                                             <tr>
                                         <td width="40%" class="td-specification"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> <?php echo"".$row['label'];."" ?> </td>
                                         <td width="60%"><p><?php echo"".$row['css_id'];."" ?> <br></p></td>
                                       </tr>
                                                                              
                                     </table>
                                </div>
                            </div>
                        </div>
                      

                   
                                                 <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading196">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse196" aria-expanded="false" aria-controls="collapse196">Processor                                    </a>
                                </h4>
                            </div>
                            <div id="collapse196" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading196">
                                <div class="">
                                    <table class="table  table-striped table-specification">
                                                                             <tr>
                                         <td width="40%" class="td-specification"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Processor</td>
                                         <td width="60%"><p>Intel® Atom x5-Z8300<br></p></td>
                                       </tr>
                                                                              
                                     </table>
                                </div>
                            </div>
                        </div>
                                                 <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading197">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse197" aria-expanded="false" aria-controls="collapse197">RAM                                    </a>
                                </h4>
                            </div>
                            <div id="collapse197" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading197">
                                <div class="">
                                    <table class="table  table-striped table-specification">
                                                                             <tr>
                                         <td width="40%" class="td-specification"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> RAM</td>
                                         <td width="60%"><p>2 GB DDR3 LRS<br></p></td>
                                       </tr>
                                                                              
                                     </table>
                                </div>
                            </div>
                        </div>
                                                 <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading198">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse198" aria-expanded="false" aria-controls="collapse198">HDD                                    </a>
                                </h4>
                            </div>
                            <div id="collapse198" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading198">
                                <div class="">
                                    <table class="table  table-striped table-specification">
                                                                             <tr>
                                         <td width="40%" class="td-specification"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> HDD</td>
                                         <td width="60%"><p>32 GB eMMC<br></p></td>
                                       </tr>
                                                                              
                                     </table>
                                </div>
                            </div>
                        </div>
                                                 <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading199">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse199" aria-expanded="false" aria-controls="collapse199">Resolution                                    </a>
                                </h4>
                            </div>
                            <div id="collapse199" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading199">
                                <div class="">
                                    <table class="table  table-striped table-specification">
                                                                             <tr>
                                         <td width="40%" class="td-specification"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Resolution</td>
                                         <td width="60%"><p>1.280 x 800 Pixel<br></p></td>
                                       </tr>
                                                                              
                                     </table>
                                </div>
                            </div>
                        </div>
                                                 <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading200">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse200" aria-expanded="false" aria-controls="collapse200">Compatible OR                                    </a>
                                </h4>
                            </div>
                            <div id="collapse200" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading200">
                                <div class="">
                                    <table class="table  table-striped table-specification">
                                                                             <tr>
                                         <td width="40%" class="td-specification"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Compatible OR</td>
                                         <td width="60%"><p>Windows® 10 not included delivery<br></p></td>
                                       </tr>
                                                                              
                                     </table>
                                </div>
                            </div>
                        </div>
                                                 <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading201">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse201" aria-expanded="false" aria-controls="collapse201">Interfaces                                    </a>
                                </h4>
                            </div>
                            <div id="collapse201" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading201">
                                <div class="">
                                    <table class="table  table-striped table-specification">
                                                                             <tr>
                                         <td width="40%" class="td-specification"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Interfaces</td>
                                         <td width="60%"><table style="color: rgb(95, 114, 133); text-transform: none; text-indent: 0px; letter-spacing: normal; font-family: Arial,helvetica,clean,sans-serif; font-size: 14px; font-style: normal; word-spacing: 0px; white-space: normal; border-collapse: separate; box-sizing: border-box; border-spacing: 1px; orphans: 2; widows: 2; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);"><tbody style="box-sizing: border-box;"><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0.3125rem 0.625rem; background: rgb(255, 255, 255); color: rgb(95, 114, 133); border: 1px solid rgb(255, 255, 255);"><table style="box-sizing: border-box; border-collapse: separate; border-spacing: 1px; color: rgb(95, 114, 133); font-family: Arial, helvetica, clean, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial;"><tbody style="box-sizing: border-box;"><tr style="box-sizing: border-box;"><td style="box-sizing: border-box; padding: 0.3125rem 0.625rem; background: rgb(255, 255, 255); color: rgb(95, 114, 133); border: 1px solid rgb(255, 255, 255);">Micro USB x1, Combo Audio-jack, Micro SD, Micro SIM, Micro HDMI</td></tr></tbody></table></td><td style="box-sizing: border-box; padding: 0.3125rem 0.625rem; background: rgb(255, 255, 255); color: rgb(95, 114, 133); border: 1px solid rgb(255, 255, 255);"><b><br></b></td></tr></tbody></table><p><b></b><i></i><u></u><sub></sub><sup></sup><strike></strike><b></b><br></p></td>
                                       </tr>
                                                                              
                                     </table>
                                </div>
                            </div>
                        </div>
                                                 <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="heading202">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse202" aria-expanded="false" aria-controls="collapse202">Keyboard                                    </a>
                                </h4>
                            </div>
                            <div id="collapse202" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading202">
                                <div class="">
                                    <table class="table  table-striped table-specification">
                                                                             <tr>
                                         <td width="40%" class="td-specification"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Keyboard</td>
                                         <td width="60%"><p>Keyboard docking GERMAN + Clickpad<br></p></td>
                                       </tr>
                                                                              
                                     </table>
                                </div>
                            </div>
                        </div>
                         
                        
                    </div>
                </div>
              </div>