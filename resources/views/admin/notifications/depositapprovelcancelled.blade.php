<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
    <!-- Web Font / @font-face : BEGIN -->
    <!--[if mso]>
        <style>
            * {
                font-family: 'Roboto', sans-serif !important;
            }
        </style>
    <![endif]-->

    <!--[if !mso]>
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">
    <![endif]-->

    <!-- Web Font / @font-face : END -->

    <!-- CSS Reset : BEGIN -->


    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Roboto', sans-serif !important;
            font-size: 14px;
            margin-bottom: 10px;
            line-height: 24px;
            color: #8094ae;
            font-weight: 400;
        }

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }

        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        table table table {
            table-layout: auto;
        }

        a {
            text-decoration: none;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        button {
            background-color: #6576ff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            width: 20%;
            font-size: 15px;
        }
    </style>

</head>

<body width="100%"
    style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #f5f6fa;">
    <center style="width: 100%; background-color: #f5f6fa;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f5f6fa">
            <tr>
                <td style="padding: 40px 0;">
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding-bottom:25px">
                                    <a href="#"><img style="height: 40px"
                                            src="{{ asset('images/logo-dark2x.png') }}" alt="logo"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;background-color:#ffffff;">
                        <tbody>
                            <tr>
                                <td style="text-align:center;padding: 30px 30px 20px">
                                    <h5
                                        style="font-family: Cambria; margin-bottom: 24px; color: #526484; font-size: 20px; font-weight: 400; line-height: 28px;">
                                        {{ $name }} <br><br> {{ $subject }}</h5>
                                    <p style="margin-bottom: 15px; color: #526484; font-size: 16px;">Your
                                        &#8358;{{ $content }} deposit approval has been cancelled due to
                                        verification issues and has been deducted from your balance. You will be
                                        notified when the problem is rectified and your deposit will be approved.</p>
                                    <a href="{{ $action }}"><button type="button" class="btn">Go to
                                            Dashboard</button></a>

                                    <p style="margin-bottom: 15px; margin-top: 10px;">Hope you'll enjoy the experience,
                                        we're here if you have any questions, drop us a line at info@yourwebsite.com
                                        anytime. </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding:25px 20px 0;">
                                    <p style="font-size: 13px;">Copyright © 2020 DashLite. All rights reserved.</p>
                                    <ul style="margin: 10px -4px 0;padding: 0;">
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a
                                                style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff"
                                                href="#"><img style="width: 30px"
                                                    src="{{ asset('images/brand-b.png') }}" alt="brand"></a></li>
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a
                                                style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff"
                                                href="#"><img style="width: 30px"
                                                    src="{{ asset('images/brand-e.png') }}" alt="brand"></a></li>
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a
                                                style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff"
                                                href="#"><img style="width: 30px"
                                                    src="{{ asset('images/brand-d.png') }}" alt="brand"></a></li>
                                        <li style="display: inline-block; list-style: none; padding: 4px;"><a
                                                style="display: inline-block; height: 30px; width:30px;border-radius: 50%; background-color: #ffffff"
                                                href="#"><img style="width: 30px"
                                                    src="{{ asset('images/brand-c.png') }}" alt="brand"></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
