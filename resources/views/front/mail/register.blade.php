
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <title>Mail</title>
    <style>
        table{
            width: 100%;
        }
        .button {
            background-color: red;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 50px;
        }


    </style>
</head>
<body>
<table>
    <tr style="background-color: #1fa0b6;">
        <td style="text-align: center; color: white;">
            <h1>{{$dataa['title']}}</h1>
            <h5>{{$dataa['description1']}}</h5>
        </td>
    </tr>
    <tr>
        <td  style="text-align: center;">
            <img style="margin-top: 20px; width: 100%;" src="{{asset('images/icon5.png')}}" alt="">
        </td>
    </tr>
</table>
<table style="background-color: #1fa0b6;">
    <tr>
        <td style="text-align: center">
            {{--            <img style="margin-top: 20px; width: 70%" src="{{asset('images/icon5.png')}}" alt="">--}}
        </td>
    </tr>
    <br>
    <tr>
        <td style="text-align: center; color: white">
            <h1>Bonjour,</h1>
            <h2>{{$dataa['firstName']}} {{$dataa['lastName']}}</h2>
            <p>{{$dataa['description2']}}</p>

        </td>
    </tr>
    <br>
    <tr>
        <td style="text-align: center">
            <a target="_blank" href="https://www.google.com/"> <button class="button">www.misterjobby.fr</button></a>
        </td>
    </tr>
    <br>
</table>
<table style="margin-top: 20px">
    <tr>
        <td style="text-align: center">
            <a href="#" class="fa fa-facebook"><img src="https://ci5.googleusercontent.com/proxy/Hp1tHwpZJplBQHTr-WRQujyXVO54yAQdUwALRHoIu3TW_4YDZ6B6Ls74s-w-3MEDpMW9F5Bc8V4B2IT49EMXsm4X1qqiK8IjzmNO4S_OfAs-tByTjpOe2-uS3s3hY3HTf5w=s0-d-e1-ft#http://pubs.payoneer.com/EmailSender/Payoneer/img/Default/BlocksTemplate/fb.jpg" alt=""></a>
            <a href="#" class="fa fa-facebook"><img src="https://ci6.googleusercontent.com/proxy/IrEOgUYJAxNOXCfkCzRhp3Pr5plttxi_SK_vo7HZtMFa9MnD5KZqMxD0PxnsIjARnAifRp7OuUYYY20Bx98L__qgfC-G266Bqx7WcwKAYkekf1hLO0pZhaVmV4UfPbaFNGY=s0-d-e1-ft#http://pubs.payoneer.com/EmailSender/Payoneer/img/Default/BlocksTemplate/tw.jpg" alt=""></a>
            <a href="#" class="fa fa-facebook"><img src="https://ci6.googleusercontent.com/proxy/KSBDtD0zHbN5XeL5qH34sW3-l80xoG-w0BBfwWJAKOpm5TzMSQdySc4IybYGoQHKjT_Wo3UDUSeCtTIWDxoIky3CVQs4NQ208Te17XQNfgN2coi-_NX4ppd5lt40uL9B-LE=s0-d-e1-ft#http://pubs.payoneer.com/EmailSender/Payoneer/img/Default/BlocksTemplate/li.jpg" alt=""></a>
            <a href="#" class="fa fa-facebook"><img src="https://ci4.googleusercontent.com/proxy/cqBt0SYqEkz5P5RlEVBOgBiEsYGuAGdvEGnMKJY7Pny4E4Fc4Wh2XESh_BSxyR0kc6MwhSZ90frj3Z0X3li2uWsh2aqA78SPkhL0ypAuvU4H_SC5HzvlUoN3eE5687knUrE=s0-d-e1-ft#http://pubs.payoneer.com/EmailSender/Payoneer/img/Default/BlocksTemplate/yt.jpg" alt=""></a>
        </td>
    </tr>
    <tr>

        <td style="text-align: center; color:#1fa0b6;"><h3>Mister Jobby</h3></td>
    </tr>
</table>
</body>
</html>
