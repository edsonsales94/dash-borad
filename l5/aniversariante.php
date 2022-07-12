<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Email Confirmation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel='stylesheet' href='css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <style type="text/css">
        /**																																																			 
   * Google webfonts. Recommended to include the .woff version for cross-client compatibility.																																								 
   */
        @media screen {
            @font-face {
                font-family: "Source Sans Pro";
                font-style: normal;
                font-weight: 400;
                src: local("Source Sans Pro Regular"), local("SourceSansPro-Regular"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format("woff");
            }
            @font-face {
                font-family: "Source Sans Pro";
                font-style: normal;
                font-weight: 700;
                src: local("Source Sans Pro Bold"), local("SourceSansPro-Bold"), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format("woff");
            }
        }
        /**																																																			 
   * Avoid browser level font resizing.																																															 
   * 1. Windows Mobile																																																	 
   * 2. iOS / OSX																																																		 
   */
        body,
        table,
        td,
        a {
            -ms-text-size-adjust: 100%;
            /* 1 */
            -webkit-text-size-adjust: 100%;
            /* 2 */
        }

        /**																																																			 
   * Remove extra space added to tables and cells in Outlook.																																													 
   */
        table,
        td {
            mso-table-rspace: 0pt;
            mso-table-lspace: 0pt;
        }
        #demo-table thead {
            color: white;
            background-color: black;
        }
        #demo-table td {
            padding: 0.25rem;
            text-align: left;
            border: 1px solid #d4dadf;
            border-style: solid;
            border-width: thin;
        }
        /**																																																			 
   * Better fluid images in Internet Explorer.																																														 
   */
        img {
            -ms-interpolation-mode: bicubic;
        }
        /**																																																			 
   * Remove blue links for iOS devices.																																															 
   */
        a[x-apple-data-detectors] {
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            color: inherit !important;
            text-decoration: none !important;
        }
        /**																																																			 
   * Fix centering issues in Android 4.4.																																															 
   */
        div[style*="margin: 16px 0;"] {
            margin: 0 !important;
        }

        body {
            width: 100% !important;
            height: 100% !important;
            padding: 0 !important;
            margin: 0 !important;
            background-color: C1ECE0;
        }
        /**																																																			 
   * Collapse table borders to avoid space between cells.																																													 
   */
        table {
            border-collapse: collapse !important;
        }

        a {
            color: #1a82e2;
        }
        img {
            height: auto;
            line-height: 100%;
            text-decoration: none;
            border: 0;
            outline: none;
        }
        td .cabe-dia {
            font-weight: bold;
            border-right: 1px solid black;
            padding-bottom:5px;
			font-size: 25px;
        }
        td .cabec-nome {
            font-weight: bold;
            border-right: 1px solid black;
            padding: 0px 100px 0px 100px;
			padding-bottom:5px;
			font-size: 25px;
        }
        td .cabec-area {
            font-weight: bold;
            padding: 0px 60px 0px 60px;
			padding-bottom:16px;
			font-size: 25px;
        }
		td .setor,
		.dia-aniv,
		.nome-fun{
			font-size: 26px;
			padding-bottom:12px;
		}
        .dia-aniv,
        .nome-fun {
            border-right: 1px solid black;

        }
    </style>

<body style="background-color: #C1ECE0;">
    <!-- start body -->
    <table style="border: 1px solid #ffffff;margin-top:20px; width:60%" align='center'  cellpadding="0" cellspacing="0" >
        <!-- start logo -->
        <tr>
            <td align="left" bgcolor="#C1ECE0">

                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 100%;">
                    <tr>
                        <td align="left"align='right' valign="top" style="padding: 24px 20px 0; font-family:  Source Sans Pro , Helvetica, Arial, sans-serif;">
							<td  align="left" valign="top"style="padding: 20px 35px 0 0; font-family:  Source Sans Pro , Helvetica, Arial, sans-serif;">
								<p style="font-size: 50px; font-weight: bold;margin: 0; ">ANIVERSARIANTES </p>
								<p style="font-size: 40px; margin-top: 0;margin-bottom: 10px;margin: 0; ">DA SEMANA</p>
							</td>
                        <td align="right" valign="top" style="padding: 25px 20px;">
                            <img width="160" src="img/logogamapreto.png" alt="logoGama">
                        </td>
						<td align='right' style="width: 20%; text-align: center; padding:10px 0px 20px 0;">
							<img width="100" src="img/logopessoa.png" alt="logoCult">
						</td>	
            </td>
        </tr>
    </table>

    <!-- start hero -->
    <tr>
        <td align="center" bgcolor="#C1ECE0">
 
            <table border="0" cellpadding="0" cellspacing="0" style="max-width: 90%;">
                <tr>
                    <td align="left" bgcolor="#ff0000"
                    style=" width: 2000px; border-top: 3px solid #ff0000;">
                    </td>
                </tr>
            </table>

        </td>
    </tr>
    <!-- end hero -->
    <!-- start copy block -->
    <tr>
        <td align="center" bgcolor="#C1ECE0">
            <table align="center " border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width:90%;">

                <!-- start copy -->
                <tr>
                    <td align="center" bgcolor="#C1ECE0" width="100" height='100' style="padding: 10px 14px 0px 14px; font-family:  Source Sans Pro , Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
                        <table  align="center " border="0" cellpadding="0" cellspacing="0" width="100%"">
                            <thead align="center ">
                                <tr align="center " >
                                    <td class="cabe-dia ">Dia</td>
                                    <td class="cabec-nome ">Nome</td>
                                    <td class="cabec-area ">Area/Dpto.</td>
                                </tr>
								
								<div>
									<main role="main" class="content">
									<?php
										include 'listafunc.php';
									?>
									</main>
								</div>
								
                            </thead>
                        </table>																																																 
                    </td>																																																	 
                </tr>																																																	 
                <!-- end copy -->																																																 
                                                                                                                                                                                                             
            </table>																																																	 
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 100%; margin-bottom:10px;">																																							 
                    <td style="width: 100%; margin: 0; ">
                        <p align='center' style="font-size: 40px; ">Desejamos a todos muita saúde e felicidade.</p>                        
                    </td>
                    
                </table>																																																	 																																																 
        </td>																																																		 
    </tr>																																																			 
    <!-- end copy block -->																																																 
                                                                                                                                                                                                             
    <!-- start footer -->																																																	 
    <tr>																																																			 																																																	 
    <!-- end footer -->																																																	                                                                                                                                                                                                         
</table>																																																			 
<!-- end body -->																																																		 
                                                                                                                                                                                                             
</body>																																																			 
                                                                                                                                                                                                             
</html>