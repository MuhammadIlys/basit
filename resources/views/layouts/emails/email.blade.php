<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABMohsin</title>
    <style>

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .email-wrapper {
            width: 100%;
            max-width: 600px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px 10px 0px 0px;
            padding: 30px;
            margin: 20px auto 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .logo-container {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .email-footer {
            background-color: #FFC744;
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
        }

		.social-icons{
			margin-top: 15px;
		}
        .social-icons img {
            width: 24px;
            height: 24px;
            margin: 0 5px;
        }

        .text-left {
            text-align: left;
        }

        .text-center {
            text-align: center;
        }

        .title {
            font-size: 30px;
            font-family: "Typographica";
            margin-bottom: 50px;
            letter-spacing: 2px;
        }

        p {
            font-family: "bgflame";
        }

        /* Responsive styles */
        @media only screen and (max-width: 600px) {
            .email-wrapper {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <table width="100%" cellpadding="0" cellspacing="0" style="padding: 20px;" style="background-size: cover; background-position: center;">
        <tr>
            <td align="center">
                <!-- Logo Section (outside the white card) -->
                {{-- <div class="logo-container">
                    <img src="https://www.chainofdeeds.com/assets/images/logo/logo.png" alt="Chain of Deeds Logo"
                        style="width: 100px;">
                </div> --}}

                <!-- Main Content Section -->
                <table class="email-wrapper" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center" style="padding: 0 30px;">
                            @yield('content')
                        </td>
                    </tr>
                </table>

               
            </td>
        </tr>
    </table>
</body>

</html>
