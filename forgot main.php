<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\OAuth;
//Alias the League Google OAuth2 provider class
use League\OAuth2\Client\Provider\Google;

require 'mail/vendor/autoload.php';
date_default_timezone_set('Etc/UTC');
session_start();
?>


<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>gaming</title>
  <link rel="icon" href="img/Gaming Ninja Logo.png">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- animate CSS -->
  <link rel="stylesheet" href="css/animate.css">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/all.css">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/themify-icons.css">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="css/magnific-popup.css">
  <!-- swiper CSS -->
  <link rel="stylesheet" href="css/slick.css">
  <!-- style CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
</head>

<body>

  <?php

  include 'dbcon.php';
  if (isset($_POST['submit'])) {
    $email_u      =  mysqli_real_escape_string($con, $_POST['email']);

    $email_search = " select * from registration where email = '$email_u' ";
    $query = mysqli_query($con, $email_search);
    $emailcount = mysqli_num_rows($query);
    // $_SESSION['count'] = -1;

    if ($emailcount) {
      $_SESSION['count'] = $emailcount;
      $_SESSION['email_for_forget'] = $email_u;
      $_SESSION['Confidential_Code'] = rand(1005, 9000);
      $USER_CODE_CONFIDENTIAL = $_SESSION['Confidential_Code'];
      // Sending Email Part

      $email_pass = mysqli_fetch_assoc($query);
      $username_of_sender = $email_pass['username'];
      $to_email   = "$email_u";
      $subject    = "Forgot Password Code";
      $body       = '

    <!DOCTYPE HTML
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
  xmlns:o="urn:schemas-microsoft-com:office:office">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="x-apple-disable-message-reformatting">
  <meta http-equiv="X-UA-Compatible" content="IE=edge"><!--<![endif]-->
  <title></title>

  <style type="text/css">
    @media only screen and (min-width: 620px) {
      .u-row {
        width: 600px !important;
      }

      .u-row .u-col {
        vertical-align: top;
      }

      .u-row .u-col-50 {
        width: 300px !important;
      }

      .u-row .u-col-100 {
        width: 600px !important;
      }
    }

    @media (max-width: 620px) {
      .u-row-container {
        max-width: 100% !important;
        padding-left: 0px !important;
        padding-right: 0px !important;
      }

      .u-row .u-col {
        min-width: 320px !important;
        max-width: 100% !important;
        display: block !important;
      }

      .u-row {
        width: 100% !important;
      }

      .u-col {
        width: 100% !important;
      }

      .u-col>div {
        margin: 0 auto;
      }
    }

    body {
      margin: 0;
      padding: 0;
    }

    table,
    tr,
    td {
      vertical-align: top;
      border-collapse: collapse;
    }

    p {
      margin: 0;
    }

    .ie-container table,
    .mso-container table {
      table-layout: fixed;
    }

    * {
      line-height: inherit;
    }

    a[x-apple-data-detectors=\'true\'] {
      color: inherit !important;
      text-decoration: none !important;
    }

    table,
    td {
      color: #000000;
    }

    #u_body a {
      color: #161a39;
      text-decoration: underline;
    }
  </style>



  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet" type="text/css">

</head>

<body class="clean-body u_body"
  style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #f9f9f9;color: #000000">
  <table id="u_body"
    style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #f9f9f9;width:100%"
    cellpadding="0" cellspacing="0">
    <tbody>
      <tr style="vertical-align: top">
        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">



          <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9">
            <div class="u-row"
              style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;">
              <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">



                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="height: 100%;width: 100% !important;">

                    <div
                      style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:15px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #f9f9f9;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                <tbody>
                                  <tr style="vertical-align: top">
                                    <td
                                      style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                      <span>&#160;</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
              <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="height: 100%;width: 100% !important;">
                    <div
                      style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="padding-right: 0px;padding-left: 0px;" align="center">

                                    <img align="center" border="0" src="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png" alt="Image"
                                      title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 19%;
                                      max-width: 168.2px;border-radius: 10px;" width="168.2" />

                                  </td>
                                </tr>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>





          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #161a39;">
              <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">

                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="height: 100%;width: 100% !important;">
                    <div
                      style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:35px 10px 10px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="padding-right: 0px;padding-left: 0px;" align="center">

                                    <img align="center" border="0" src="https://cdn-icons-png.flaticon.com/512/6117/6117000.png" alt="Image" title="Image"
                                      style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 10%;max-width: 58px; background: white;
    border-radius: 10%;"
                                      width="58" />

                                  </td>
                                </tr>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:0px 10px 30px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <div style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 140%; text-align: center;"><span
                                    style="font-size: 28px; line-height: 39.2px; color: #ffffff; font-family: Lato, sans-serif;">Please
                                    reset your password </span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>





          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
              <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="height: 100%;width: 100% !important;">
                    <div
                      style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:40px 40px 30px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <div style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 140%;"><span
                                    style="font-size: 18px; line-height: 25.2px; color: #666666;">Hello ' . $username_of_sender . ',</span></p>
                                <p style="font-size: 14px; line-height: 140%;">&nbsp;</p>
                                <p style="font-size: 14px; line-height: 140%;"><span
                                    style="font-size: 18px; line-height: 25.2px; color: #666666;">We have sent you this
                                    email in response to your request to reset your password on Gaming Ninja.</span></p>
                                <p style="font-size: 14px; line-height: 140%;">&nbsp;</p>
                                <p style="font-size: 14px; line-height: 140%;"><span
                                    style="font-size: 18px; line-height: 25.2px; color: #666666;">To reset your
                                    password, please Enter the Code below: </span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:0px 40px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <div align="left">
                                <a href="" target="_blank" class="v-button"
                                  style="box-sizing: border-box;display: inline-block;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #18163a; border-radius: 1px;-webkit-border-radius: 1px; -moz-border-radius: 1px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;font-size: 14px;">
                                  <span style="display:block;padding:15px 40px;line-height:120%;"><span
                                      style="font-size: 18px; line-height: 21.6px;">' . $USER_CODE_CONFIDENTIAL . '</span></span>
                                </a>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:40px 40px 30px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <div style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 140%;"><span
                                    style="color: #888888; font-size: 14px; line-height: 19.6px;"><em><span
                                        style="font-size: 16px; line-height: 22.4px;">Please ignore this email if you
                                        did not request a password change.</span></em></span><br /><span
                                    style="color: #888888; font-size: 14px; line-height: 19.6px;"><em><span
                                        style="font-size: 16px; line-height: 22.4px;">&nbsp;</span></em></span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>





          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #18163a;">
              <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">

                <div class="u-col u-col-50"
                  style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                  <div style="height: 100%;width: 100% !important;">
                    <div
                      style="box-sizing: border-box; height: 100%; padding: 20px 20px 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <div style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                <p style="font-size: 14px; line-height: 140%;"><span
                                    style="font-size: 16px; line-height: 22.4px; color: #ecf0f1;">Contact</span></p>
                                <p style="font-size: 14px; line-height: 140%;"><span
                                    style="font-size: 14px; line-height: 19.6px; color: #ecf0f1;">Gaming Ninja, Mumbai, India</span></p>
                                <p style="font-size: 14px; line-height: 140%;"><span
                                    style="font-size: 14px; line-height: 19.6px; color: #ecf0f1;">+91 9699685491 |
                                    anandjaiswar.000webhostapp.com/</span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <!--[if (!mso)&(!IE)]><!-->
                    </div><!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                <!--[if (mso)|(IE)]><td align="center" width="300" style="width: 300px;padding: 0px 0px 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                <div class="u-col u-col-50"
                  style="max-width: 320px;min-width: 300px;display: table-cell;vertical-align: top;">
                  <div style="height: 100%;width: 100% !important;">
                    <!--[if (!mso)&(!IE)]><!-->
                    <div
                      style="box-sizing: border-box; height: 100%; padding: 0px 0px 0px 20px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                      <!--<![endif]-->

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:25px 10px 10px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <div align="left">
                                <div style="display: table; max-width:187px;">
                                  <!--[if (mso)|(IE)]><table width="187" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="left"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:187px;"><tr><![endif]-->


                                  <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                    style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px">
                                    <tbody>
                                      <tr style="vertical-align: top">
                                        <td align="left" valign="middle"
                                          style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                          <a href=" " title="Facebook" target="_blank">
                                            <img src="https://cdn-icons-png.flaticon.com/512/1384/1384005.png" alt="Facebook" title="Facebook" width="32"
                                              style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important; background: white;
    border-radius: 10%;">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <!--[if (mso)|(IE)]></td><![endif]-->

                                  <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                    style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px">
                                    <tbody>
                                      <tr style="vertical-align: top">
                                        <td align="left" valign="middle"
                                          style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                          <a href=" " title="Twitter" target="_blank">
                                            <img src="https://cdn-icons-png.flaticon.com/512/25/25660.png" alt="Twitter" title="Twitter" width="32"
                                              style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important; background: white;
    border-radius: 10%;">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <!--[if (mso)|(IE)]></td><![endif]-->

                                  <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 15px;" valign="top"><![endif]-->
                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                    style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 15px">
                                    <tbody>
                                      <tr style="vertical-align: top">
                                        <td align="left" valign="middle"
                                          style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                          <a href=" " title="Instagram" target="_blank">
                                            <img src="https://cdn-icons-png.flaticon.com/512/1077/1077042.png" alt="Instagram" title="Instagram" width="32"
                                              style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important; background: white;
    border-radius: 30%;">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <!--[if (mso)|(IE)]></td><![endif]-->

                                  <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
                                  <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32"
                                    style="width: 32px !important;height: 32px !important;display: inline-block;border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                                    <tbody>
                                      <tr style="vertical-align: top">
                                        <td align="left" valign="middle"
                                          style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                          <a href=" " title="LinkedIn" target="_blank">
                                            <img src="https://cdn-icons-png.flaticon.com/512/3536/3536569.png" alt="LinkedIn" title="LinkedIn" width="32"
                                              style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important; background: white;
    border-radius: 20%;">
                                          </a>
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                  <!--[if (mso)|(IE)]></td><![endif]-->


                                  <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                </div>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:5px 10px 10px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <div style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">
                                <p style="line-height: 140%; font-size: 14px;"><span
                                    style="font-size: 14px; line-height: 19.6px;"><span
                                      style="color: #ecf0f1; font-size: 14px; line-height: 19.6px;"><span
                                        style="line-height: 19.6px; font-size: 14px;">Company &copy;&nbsp; All Rights
                                        Reserved</span></span></span></p>
                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <!--[if (!mso)&(!IE)]><!-->
                    </div><!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
              </div>
            </div>
          </div>





          <div class="u-row-container" style="padding: 0px;background-color: #f9f9f9">
            <div class="u-row"
              style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #1c103b;">
              <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: #f9f9f9;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #1c103b;"><![endif]-->

                <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="height: 100%;width: 100% !important;">
                    <!--[if (!mso)&(!IE)]><!-->
                    <div
                      style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                      <!--<![endif]-->

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:15px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #1c103b;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                <tbody>
                                  <tr style="vertical-align: top">
                                    <td
                                      style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                      <span>&#160;</span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <!--[if (!mso)&(!IE)]><!-->
                    </div><!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
              </div>
            </div>
          </div>





          <div class="u-row-container" style="padding: 0px;background-color: transparent">
            <div class="u-row"
              style="margin: 0 auto;min-width: 320px;max-width: 600px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #f9f9f9;">
              <div
                style="border-collapse: collapse;display: table;width: 100%;height: 100%;background-color: transparent;">
                <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:600px;"><tr style="background-color: #f9f9f9;"><![endif]-->

                <!--[if (mso)|(IE)]><td align="center" width="600" style="width: 600px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                <div class="u-col u-col-100"
                  style="max-width: 320px;min-width: 600px;display: table-cell;vertical-align: top;">
                  <div style="height: 100%;width: 100% !important;">
                    <!--[if (!mso)&(!IE)]><!-->
                    <div
                      style="box-sizing: border-box; height: 100%; padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                      <!--<![endif]-->

                      <table style="font-family:\'Lato\',sans-serif;" role="presentation" cellpadding="0" cellspacing="0"
                        width="100%" border="0">
                        <tbody>
                          <tr>
                            <td
                              style="overflow-wrap:break-word;word-break:break-word;padding:0px 40px 30px 20px;font-family:\'Lato\',sans-serif;"
                              align="left">

                              <div style="font-size: 14px; line-height: 140%; text-align: left; word-wrap: break-word;">

                              </div>

                            </td>
                          </tr>
                        </tbody>
                      </table>

                      <!--[if (!mso)&(!IE)]><!-->
                    </div><!--<![endif]-->
                  </div>
                </div>
                <!--[if (mso)|(IE)]></td><![endif]-->
                <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
              </div>
            </div>
          </div>


        </td>
      </tr>
    </tbody>
  </table>
  <!--[if mso]></div><![endif]-->
  <!--[if IE]></div><![endif]-->
</body>

</html>

    ';


      /*
    
    if (mail($to_email, $subject, $body, $headers)) {
      echo "Email successfully sent to $to_email...";
    } else {
      echo "Email sending failed...";
        }
        */


      // require $_SERVER['DOCUMENT_ROOT'] . '/mail/Exception.php';
      // require $_SERVER['DOCUMENT_ROOT'] . '/mail/PHPMailer.php';
      // require $_SERVER['DOCUMENT_ROOT'] . '/mail/SMTP.php';



      $mail = new PHPMailer();
      $mail->isSMTP();
      // $mail->SMTPDebug = 2; // 0 = off (for production use) - 1 = client messages - 2 = client and server messages
      $mail->Host = "smtp.gmail.com"; // use $mail->Host = gethostbyname('smtp.gmail.com'); // if your network does not support SMTP over IPv6
      $mail->Port = 465; // TLS only
      // $mail->SMTPSecure = 'tls'; // ssl is deprecated

      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
      $mail->SMTPAuth = true;
      $mail->AuthType = 'XOAUTH2';

      //Start Option 1: Use league/oauth2-client as OAuth2 token provider
      //Fill in authentication details here
      //Either the gmail account owner, or the user that gave consent 
      // client_secret_588905532156865686508-pr6bu169457hunncaqd50i8js50pn9ab.apps.googleusercontent.com.json

      $path = 'client_secret_588905532156865686508-pr6bu169457hunncaqd50i8js50pn9ab.apps.googleusercontent.com.json';
      $str = file_get_contents($path);
      $json = json_decode($str, true);
      $email = $json['web']['email'];
      $clientId = $json['web']['client_id'];
      $clientSecret = $json['web']['client_secret'];

      $headers    = 'From: ' . $email . '';
      //Obtained by configuring and running get_oauth_token.php
      //after setting up an app in Google Developer Console.
      $refreshToken = $json['web']['refreshToken'];

      $provider = new Google(
        [
          'clientId' => $clientId,
          'clientSecret' => $clientSecret,
        ]
      );
      $mail->setOAuth(
        new OAuth(
          [
            'provider' => $provider,
            'clientId' => $clientId,
            'clientSecret' => $clientSecret,
            'refreshToken' => $refreshToken,
            'userName' => $email,
          ]
        )
      );


      // $mail->SMTPAuth = true;
      // $mail->Username = $email; // email
      // $mail->Password = 'A3v%\/UFk2k}f^04'; // password



      $mail->setFrom($email, 'Gaming Ninja PVT. LTD.'); // From email and name
      $mail->isHTML(true);

      $mail->addAddress("$email_u", "$username_of_sender"); // to email and name
      $mail->Subject = 'Forgot Password Code';
      $mail->Body = $body;

      // $mail->msgHTML("Hi, $username_of_sender, \n
      // Thanks for being part with us. We are grateful to help you.\n
      // $USER_CODE_CONFIDENTIAL  is your OTP valid for 5 minutes.\n
      // Please do not share your code with anyone else. If this wasn't you please email us at 
      // anandjaiswar02@gmail.com or you can also email us at gamingninja.3399@gmail.com");

      // $mail->msgHTML(file_get_contents("Contents.html")); 
      //Read an HTML message body from an external file, convert referenced images to embedded,
      $mail->AltBody = 'Hi, ' . $username_of_sender . ', \n
        Thanks for being part with us. We are grateful to help you.\n
        $USER_CODE_CONFIDENTIAL  is your OTP valid for 5 minutes.\n
        Please do not share your code with anyone else. If this wasn\'t you please email us at 
        anandjaiswar02@gmail.com or you can also email us at gamingninja.3399@gmail.com';
      // If html emails is not supported by the receiver, show this body
      // $mail->addAttachment('images/phpmailer_mini.png'); //Attach an image file

      $mail->SMTPOptions = array(
        'ssl' => array(
          'verify_peer' => false,
          'verify_peer_name' => false,
          'allow_self_signed' => true
        )
      );
      if (!$mail->send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
      } else {
        echo "Message sent to your email ID";
      }

  ?>
      <script>
        location.replace("forgot access granted.php");
      </script>
    <?php
    } else {
    ?>
      <script>
        alert("Email was not registered. Please Register Yourself");
      </script>
  <?php
    }
  }
  ?>

  <div class="body_bg">
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light">
              <a class="navbar-brand" href="index.php"> <img src="https://cdn.dribbble.com/users/5178686/screenshots/11351328/shot-cropped-1589021225059.png" alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu_icon"><i class="fas fa-bars"></i></span>
              </button>

              <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                  </li>
                  <!-- check wheter its previously login or not -->

                  <?php
                  if (!isset($_SESSION['username'])) {
                  ?>
                    <li class="nav-item">
                      <a class="nav-link" href="login.php">Login</a>
                    </li>
                  <?php
                  } else {
                  ?>
                    <li class="nav-item">
                      <a id="LOGIN_ID_MAIN" onclick="CheckStatus()" class="nav-link" href="logout.php">Logout</a>
                    </li>
                  <?php
                  }
                  ?>


                  <li class="nav-item">
                    <a class="nav-link" href="team.php">team</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="blog.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Blog
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="blog.php"> blog</a>
                      <a class="dropdown-item" href="single-blog.php">Latest blog</a>
                    </div>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                  </li>
                </ul>
              </div>
              <a href="#" class="btn_1 d-none d-sm-block">Install Now</a>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <!-- Header part end-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section section_padding">
      <div class="container">
        <div class="row credientials pt-5">
          <div class="col-lg-5">
            <h2 class="contact-title">Enter your Credientials</h2>
          </div>
          <div class="col-lg-7">
            <div class="col-lg-12">
              <form class="form-contact contact_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="contactForm" novalidate="novalidate">
                <div class="row credientials">
                  <div class="col-lg-4 googleButton" onclick="location.replace('Sign In With Google/index.php')">
                    <div class="google-btn form-group">
                      <div class="google-icon-wrapper">
                        <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg" />
                      </div>
                      <p class="btn-text"><b>Sign in with Google</b></p>
                    </div>
                  </div>

                  <div class="col-lg-4 googleButton">
                    <div class="google-btn form-group">
                      <div class="google-icon-wrapper">
                        <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Microsoft_logo.svg/1200px-Microsoft_logo.svg.png" />
                      </div>
                      <p class="btn-text"><b>Sign in with Microsoft</b></p>
                    </div>

                  </div>

                  <div class="col-lg-8">
                    <div class="form-group">
                      <input required class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder='Enter email address'>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <button name="submit" type="submit" class="button-contactForm btn_1">Submit </button>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ contact section end ================= -->

    <!--::footer_part start::-->
    <footer class="footer_part">
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="single_footer_part">
                <a href="index.php" class="footer_logo_iner"> <img src="img/Gaming Ninja Logo.png" alt="#"> </a>
                <p>Connect with US
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="single_footer_part">
                <h4>Contact Info</h4>
                <p>Address : Mumbai, India</p>
                <p>Phone : +91 9699685491</p>
                <p>Email : anandjaiswar02@gmail.com</p>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="single_footer_part">
                <h4>Important Link</h4>
                <ul class="list-unstyled">
                  <li><a href="">WHMCS-bridge</a></li>
                  <li><a href="">Search Domain</a></li>
                  <li><a href="">My Account</a></li>
                  <li><a href="">Shopping Cart</a></li>
                  <li><a href="">Our Shop</a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-6 col-lg-3">
              <div class="single_footer_part">
                <h4>Newsletter</h4>
                <p>Know about the latest Game updates now.
                </p>
                <div id="mc_embed_signup">
                  <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative mail_part">
                    <input required type="email" name="email" id="newsletter-form-email" placeholder="Email Address" class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = ' Email Address '">
                    <button type="submit" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><i class="far fa-paper-plane"></i></button>
                    <div class="mt-10 info"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copygight_text">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <div class="copyright_text">
                <P>
                  Copyright &copy;
                  <script>
                    document.write(new Date().getFullYear());
                  </script> All rights reserved by
                  Gaming Ninja| Made with
                  <i class="ti-heart" aria-hidden="true"></i> by <a href="https://anand-3399.github.io/Portfolio/" target="_blank">Anand Arvind
                    Jaiswar</a>

                </P>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="footer_icon social_icon">
                <ul class="list-unstyled">
                  <li><a href="#" class="single_social_icon"><i class="fab fa-facebook-f"></i></a>
                  </li>
                  <li><a href="#" class="single_social_icon"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#" class="single_social_icon"><i class="fas fa-globe"></i></a></li>
                  <li><a href="#" class="single_social_icon"><i class="fab fa-behance"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--::footer_part end::-->
  </div>
  <!-- jquery plugins here-->
  <script src="js/jquery-1.12.1.min.js"></script>
  <!-- popper js -->
  <script src="js/popper.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.min.js"></script>
  <!-- easing js -->
  <script src="js/jquery.magnific-popup.js"></script>
  <!-- swiper js -->
  <script src="js/swiper.min.js"></script>
  <!-- swiper js -->
  <script src="js/masonry.pkgd.js"></script>
  <!-- particles js -->
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- slick js -->
  <script src="js/slick.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/contact.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/jquery.form.js"></script>
  <script src="js/jquery.validate.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
</body>

</html>