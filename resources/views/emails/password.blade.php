<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Thank You For Your Order</title>
  <!-- Designed by https://github.com/kaytcat -->
  <!-- Header image designed by Freepik.com -->


  <style type="text/css">
  /* Take care of image borders and formatting */

  img {
    max-width: 600px;
    outline: none;
    text-decoration: none;
    -ms-interpolation-mode: bicubic;
  }

  a img { border: none; }
  table { border-collapse: collapse !important; }
  #outlook a { padding:0; }
  .ReadMsgBody { width: 100%; }
  .ExternalClass {width:100%;}
  .backgroundTable {margin:0 auto; padding:0; width:100%;}
  table td {border-collapse: collapse;}
  .ExternalClass * {line-height: 115%;}


  /* General styling */

  td {
    font-family: Arial, sans-serif;
    color: #6f6f6f;
  }

  body {
    -webkit-font-smoothing:antialiased;
    -webkit-text-size-adjust:none;
    width: 100%;
    height: 100%;
    color: #6f6f6f;
    font-weight: 400;
    font-size: 18px;
  }


  h1 {
    margin: 10px 0;
  }

  a {
    color: #00a99d;
    text-decoration: none;
  }

  .force-full-width {
    width: 100% !important;
  }

  .force-width-80 {
    width: 80% !important;
  }


  .body-padding {
    padding: 0 75px;
  }

  .mobile-align {
    text-align: right;
  }



  </style>

  <style type="text/css" media="screen">
      @media screen {
        @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,900);
        /* Thanks Outlook 2013! http://goo.gl/XLxpyl */
        * {
          font-family: 'Source Sans Pro', 'Helvetica Neue', 'Arial', 'sans-serif' !important;
        }
        .w280 {
          width: 280px !important;
        }

      }
  </style>

  <style type="text/css" media="only screen and (max-width: 480px)">
    /* Mobile styles */
    @media only screen and (max-width: 480px) {

      table[class*="w320"] {
        width: 320px !important;
      }

      td[class*="w320"] {
        width: 280px !important;
        padding-left: 20px !important;
        padding-right: 20px !important;
      }

      img[class*="w320"] {
        width: 250px !important;
        height: 67px !important;
      }

      td[class*="mobile-spacing"] {
        padding-top: 10px !important;
        padding-bottom: 10px !important;
      }

      *[class*="mobile-hide"] {
        display: none !important;
      }

      *[class*="mobile-br"] {
        font-size: 12px !important;
      }

      td[class*="mobile-w20"] {
        width: 20px !important;
      }

      img[class*="mobile-w20"] {
        width: 20px !important;
      }

      td[class*="mobile-center"] {
        text-align: center !important;
      }

      table[class*="w100p"] {
        width: 100% !important;
      }

      td[class*="activate-now"] {
        padding-right: 0 !important;
        padding-top: 20px !important;
      }

      td[class*="mobile-block"] {
        display: block !important;
      }

      td[class*="mobile-align"] {
        text-align: left !important;
      }

    }
  </style>
</head>
<body  class="body" style="padding:0; margin:0; display:block; background:#8b8c84; -webkit-text-size-adjust:none;" bgcolor="#8b8c84">
<table align="center" cellpadding="0" cellspacing="0" width="100%">
  <tr>
    <td align="center" valign="top" style="background-color:#8b8c84" width="100%">

    <center>

      <table cellspacing="0" cellpadding="0" width="600" class="w320">
        <tr>
          <td align="center" valign="top">


          <table style="margin:0 auto;" cellspacing="0" cellpadding="0" width="100%">
            <tr>
              <td style="text-align: center; padding: 15px; background-color: #003366">
                <a href="#"><img class="w500" width="500" height="88" src="http://crandellhosting.com/images/christwaterford-logo.png" alt="Christ Lutheran Church of Waterford" /></a>
              </td>
            </tr>
          </table>


          <table cellspacing="0" cellpadding="0" class="force-full-width" style="background-color:#FFFFFF; width: 100%">
            <tr>
              <td style="background-color:#FFFFFF;">

                <table cellspacing="0" cellpadding="0" class="force-full-width" style="width: 100%">
                    <tr>
                        <td style="font-size:25px; color: #00746b; text-align:center; padding: 15px 0; width: 100%" class="mobile-spacing">
                        <!--<div class="mobile-br">&nbsp;</div>-->
                          Reset Your Password
                        <br/>
                        </td>
                    </tr>
                </table>

              </td>
            </tr>
          </table>

          <table cellspacing="0" cellpadding="0" class="force-full-width" bgcolor="#ffffff" style="width: 100%">
            <tr>
              <td style="background-color:#ffffff; padding: 0">

              <center>
                <table style="margin:0 auto; width: 80%;" cellspacing="0" cellpadding="0" class="force-width-80">
                  <tr>
                    <td style="text-align:left; padding-top: 15px;">
                    Click here to reset your password: <a href="{{ url('password/reset/'.$token) }}">{{ url('password/reset/'.$token) }}</a>
                    <br><br>
                    </td>
                  </tr>
                </table>

                <table cellspacing="0" cellpadding="0" bgcolor="#003366" class="force-full-width" style="width: 100%">
                  <tr>
                    <td style="color:#f0f0f0; font-size: 14px; text-align:center; padding:10px; width: 100%; background-color: #003366">
                      &copy; {{date('Y')}} All Rights Reserved
                    </td>
                  </tr>
                </table>
              </center>
              </td>
            </tr>
          </table>







          </td>
        </tr>
      </table>

    </center>




    </td>
  </tr>
</table>
</body>
</html>