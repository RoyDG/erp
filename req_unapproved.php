<?php
require_once "../../../assets/template/layout.top.php";
?>
<!-- Datatables -->

<!-- page content -->

<div class="right_col" role="main"> <!-- Must not delete it ,this is main design header-->

    <div class="">

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="openerp openerp_webclient_container">

                    <div class="x_content">

                        <!--edit form -->

                        <style>
                            .button {

                                position: relative;

                                background-color: #04AA6D;

                                border: none;

                                font-size: 28px;

                                color: #FFFFFF;

                                padding: 20px;

                                width: 200px;

                                text-align: center;

                                -webkit-transition-duration: 0.4s;
                                /* Safari */

                                transition-duration: 0.4s;

                                text-decoration: none;

                                overflow: hidden;

                                cursor: pointer;

                            }

                            .button:after {

                                content: "";

                                background: #90EE90;

                                display: block;

                                position: absolute;

                                padding-top: 300%;

                                padding-left: 350%;

                                margin-left: -20px !important;

                                margin-top: -120%;

                                opacity: 0;

                                transition: all 0.8s
                            }

                            .button:active:after {

                                padding: 0;

                                margin: 0;

                                opacity: 1;

                                transition: 0s
                            }

                            tr:nth-child(odd) {
                                background-color: #fafafa !important;

                            }

                            tr:nth-child(Even) {}
                        </style>

                        <form action="?" method="post">


                            <table width="100%" border="0" class="table table-bordered table-sm">
                                <thead>

                                    <tr>
                                        <th colspan="4" class="text-center bg-titel bold pt-2 pb-2">Select Options</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                </tfoot>
                                <tbody>

                                    <tr>
                                        <td align="right">&nbsp;</td>
                                        <td align="right">
                                            <div align="right"><strong>Job Location : </strong></div>
                                        </td>
                                        <td><select name="job_location" class="form-control" id="job_location">
                                                <option></option>
                                                <? foreign_relation('project', 'PROJECT_ID', 'PROJECT_DESC', $_POST['job_location'], '1') ?>
                                            </select>
                                        </td>
                                        <td>&nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td align="right">&nbsp;</td>
                                        <td align="right">
                                            <div align="right"><strong>department : </strong></div>
                                        </td>
                                        <td> <select name="department" class="form-control" id="department">
                                                <option></option>

                                                <? foreign_relation('department', 'DEPT_ID', 'DEPT_DESC', $_POST['department'], ' 1 order by DEPT_DESC'); ?>
                                            </select></td>
                                        <td>&nbsp;</td>
                                    </tr>

                                    <br />
                                    <tr>
                                        <td colspan="4" align="center" style="text-align: right">
                                            <div align="center">

                                                <input name="create" id="create" value="SHOW EMPLOYEE" type="submit" class="btn1 btn1-bg-submit">
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

</div>


<?

$main_content = ob_get_contents();
ob_end_clean();
include("../../template/main_layout.php");

?>